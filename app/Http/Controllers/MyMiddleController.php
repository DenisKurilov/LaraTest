<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyMiddleController extends Controller
{
    public function Show($id = null){
        echo 'MyMiddle - show - ['.$id.']<br>';

        echo 'route:'.route('my.middle.show', ['id'=>$id]);
    }
}
