<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Notifications\AdminMailNotification;
use App\Notifications\ClientMailNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z]+(?:\s*[a-zA-Z]+)+$/'],
            'email' => ['required', 'email:rfc,dns', 'string'],
            'company_name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'contact_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8', 'max:15'],
            'country_code' => ['required'],
            'country_name' => ['required'],
            'subject' => ['required', 'string'],
            'message' => ['nullable', 'string']
        ], [
            'contact_number.min' => 'The :attribute field must be at least :min digit.',
            'contact_number.max' => 'The :attribute field must be at least :max digit.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'code' => Response::HTTP_BAD_REQUEST,
                'message' => $validator->errors(),
            ]);
        }

        try {

            $data = $validator->attributes();

            $data['contact_number'] = '+' . $data['country_code'] . $data['contact_number'];

            $contact = Contact::create($data);

            Notification::route('mail', $contact->email)->notify(new ClientMailNotification());
            Notification::route('mail', config('mail.admin_mail_address'))->notify(new AdminMailNotification($contact));


            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Contact form submitted successfully.',
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => Response::HTTP_BAD_REQUEST,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
