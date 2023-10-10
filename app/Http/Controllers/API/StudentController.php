<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Log;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
 public function index(){
    return view('api.students');
 }


 public function store(Request $request){
    $validator = Validator::make($request->all(),[
        'email' => 'required',
        'name' => 'required',
        'phone' => 'required',
        'course' => 'required',
        'image' => 'required',
    ]);

    if($validator->fails()){
        return response([
            'status' => 402,
            'message' => $validator->messages(),
        ]);
    }
    $imageFile = $request->file('image');
    $gettingImage = time(). ''.$imageFile->getClientOriginalExtension();  // store image $gettingImage
    $imagePath = $imageFile->move(public_path('studentImage'),$gettingImage); 

    $users = new Student();
    $users->name = $request->name;
    $users->email = $request->email;
    $users->phone = $request->phone;
    $users->course = $request->course;
    $users->image = $gettingImage;
    $users->save();

    $response =[
        'status' => true,
        'message' => 'data store successfully',
        'data' => $users,
    ];

    return response()->json($response,200);
 }




 public function getstudent($id){
    // dd($id);
    $users = Student::find($id);

    $response = [
        'message' => "student record find",
        'status' => 200,
        'data' => $users,
    ];
    // dd($response);
    return response()->json($response,200);
 }

 public function editPageshow(){
    return view('api.show');
 }

 public function show($id){
    $users = Student::find($id);
    
    $response = [
        'status' => true,
        'message' => 'values retrives successfull',
        'data' => $users,
    ];

    return response()->json($users,201);
 }


 
   
}
