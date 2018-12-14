<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class ArticleController extends Controller
{
    public function show($id = null){
        if(!($id == 1 or $id == 2)){ abort(404); };
        $data = array();
        $data['title'] = 'Article '.$id;
        $data['route_current'] = Route::currentRouteName();
        $data['route_current_id'] = $id;
        $data['route']['home'] = route('home');
        $data['route']['page'] = route('page');
        $data['route']['about'] = route('about');
        $data['route']['article'][1] = route('article',['id' => 1]);
        $data['route']['article'][2] = route('article',['id' => 2]);
        return view('article',$data);
    }
}
