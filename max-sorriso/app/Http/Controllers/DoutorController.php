<?php

namespace App\Http\Controllers;

use App\Models\Doutor;
use Illuminate\Http\Request;

class DoutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doutores = Doutor::all();
        return view('doutores.index', ['doutores' => $doutores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doutores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'data_nascimento' => 'required',
            'uf' => 'required',
            'crm' => 'required'
        ]);

        Doutor::create($request->all());

        return back()->with('success', 'Doutor cadastrado com sucesso!');
    }
}
