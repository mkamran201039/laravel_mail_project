<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;

class testController extends Controller
{
    public function send_mail_data(Request $request)
    {
        $name=$request->name;
        $phone=$request->phone;
        $address=$request->address;
        $mail="kamran.job.cse@gmail.com";



      
         if ($request->hasFile('attachment')) {
            
            $attachment = $request->file('attachment');

         
            $attachmentName = $attachment->getClientOriginalName();

          
            $attachment->storeAs('attachments', $attachmentName);
            $attachmentPath = storage_path('app/attachments/' . $attachmentName);
        }

       
        if (isset($attachment)) {
            Mail::to($mail)->send(new sendMail($name, $phone, $address, $attachmentPath));
        } else {
            Mail::to($mail)->send(new sendMail($name, $phone, $address));
        }

        

        return "mail sent";
    }
}
