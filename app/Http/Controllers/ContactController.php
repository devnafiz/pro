<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Mail;


class ContactController extends Controller
{
     

    

    public function ContactSave(Request $request){

      // $request->validate([
      //      'name'=>'required|max:250',
      //      'email'=>'required|email',
      //      'phone'=>'required|max:13',
      //      'message'=>'required|max:500'


      // ]);

      //  $data= new Contact();

      //  $data->name =$request->name;
      //  $data->email =$request->email;
      //  $data->phone =$request->phone;
      //  $data->country =$request->country;
      //  $data->message =$request->message;

      //  $data->save();


      // $this->validate($request, ['email' => 'required|email'] );

        $data = array(
            'name' => $request->name,
           
            'email' => $request->email,
            'phone' => $request->phone,
            'subject'=>$request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('nafiz016@gmail.com');
            $message->subject($data['subject']);
        });

        return response()->json(['success' => 'Your E-mail was sent! Allegedly.'], 200);
       

       //return redirect()->back()->with('success','Successfully  sent message');




    }
}
