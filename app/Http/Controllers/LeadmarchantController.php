<?php

namespace App\Http\Controllers;
use App\Leadmarchant;
use Illuminate\Http\Request;

class LeadmarchantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $lead =  Leadmarchant::paginate(5);
       return view('leadmarchants.index', compact('lead'));
    }

    public function show(Leadmarchant $lead)
    {
       return view('leadmarchants.show', compact('lead'));
    }
    
    public function create()
    {
        return view("leadmarchants.create");
    }
    public function store(Request $request)
    {
          $data = $request->validate([
            'firstName' => 'required', 
            'lastName' => 'required', 
            'email' => ['required','email'], 
            'mobile' => 'required', 
            'city' => 'required', 
            'street' => 'required', 
            'state' => 'required',
            'country' => 'required',
            'storeName' => 'required',
            'type' => 'required',
            'maplink' => ['url', 'required'],
            'supportEmail' => ['required','email'],
            'maplink' => 'url',
            'phone' => '',
            'location' => '',
            'logo' =>'',
            'condition' => '',
            'contact' => '',
            'altContact' => '',
            'openTime' => '',
            'closeTime' => '',
            'description' => '',                       
        ]);

        if($request->logo){
            $file = $request->logo->store('uploads','public');
            Leadmarchant::create(array_merge($data,
            ['logo'=>$file]));
        }else{
            Leadmarchant::create($data);
        }
               
        return redirect()->back()->with("message","Lead Marchant Added Successfully");
    }

}
