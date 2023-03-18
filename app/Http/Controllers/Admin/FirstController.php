<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function showstring(){

        return 'static strimg';
    }
    public function getindex(){
        $data=[];
        $data['n']=555;
        $obj1= new \stdClass();
        $obj1 -> ss = 'ahmad';
        $obj1 -> dd =100;
        return view('welcome',$data,compact('obj1'))-> with (['id'=>25,'name'=>'hasan']);

    }
}
