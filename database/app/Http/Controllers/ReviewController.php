<?php

namespace App\Http\Controllers;
use App\Review;
use App\User;
use App\Leadmarchant;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {

        
        $leadmarchants = Leadmarchant::all();

        return view('reviews.create', compact('leadmarchants'));
    }

    public function store(Request $request)
    {
       $request->validate([
        'merchant' => 'required',
        'rating' => 'required',
       ]);

        $user = auth()->user()->id;
     
       Review::create([
           'user_id' => $user,
           'leadmarchant_id' => $request->merchant,
           'review' => $request->review,
           'rating' => $request->rating,

       ]);
       return redirect()->back()->with("message","Review Added Successfully");
    }
}
