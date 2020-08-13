<?php

namespace App\Http\Controllers;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('userProfile.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lastname' => '', 
            'mobile' => 'required', 
            'phone' => '', 
            'street' => 'required', 
            'city' => 'required', 
            'state' => 'required',    
            'country' => 'required',  
            'latitude' => '', 
            'birthdat' => 'required', 
            'gender' => 'required',    
            'estension' => 'required',    
            'type' => '',    
            'token' => '',                        
        ]);
    $user = auth()->user()->id;
    Profile::create(array_merge($data,
    ['user_id'=>$user]));
    return redirect()->back()->with("message","User Profile Created Successfully");

    }

    public function index()
    {
        $users = User::paginate(12);
        return view('userProfile.index',compact('users'));
    }


    public function show(User $user)
    {
        
        return view('userProfile.show',compact('user'));
    }
}
