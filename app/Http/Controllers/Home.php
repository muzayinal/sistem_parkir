<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return \view('home');
    }

    function daftar_member()
    {
        return \view('daftarmember');
    }

    function perpanjang_member()
    {
        return \view('perpanjangmember');
    }

    function data_member()
    {
        return \view('datamember');
    }
}
