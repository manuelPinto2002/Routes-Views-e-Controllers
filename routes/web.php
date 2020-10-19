<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/', function(){
	 return view('welcome');
});

Route::get('/bem-vindo', function () {
    echo ('ola mundo');
});

Route::get('/', function () {
   echo('<h1>Ola mundo</h1>');
});

Route::get('/bem-vindo', function () {
   echo('<h1> esta é a pagina que lhe dara as boas vindas</h1>');
});

Route::get('/bem-vindo/aedah', function () {
   echo('<h1> esta é so para o agrupamento </h1>');
});

Route::get('/nome/{nome}', function ($nome) {
   echo('<h1> ola '.$nome.'</h1>');
});

Route::get('/nome/{nome}/{apelido}', function ($nome, $apelido) {
   echo('<h1> Ola '.$nome. ' '.$apelido. '</h1>');
});

route::get('/repetir/{nome}/{n}',function($nome, $n){
	$numero=is_numeric($n) ? $n:5;
	for ($i=0; $i <$numero ; $i++) { 
		echo ('<h1>Ola '.$nome. '</h1>');
	}
	return;
});
route::get('/welcome', function(){
	 return view('bemvindo');
});

route::get('nome/{nome}/{apelido}',
function($nome=null,$apelido=null){
return view('mostranome',
['nome'=>$nome,
'apelido'=>$apelido]);
	});

route::get('/tarefas',function(){
	$tarefas=['comprar senha','imprimir fotocopias','carregar cartão'];
	return view ('tarefas',['tarefas'=>$tarefas]);
});

route::get('/', 'app\http\Controllers\PortalController@index');