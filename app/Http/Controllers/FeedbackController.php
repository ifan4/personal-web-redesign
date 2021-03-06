<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        return view('feedback');
    }


    public function store(Request $request)
    {
        $dataValidasi = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'feedback' => 'required|min:10'
        ]);

        Feedback::create($dataValidasi);

        return redirect('feedback')->with('status', 'Your Feedback Has Been Sent, Thanks for the feedback!');
    }
}
