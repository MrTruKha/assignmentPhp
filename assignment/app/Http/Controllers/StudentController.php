<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudentList(Request $request){
    	$studentList=[];
    	for ($i=0;$i<10;$i++){
    		$studentList[]=[
    		'fullname'=>'Tran Van'.$i,
    		'age'=>$i,
    		'address'=>'Nam dinh'.$i
    	];
    	}
    	
    	return view('student_list_method')->with([
   			'studentList'=>$studentList 			
    	]);
    }
    public function addStudent(Request $request){
    	var_dump($request->all());
    }
}
