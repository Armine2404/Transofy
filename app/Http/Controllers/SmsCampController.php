<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SmsCamp;
class SmsCampController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('sms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 
            'startTime' => 'required', 
            'frequency' => 'required', 
            'sentTo' => 'required', 
            'userType' => 'required', 
            'createdBy' => 'required',    
            'description' => '',                       
        ]);
    SmsCamp::create($data);
    return redirect()->back()->with("message","SMS Campaign Created Successfully");

    }

    public function index()
    {
        $smss = SmsCamp::paginate(10);
        return view('sms.index',compact('smss'));
    }
}
