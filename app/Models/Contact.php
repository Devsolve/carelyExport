<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'company_name',
        'contact_number',
        'country_name',
        'subject',
        'message',
        'attachments',
    ];

    protected $appends = ['first_name'];

    public function getFirstNameAttribute(){
        if(!empty($this->name)){
            return is_array(explode(' ', $this->name)) ? explode(' ', $this->name)[0] : $this->name;
        }
        return '';
    }
}
