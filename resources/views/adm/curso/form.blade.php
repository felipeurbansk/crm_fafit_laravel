@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				@isset($curso)
				<h4><i class="icon-pencil"> </i>Editar Curso </h4>
				@else
				<h4><i class="icon-plus"> </i>Cadastrar Curso </h4>
				@endif

			</div>
			<div class="widget-body">
				<form action="@isset($curso){{route('adm.curso.atualizar')}}@else{{route('adm.curso.salvar')}}@endisset" method="post" class="form-horizontal">
					@csrf
					@isset($curso)
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="id" value="{{$curso->id}}">
					@endisset
					<div class="control-group @if($errors->has('nome')) 'error' @endif">
						<label class="control-label" for="nome">Curso:</label>
						<div class="controls">
							<input type="text" class="span6" name="nome" id="nome" value="@isset($curso){{$curso->nome}}@else{{old('nome')}}@endisset"/>
							<br>
							<span class="help-inline">{{$errors->first('nome')}}</span>
						</div>
					</div>
					<div class="control-group @if($errors->has('duracao')) 'error' @endif">
						<label class="control-label" for="duracao">Duração:</label>
						<div class="controls">
							<div class="input-prepend">
								<input type="text" class="span3" name="duracao" id="duracao" value="@isset($curso){{$curso->duracao}}@else{{old('duracao')}}@endisset"/><span class="add-on">Semestres</span>
							</div>
							<br>
							<span class="help-inline">{{$errors->first('duracao')}}</span>
						</div>
					</div>
					<div class="control-group @if($errors->has('ch_total')) 'error' @endif ">
						<label class="control-label" for="ch_total">Carga Horaria:</label>
						<div class="controls">
							<div class="input-prepend">
								<input type="text" class="span5" name="ch_total" id="ch_total" value="@isset($curso){{$curso->ch_total}}@else{{old('ch_total')}}@endisset"/><span class="add-on">Horas</span>
							</div>
							<br>
							<span class="help-inline">{{$errors->first('ch_total')}}</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Selecione as disciplinas</label>
						<div class="controls">
							<select data-placeholder="Selecione disciplinas desse curso" class="chosen span6" multiple="multiple" name="disciplina[]" tabindex="6">
								<option value=""></option>
								<optgroup label="Disciplinas">
									@foreach($disciplina as  $d)
									<option @isset($vetDisc) @if(in_array($d->id,$vetDisc)) selected @endif @endisset value={{$d->id}}>{{$d->nome}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
					</div>
					<div class="control-group @if($errors->has('descricao')) 'error' @endif ">
						<label class="control-label">Descrição:</label>
						<div class="controls">
							<textarea class="span6" name="descricao" rows="6">@isset($curso){{$curso->descricao}}@else{{old('descricao')}}@endisset</textarea>
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
