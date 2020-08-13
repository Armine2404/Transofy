<?php

namespace App\Http\Controllers;
use App\Cupon;
use App\Leadmarchant;
use App\User;

use Illuminate\Http\Request;

class CuponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $users = User::all();
        $leadmarchants = Leadmarchant::all();
    
        return view('cupon.create', compact('users', 'leadmarchants'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 
            'user_id' => 'required', 
            'leadmarchants_id' => 'required', 
            'startTime' => 'required', 
            'endTime' => 'required', 
            'baseOn' => 'required',    
            'type' => 'required', 
            'discount' => 'required',
            'currency' => 'required', 
            'createdBy' => 'required', 
            'description' => 'required', 
            'status' => 'required', 
                                
        ]);
    Cupon::create($data);
    return redirect()->back()->with("message","Coupon Created Successfully");

    }
     public function index()
     {
         $cupons = Cupon::paginate(10);
         return view('cupon.index', compact('cupons'));
     }
}
