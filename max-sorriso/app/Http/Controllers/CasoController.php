<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Models\Doutor;
use App\Models\Paciente;
use App\Models\Status;
use App\Models\Tomografia;
use Illuminate\Http\Request;

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casos = Caso::with(['doutor', 'paciente', 'tomografia'])->get();
        return view('casos.index', ['casos' => $casos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doutores = Doutor::all();
        $pacientes = Paciente::all();
        $statuses = Status::all();
        return view('casos.create', ['doutores' => $doutores, 'pacientes' => $pacientes, 'statuses' => $statuses]);
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
            'doutor_id' => 'required',
            'paciente_id' => 'required',
            'codigo_caso' => 'required',
            'data_cirurgia' => 'required',
            'status' => 'required',
            'codigo_projeto' => 'required',
            'espessura_tc' => 'required',
            'imagem' => 'required'
        ]);

        $caso = Caso::create($request->all());
        
        if ($request->hasfile('imagem')) {
            $imagem = $request->file('imagem');
            $nome = $imagem->getClientOriginalName();
            $pasta = $imagem->storeAs('uploads', $nome, 'public');

            Tomografia::create([
                'caso_id' => $caso->id,
                'codigo_projeto' => $request->input('codigo_projeto'),
                'espessura_tc' => $request->input('espessura_tc'),
                'nome_arquivo' => $nome,
                'pasta_arquivo' => '/storage/'.$pasta
            ]);
        }

        return back()->with('success', 'Caso cadastrado com sucesso!');
    }
}
