<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageTrait;
use App\Models\Userprofile;
use Auth;


class CanvaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('canva.index');
    }

    public function profileCanva(){
        $userProfile = Userprofile::where('email', Auth::user()->email)->first();
        // Log::info('user geeting profile'.$userProfile);
        return view('user.profile-seeting',compact('userProfile'));
    }

    public function profileCanvaStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'userimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);
    
        $input = $request->all();
        // Log::info('Request data:', $input);

        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()], 400);
        }
    
        $imageFile = $request->file('userimage');
        $imageName = time() . ' ' . $imageFile->getClientOriginalExtension();
        $imagePath = $imageFile->move(public_path('studentImage'), $imageName);
        
        $userProfile = new Userprofile($request->all());
        $userProfile->userimage = $imageName; // Store the image file name
        $userProfile->save();
        // Log::info('User profile stored successfully: ' . print_r($userProfile->toArray(), true));
        $response = [
            'status' => true,
            'message' => 'Values stored successfully',
            'data' => $userProfile,
        ];
    
        return response()->json($response, 200);
    }


    public function userCreateCv(){

        return view('canva.create');
    }
}
