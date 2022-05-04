<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\StudentMarks;
use App\Models\ExamType;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\MarksGrade;
use App\Models\AssignSubject;
use App\Models\SchoolSubject;
use PDF;
use Illuminate\Support\Facades\DB;

class MarkSheetController extends Controller
{
    public function MarkSheetView(){

    	$data['years'] = StudentYear::orderBy('id','desc')->get();
    	$data['classes'] = StudentClass::all();
    	$data['exam_type'] = ExamType::all();
    	return view('backend.report.marksheet.marksheet_view',$data);

    }


    public function MarkSheetGet(Request $request){

    	$year_id = $request->year_id;
    	$class_id = $request->class_id;
    	$exam_type_id = $request->exam_type_id;
    	$id_no = $request->id_no;

        $count_fail = StudentMarks::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->where('marks','<','33')->get()->count();
    	// dd($count_fail);
        $singleStudent = StudentMarks::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->first();
        if ($singleStudent == true) {

            $allMarks = StudentMarks::with(['assign_subject','year'])->where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->get();

            //dd($allMarks->toArray());

            /* Write by nitesh */
            $subjs = DB::table('student_marks')
            ->join('assign_subjects', 'student_marks.assign_subject_id','=','assign_subjects.id')
            ->join('school_subjects', function($join){
                $join->on('school_subjects.id','=','assign_subjects.subject_id');
            })
            ->select('school_subjects.name', 'student_marks.assign_subject_id')
            ->where('student_marks.year_id',$year_id)
            ->where('student_marks.class_id',$class_id)
            ->where('student_marks.exam_type_id',$exam_type_id)
            ->where('student_marks.id_no','=',$id_no)
            ->get();

            foreach($subjs as $object)
            {
                $sub_arr[] = (array) $object;
            }
            /* End of write */

            $allGrades = MarksGrade::all();

            return view('backend.report.marksheet.marksheet_pdf',compact('allMarks','allGrades','count_fail','sub_arr'));

        }else{

    	    $notification = array(
    		    'message' => 'Sorry These Criteria Donse not match',
    		    'alert-type' => 'error'
    	    );

    	    return redirect()->back()->with($notification);
        }


    } // end Method

	public function MarksheetDownload(){
		 echo('work in progress');
	}



}
