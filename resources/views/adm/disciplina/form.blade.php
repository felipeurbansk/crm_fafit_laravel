@extends('layouts.master')

@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				@isset($disciplina)
					<h4><i class="icon-pencil"> </i>Editar Disciplina </h4>
				@else
					<h4><i class="icon-plus"> </i>Cadastro Disciplina </h4>
				@endif
			</div>
			<div class="widget-body">
				<form action="@isset($disciplina){{route('adm.disciplina.atualizar')}}@else{{route('adm.disciplina.salvar')}}@endisset" method="post" class="form-horizontal">
					@csrf
					@isset($disciplina)
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="id" value="{{$disciplina->id}}">
					@endisset
					<div class="control-group @if($errors->has('nome')) 'error' @endif">
						<label class="control-label" for="nome">Disciplina:</label>
						<div class="controls">
								<input type="text" class="span6" name="nome" id="nome" value="@isset($disciplina){{$disciplina->nome}}@else{{old('nome')}}@endisset"/>
							<span class="help-inline">{{$errors->first('nome')}}</span>
						</div>
					</div>
					<div class="control-group @if($errors->has('semestres')) 'error' @endif">
						<label class="control-label" for="semestres">Semestres:</label>
						<div class="controls">
							<div class="input-prepend">
								<input type="text" class="span4" name="semestres" id="semestres" value="@isset($disciplina){{$disciplina->semestres}}@else{{old('semestres')}}@endisset"/>
								<span class="add-on">Semestres</span>
							</div>
							<br>
							<span class="help-inline">{{$errors->first('duracao')}}</span>
						</div>
					</div>
					<div class="control-group @if($errors->has('ch')) 'error' @endif ">
						<label class="control-label" for="ch">Carga Horaria:</label>
						<div class="controls">
							<div class="input-prepend">
								<input type="text" class="span4" name="ch" id="ch" value="@isset($disciplina){{$disciplina->ch}}@else{{old('ch')}}@endisset"/>
								<span class="add-on">Hrs</span>
							</div>
							<br>
							<span class="help-inline">{{$errors->first('ch')}}</span>
						</div>
					</div>
					<div class="control-group @if($errors->has('professore_id')) 'error' @endif ">
						<label class="control-label">Professor:</label>
						<div class="controls">
							<select class="form-control" name="professore_id">
								@foreach(App\Professore::orderBy('nome','asc')->get() as $p)
									<option value="{{$p->id}}">{{$p->nome}}</option>
								@endforeach
							</select>
							<br>
							<span class="help-inline">{{$errors->first('descricao')}}</span>
						</div>
					</div>

					<div class="control-group @if($errors->has('descricao')) 'error' @endif ">
						<label class="control-label">Descrição:</label>
						<div class="controls">
							<textarea class="span6" name="descricao" rows="6">@isset($disciplina){{$disciplina->descricao}}@else{{old('descricao')}}@endisset</textarea>
							<br>
							<span class="help-inline">{{$errors->first('descricao')}}</span>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
						<a href="{{route('adm.curso')}}">ou cancelar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
