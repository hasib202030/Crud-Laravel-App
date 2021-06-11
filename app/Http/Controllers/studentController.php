<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function showData(){

        // $showData = Student::all();

   
        return view('show_data');


//    // dada show 
//     //  $showData = Crud::all();

//     $showData = Crud::simplePaginate(4);
// return view('show_data', compact('showData'));

    }

     // student add 
     public function addData(){


           return view('add_data');

     }


     public function storeData(Request $request){

        // form validation code
        $rules= [
                'student_name'=>'required|max:10',
                'student_email'=>'required|email',
        ];

        $this->validate($request, $rules);

        // data add mag...
        // $student = new student();

        // $student->student_name = $request->student_name;
        // $student->student_email = $request->student_email;
        // $student->save();

        // return $request->all;

        // return redirect()->back();
        return redirect('/');
    }





}
