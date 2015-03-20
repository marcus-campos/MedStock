@extends('layout')

@section('content')

	{{Form::open(['route' => 'cadastroUsuario.store', 'method' => 'POST' ,'class' => 'form-horizontal'])}}
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Nome</label>
													<div class="col-md-4">
														{{Form::text ('nome','',array('placeholder' => 'Nome','class' => 'form-control input-circle'))}}
													</div>
												</div>
												<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Matricula</label>
													<div class="col-md-4">
														{{Form::text ('matricula','',array('placeholder' => 'Matricula','class' => 'form-control input-circle'))}}
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon input-circle-left">
															<i class="fa fa-envelope"></i>
															</span>
															{{Form::email ('email','',array('placeholder' => 'Email','class' => 'form-control input-circle-right'))}}
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Senha</label>
													<div class="col-md-4">
														<div class="input-group">
														
															{{Form::password ('senha',array('class' => 'form-control input-circle-left'))}}
															<span class="input-group-addon input-circle-right">
															<i class="fa fa-user"></i>
															</span>
														</div>
													</div>
												</div>
											
													

															
															<div class="form-group">
															<label class="control-label col-md-3">Curso</label>
															<div class="col-md-4">
																<select name="curso" class="form-control input-large select2me" data-placeholder="Cursos...">
																	<option value=""></option>
																	<?php foreach ($cursos as $curso): ?>
																		<option value="{{$curso->idcurso}}">{{$curso->nome}}</option>
																	<?php endforeach ?>
																</select>
															</div>
														</div>

 	


											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														{{Form::submit('Cadastrar', array('class' => 'btn btn-circle blue')) }}
														
														<button type="button" class="btn btn-circle default">Cancelar</button>
													</div>
												</div>
											</div>
									
										<!-- END FORM-->




				{{Form::close()}}
@stop