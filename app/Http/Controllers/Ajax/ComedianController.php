<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComedianController extends Controller
{
    public function index(){


        //return \App\Models\Comedian::all();
        return \App\Models\Comedian::all();
    }
}
