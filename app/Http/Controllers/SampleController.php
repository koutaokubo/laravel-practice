<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SampleRequest;

class SampleController extends Controller
{
    public function post(SampleRequest $request) {
        return view('index', ['msg'=>'OK!']);
    }

    public function get() {
        return view('post');
    }

    public function apiHello() {
        return response()->json(
            [
                'Good morning' => 'おはよう',
                'Hello' => 'こんにちは',
            ]
        );
    }
}
