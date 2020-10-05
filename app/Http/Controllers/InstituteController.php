<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InstituteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('backend.institute.add_institute');
    }
    public function view()
    {
        $institute_view = DB::table('institute')->get();
        // return response()->json($institute_view);
        return view('backend.institute.all_institute', compact('institute_view'));
    }
    public function addinstitute(Request $request){
       
        $validatedData = $request->validate([
            'contact' => 'required|unique:institute|max:11|min:11',
            'address' => 'required',
            'year' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);

        $data = array();
        $data['institute_name']=$request->iname;
        $data['contact']=$request->contact;
        $data['address']=$request->address;
        $data['year']=$request->year;
        $data['city']=$request->city;
        $data['zip']=$request->zip;
        // return response()->json($data);
        $institute = DB::table('institute')->insert($data);

        if($institute){
            return Redirect()->route('all-institute')->with('Institute Inserted successfuly');
        }
        else{
            return Redirect()->back()->with('Institute Inserted failed');
        }
    }
    public function singleview($id){
        $institute_single_view = DB::table('institute')->where('id', $id)->first();
        return view('backend.institute.view_institute')->with('raw', $institute_single_view);

    }
    public function delete($id){
        $delete_single_institute = DB::table('institute')->where('id', $id)->delete();

        if($delete_single_institute){
            return Redirect()->route('all-institute')->with('Institute Deleted successfuly');
        }
        else{
            return Redirect()->back()->with('Institute Deleted failed');
        }
    }
    public function edit($id){
        $institute_single_edit = DB::table('institute')->where('id', $id)->first();
        return view('backend.institute.edit_institute')->with('edit_data', $institute_single_edit);
    }
    public function updateinstitute(Request $request, $id){
        $validatedData = $request->validate([
            'contact' => 'required|max:11|min:11',
            'address' => 'required',
            'year' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);

        $data = array();
        $data['institute_name']=$request->iname;
        $data['contact']=$request->contact;
        $data['address']=$request->address;
        $data['year']=$request->year;
        $data['city']=$request->city;
        $data['zip']=$request->zip;
        // return response()->json($data);
        $institute = DB::table('institute')->where('id', $id)->update($data);

        if($institute){
            return Redirect()->route('all-institute')->with('Institute Updated successfuly');
        }
        else{
            return Redirect()->back()->with('Institute Updated failed');
        }
    }
}
