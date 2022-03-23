<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{

    private $subject;
    private $subjects;


    public function add()
    {
        return view('teacher.subject.add');
    }
    public function manage()
    {
        $this->subjects =Subject::where('teacher_id',Session::get('user_id'))->get();
        return view('teacher.subject.manage',['subjects'=>$this->subjects]);
    }

    public function create(Request $request)
    {
        Subject::newSubject($request);
        return redirect()->back()->with('message','subject info create successfully');
    }

}
