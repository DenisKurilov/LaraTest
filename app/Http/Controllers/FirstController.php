<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show($id = null){
        echo 'article #'.$id;
    }

    public function testName($id = null){
        echo 'test for controllers name<br>';
        echo route('test.name', ['id'=>25]);
    }
}
