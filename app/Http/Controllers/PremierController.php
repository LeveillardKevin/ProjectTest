<?php

namespace ProjetTest\Http\Controllers;

use Illuminate\Http\Request;

use ProjetTest\Http\Requests;
use ProjetTest\Http\Controllers\Controller;

class PremierController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
