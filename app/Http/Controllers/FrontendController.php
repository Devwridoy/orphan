<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $orphan_view = DB::table('orphan')
        ->join('institute', 'orphan.institute_id' ,'institute.id')
        ->select('orphan.*', 'institute.institute_name')
        ->get();
        return view('public.home', compact('orphan_view'));
    }
    public function adoption()
    {
        $orphan_view = DB::table('orphan')
        ->join('institute', 'orphan.institute_id' ,'institute.id')
        ->select('orphan.*', 'institute.institute_name')
        ->get();
        return view('public.adoption', compact('orphan_view'));
    }
    public function how()
    {
        $orphan_view = DB::table('orphan')
        ->join('institute', 'orphan.institute_id' ,'institute.id')
        ->select('orphan.*', 'institute.institute_name')
        ->get();
        // return response()->json($institute_view);
        return view('public.adoption', compact('orphan_view'));
    }
    public function stories()
    {
        $orphan_view = DB::table('orphan')
        ->join('institute', 'orphan.institute_id' ,'institute.id')
        ->select('orphan.*', 'institute.institute_name')
        ->get();
        // return response()->json($institute_view);
        return view('public.stories', compact('orphan_view'));
    }
    public function about()
    {
        $orphan_view = DB::table('orphan')
        ->join('institute', 'orphan.institute_id' ,'institute.id')
        ->select('orphan.*', 'institute.institute_name')
        ->get();
        // return response()->json($institute_view);
        return view('public.about', compact('orphan_view'));
    }
    public function contact()
    {
        // return response()->json($institute_view);
        return view('public.contact');
    }
    public function contactAdd(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required|max:11|min:11',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['message']=$request->message;
        // return response()->json($data);
        $institute = DB::table('contact')->insert($data);

        if($institute){
            return Redirect()->route('all-contact')->with('Institute Inserted successfuly');
        }
        else{
            return Redirect()->back()->with('Institute Inserted failed');
        }
    }
    public function allcontact(){
        $contactall = DB::table('contact')->get();
        // return response()->json($institute_view);
        return view('backend.all-contact', compact('contactall'));
    }
}
