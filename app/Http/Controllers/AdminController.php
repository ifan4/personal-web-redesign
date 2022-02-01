<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.home', [
            'totalFeedback' => Feedback::count()
        ]);
    }

    public function loginAdmin()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('admin/feedbacks')->with('messageLogin', 'Halo Selamat Datang di Dashboard Admin ifandri.com!');
        }

        return back()->with('loginError', 'Email or password wrong');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }

    public function feedbacks()
    {
        return view('admin.dashboard.feedbacks', [
            'title' => 'Feedbacks',
            'feedbacks' => Feedback::latest()->paginate(6)
        ]);
    }
}
