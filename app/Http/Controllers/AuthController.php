<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Storage;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginprocess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $response = Http::asForm()->post(env('API_URL').'/api/login', [
            "username" => $request->get('username'),
            "password" => $request->get('password'),
            "device_token" => 'aasdas'
        ]);

        if($response['success'] == 'true')
        {
            $path = $response['data']['id'].'.json';
            Storage::disk('local')->put($path, json_encode($response['data']));
            return redirect('users/dashboard/'.$response['data']['id']);
        } else {
            return back()->with('error', $response['message']);
        }
    }
}
