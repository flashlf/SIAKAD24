<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($param)
    {
        $tmp = [
            'first-post'    => "Hello ini post pertama dari param",
            'second-post'   => "Ini post kedua dari param"
        ];
        if(! array_key_exists($param, $tmp)) abort(404,'Maaf, halaman tidak ditemukan');
        return view('post', [
            'post' => $tmp[$param]
        ]);
    }
}
