<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubField;
use App\Departments;
class FieldController extends Controller
{
    //
    public function getList($id){
        $department1 = Departments::all()->where('id',$id);
        $subFeild = SubField::all()->where('department',$id);
        return view("layouts.complaints-page",compact('department1','subFeild'));
    }

}
