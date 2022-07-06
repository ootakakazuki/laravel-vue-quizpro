<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(){
        $questions = Quiz::all();
        return view('adminpage', 'questions');
    }
/*
    $ques = Quiz::all();
    return view();
    //
*/
}
