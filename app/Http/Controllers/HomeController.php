<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class HomeController extends Controller
{
    public function show(){
        $data = array();
        $data['title'] = 'Home';
        $data['jumbotron_title'] = 'The best page';
        $data['route_current'] = Route::currentRouteName();
        $data['route_current_id'] = 0;
        $data['route']['home'] = route('home');
        $data['route']['page'] = route('page');
        $data['route']['about'] = route('about');
        $data['route']['article'][1] = route('article',['id' => 1]);
        $data['route']['article'][2] = route('article',['id' => 2]);
        return view('home',$data);
    }
}
