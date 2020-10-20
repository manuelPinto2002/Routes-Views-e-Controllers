<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index () {
    	return view('entrada');
    }
public function listarEquipas(){
	$teams=[
	'Disportivo das Aves',
    		'Moreirense',
    		'famalicão'
    	];
    		return view('listar-equipas',['equipas'=>$teams);

}

    public function listarEquipa(Request $request){
    	$teams=[
    		'Disportivo das Aves',
    		'Moreirense',
    		'famalicão'
    	];
    	if (is_numeric($request->chave)&&$request->chave>=0 && $request->chave<count($teams)) {
    		$equipa=$teams[$request->chave];
    	}
    	else{
    		$equipa= "Não foi possivel obter a info petendida";
    	}
    	return view('listar-equipas',['equipas'=>$equipa]);


    }


}
