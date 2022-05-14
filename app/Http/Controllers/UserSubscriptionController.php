<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserSubscriptionController extends Controller
{
    public function getSubscribe(){
        return view('welcome');
    }

    public function postSubscribe(Request $request){
        $request -> validate([
            'email'=>'required|email'
        ]);
        Storage::append('emails.txt', $request -> input('email'));
        return response()->json(['success' => true]);
    }
}
