<?php

namespace App\Models;

use App\Mail\ContactMail;
use App\Mail\NewContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactForm extends Model
{
    use HasFactory;
    // protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'message'];

    protected $table = 'contact_form';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'message'];

    public static function boot() {
  
    parent::boot();
  
    static::created(function ($data) {
                
    $adminEmail ="farhanbhati644@gmail.com";
    Mail::to($adminEmail)->send(new NewContactMail($data));
                });
}
}
