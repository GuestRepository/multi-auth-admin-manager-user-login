<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use DB;
use Log;
use PDF;

class AppliedJobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
          // Execute the SQL query
          $courseCounts = DB::select("
          SELECT course, COUNT(id) AS user_count
          FROM students
          GROUP BY course
      ");

      return view('admin.applied-jobs.index', compact('courseCounts'));
    } 

    public function appliedView($course){
        // Log::info('applied edit' .print_r($course,true));
        $getCourses = Student::where('course',$course)->get();
        return view('admin.applied-jobs.show-applied-list', compact('getCourses','course'));
       
    }
    public function appliedEdit($course){
        $users = Student::where('id',$course)->first();
        $courseGet = Student::where('id',$course)->where('course',$users->course)->first();
        Log::info('users get by course '. $courseGet);
        return view('admin.applied-jobs.edit', compact('users','courseGet'));
       
    }

    public function blockUser($id)
{
    $user = Student::findOrFail($id);
    $user->is_blocked = 1; // Set the appropriate field to indicate blocked status
    $user->save();

    return response()->json(['message' => 'User blocked successfully']);
}

public function unblockUser($id)
{
    $user = Student::findOrFail($id);
    $user->is_blocked = 0; // Set the appropriate field to indicate unblocked status
    $user->save();

    return response()->json(['message' => 'User unblocked successfully']);
}

public function downloadPDF($id)
{
    // Retrieve user data (replace with your own logic)
    $users = Student::findOrFail($id);

    // Generate PDF using a Blade view
    $pdf = PDF::loadView('pdf.user_list', compact('users'));

    // Download the PDF with a specific file name
    return $pdf->download('user_list.pdf');
}




}
