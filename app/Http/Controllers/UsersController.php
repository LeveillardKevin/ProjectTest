<?php

namespace ProjetTest\Http\Controllers;

use Illuminate\Http\Request;

use ProjetTest\Http\Requests;
use ProjetTest\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getInfos()
    {
        return view('Infos');
    }

    public function postinfos(Request $request)
    {
        return 'Le nom est '. $request->input('nom'). ' et le prenom est '.$request->input('prenom');
    }
}
