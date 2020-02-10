<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/welcome');
    }
    
    public function show($id)
    {
        return $id;
    }
    
    public function single($id)
    {
        $nilai = 'ini adalah linknya ' . $id;
        $user = 'Dedi Rahmansah';
        $users = ['Derah', 'Fadli', 'Taufiq'];
        return view('blog/single', ['blog' => $nilai, 'user' => $user, 'users' => $users]);
    }
}
