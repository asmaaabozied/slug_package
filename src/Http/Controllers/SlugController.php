<?php

namespace asmaa\slug\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SlugController extends Controller{
    public function index(){
        $slug = Str::slug(title: 'web developer Descriptions');
        return view('asmaa/slug::slug', compact('slug'));
    }
}
