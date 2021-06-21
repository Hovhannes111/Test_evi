<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->to('/home');
        }
        return view('auth.login');
    }

    public function edit(Request $request)
    {
        if ($request->method() === 'POST') {
            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::find($user_id);
            $user->name = $request->get('name');
            $user->email = $request->get('email');

            if (!empty($request['image'])) {

                if (!empty($user->image)) {
                    unlink(public_path('uploads\\') . $user->image);
                }

                \request()->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
                $image = time() . '.' . $request['image']->extension();
                $request['image']->move(public_path('uploads'), $image);
                $user->image = $image;
            }

            $user->save();
            session()->flash('changed', 'Your information is changed');
            return redirect()->back();

        } else {
            if (Auth::user() != null) {
                $user_id = Auth::user()->getAuthIdentifier();
                $user = User::find($user_id);
                return view('edit', compact('user'));
            }
            else{
                return redirect()->to('/register');
            }
        }
    }

    public function error()
    {
        return redirect()->to('/register');
    }
}
