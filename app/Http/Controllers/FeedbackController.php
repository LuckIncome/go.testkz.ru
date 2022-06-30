<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Feedback;
use App\Models\Eventback;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if (!Subscriber::where('email',$request->email)->exists()){
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();
        }

        return response()->json(['success' => true], 200);
    }

    public function feedback(Request $request)
    {  
        $surname = $request->get('surname');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $page = $request->get('page');
        $url = $request->get('url');

        $to = "sahov.jando@gmail.com";
        $subject = "Заявка с сайта go.kz";
        $sendfrom   = "no-reply@go.kz";
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $message = "
        $subject<br>
        <b>Имя:</b> $name <br>
        <b>Фамилия:</b> $surname <br>
        <b>E-mail:</b> $email <br>
        <b>Телефон:</b> $phone <br>
        <b>URL:</b> $url";

        $send = mail($to, $subject, $message, $headers);
        
        $validator = Validator::make($request->all(), [
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if ($send)
        { 
            $feedback = new Feedback();
            $feedback->surname = $request->surname;
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->email = $request->email;
            $feedback->save();
        }

        return response()->json(['success' => true], 200);
    }

    public function eventback(Request $request)
    {  
        $surname = $request->get('surname');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $page = $request->get('page');
        $url = $request->get('url');

        $to = "sahov.jando@gmail.com";
        $subject = "Заявка с сайта go.kz";
        $sendfrom   = "no-reply@go.kz";
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $message = "
        $subject<br>
        <b>Имя:</b> $name <br>
        <b>Фамилия:</b> $surname <br>
        <b>E-mail:</b> $email <br>
        <b>Телефон:</b> $phone <br>
        <b>URL:</b> $url";

        $send = mail($to, $subject, $message, $headers);
        
        $validator = Validator::make($request->all(), [
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if ($send)
        { 
            $feedback = new Eventback();
            $feedback->surname = $request->surname;
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->email = $request->email;
            $feedback->save();
        }

        return response()->json(['success' => true], 200);
    }
}
