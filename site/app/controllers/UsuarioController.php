<?php

class UsuarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dadosCurso = Curso::all();
		$dados = ['titulo' => 'Cadastro Usuario','cursos' => $dadosCurso];
		return View::make('cadastroUsuario')->with($dados);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nome = Input::get('nome');
		$email = Input::get('email');
		$matricula = Input::get('matricula');
		$senha = md5(Input::get('senha'));
		$curso = Input::get('curso');

		$alunoExiste = Usuario::where('nome','=',$nome)->first();
		if (!$alunoExiste) {
				$attributes = ['nome'=>$nome,'matricula'=>$matricula,'email'=>$email,'senha' => $senha,'curso_idcurso' => $curso];
				if(Usuario::create($attributes)){
					return Redirect::to('/')->with('mensagem','Aluno cadastrado com sucesso!');
				}else{
					return Redirect::to('/')->with('mensagem','Não foi possivel cadastrar, aconteceu algum erro!');
				}
			}else{
				//Redirect::to('/')->with('mensagem','O cliente ja existe')->withInput();
				Session::flash('mensagem','O cliente ja existe!!!!');
				return Redirect::to('/cadastroUsuario')->withInput(Input::except(['nome']));
			}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	//public function selectCursos(){

	//	$cursos = Curso::all();
	//	$todosCursos = ['id' => $idcurso, 'nome' => $nome];
	//	return $todosCursos;
	//}

}
