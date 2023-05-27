<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
            'contact_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:15'],
            'subject' => ['required', 'string'],
            'message' => ['nullable', 'string']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'code' => Response::HTTP_BAD_REQUEST,
                'message' => $validator->errors(),
            ]);
        }

        try {

            Contact::create($validator->attributes());

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
