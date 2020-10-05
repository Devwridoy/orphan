<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrpahnController extends Controller
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
        $institute = DB::table('institute')->get();
        return view('backend.orphan.add_orphan', compact('institute'));
    }
    public function view()
    {
        $orphan_view = DB::table('orphan')
        ->join('institute', 'orphan.institute_id' ,'institute.id')
        ->select('orphan.*', 'institute.institute_name')
        ->get();
        // return response()->json($institute_view);
        return view('backend.orphan.all_orphan', compact('orphan_view'));
    }
    public function addorphan(Request $request){
        $validatedData = $request->validate([
            'address' => 'required',
            'age' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png,PNG | max:1000',
        ]);

        $data = array();
        $data['first_name']=$request->fname;
        $data['last_name']=$request->lname;
        $data['address']=$request->address;
        $data['institute_id']=$request->institute_id;
        $data['age']=$request->age;
        $data['city']=$request->city;
        $data['zip']=$request->zip;
        $image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            // return response()->json($data);
            DB::table('orphan')->insert($data);
            // return Redirect()->back()->with('Orphan added successfuly');
            return Redirect()->route('all-orphan')->with('Institute Inserted successfuly');
        }
        else{
            DB::table('orphan')->insert($data);
            return Redirect()->back()->with('Orphan added successfuly without image');
            
        }
    }
    public function singleview($id){
        $orphan_single_view = DB::table('orphan')
                            ->join('institute', 'orphan.institute_id' ,'institute.id')
                            ->select('orphan.*', 'institute.institute_name')
                            ->where('orphan.id',$id)
    	                    ->first();
        return view('backend.orphan.view_orphan', compact('orphan_single_view'));
        
    }

    public function delete($id){
        $orphan=DB::table('orphan')->where('id',$id)->first();
    	$image=$orphan->image;
    	$delete=DB::table('orphan')->where('id',$id)->delete();
    	if ($delete) {
             return Redirect()->back()->with("Orphan data deleted Successfully");
    	}else{
    		return Redirect()->back()->with("Orphan data deleted Unsuccessfully");
    	}
    }
    public function edit($id){
        $institute=DB::table('institute')->get();
    	$orphan=DB::table('orphan')->where('id',$id)->first();
    	return view('backend.orphan.edit_orphan',compact('institute','orphan'));
    }
    public function updateorphan(Request $request,$id){
        $validatedData = $request->validate([
            'address' => 'required',
            'age' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png,PNG | max:1000',
        ]);

        $data = array();
        $data['first_name']=$request->fname;
        $data['last_name']=$request->lname;
        $data['address']=$request->address;
        $data['institute_id']=$request->institute_id;
        $data['age']=$request->age;
        $data['city']=$request->city;
        $data['zip']=$request->zip;
        $image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('orphan')->where('id',$id)->update($data);
             return Redirect()->route('all-orphan')->with('Data Update Successfully');
    	}else{
    		 $data['image']=$request->old_photo;
    		 DB::table('orphan')->where('id',$id)->update($data);
             return Redirect()->route('all-orphan')->with('Data Update Successfully');
    	}

    }
    
}