<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

 class RegisterController extends Controller
 {
    public function index()
    {
        return view('register', [
            'title' => ('Register'),
            'active' => ('register')
        ]);
    }
   
    
    public function store()
    {
        return request()->all();
    }
}