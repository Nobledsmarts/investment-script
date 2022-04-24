<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller {
    public function sendNewsLetter(Request $request) {
        $receivers = $request->receivers;
        $subject = $request->subject;
        $message = $request->message;
        $details = [
            'message' => $message,
            'subject' => $subject,
            'view' => 'emails.user.newsletter'
        ];
        try {
            foreach($receivers as $receiver) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($receiver)->send($mailer);
            }
            $request->session()->flash('success', 'Newsletter sent successfully');
            return back();

        } catch(\Exception $e){
            $request->session()->flash('error', 'Something went wrong');
            return back();
        }

    }
    
    public function contactSupport(Request $request) {

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        $files = [];
        $has_attachment = false;

        if(!empty($request->images)) {
            $has_attachment = true;
            foreach($request->images as $image) {
            // Get file name with extension

            $fileNameWithExt = $image->getClientOriginalName();

            // Get just file name

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just file extension
            $fileExt = $image->getClientOriginalExtension();

            // Get just file name to store
            $fileNameToStore = $fileName . '_' . time() . '_' . '.' . $fileExt;

                $image->move(public_path('galleries'), $fileNameToStore);

            array_push($files, public_path('galleries/' . $fileNameToStore));

            }

        }

        $data['has_attachment'] = $has_attachment;

        $send = Mail::send('emails.admin.support', $data, function($message)use($data, $files){
            $message->to($data['email'], $data['email'])
            ->subject($data['subject']);

            foreach($files as $file) {
                $message->attach($file);
            }
        });
    }
}
