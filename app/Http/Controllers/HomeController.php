<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pendaftar()
    {
        return view('pendaftar');
    }

    public function hasil()
    {
        return view('hasil');
    }

    public function bobot()
    {
        return view('bobot');
    }


    public function matriks()
    {
        return view('matriks');
    }

    public function prefensi()
    {
        return view('prefensi');
    }

    public function ranking()
    {
        return view('ranking');
    }


    public function prodi()
    {
        $prodi = jurusan::all();
        return view('prodi', compact('prodi'));
    }
}
