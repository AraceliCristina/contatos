<?php

namespace App\Http\Controllers;

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
        $numLivros= Livro::all()->count();
        $numLivros= Contato::all()->count();
        $numLivros= Emprestimo::all()->count();
        return view('home',array ['numLivros'=>$numLivros,'numContatos'=>$numContatos,'numEmprestimos'=>$numEmprestimos]);
    }
}
