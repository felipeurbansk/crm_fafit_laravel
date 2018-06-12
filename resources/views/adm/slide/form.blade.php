@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				@isset($slide)
				    <h4><i class="icon-pencil"> </i>Editar Slide </h4>
				@else
				    <h4><i class="icon-plus"> </i>Novo Slide </h4>
				@endif

			</div>
			<div class="widget-body">
				<form action="@isset($slide){{route('adm.slide.atualizar')}}@else{{route('adm.slide.salvar')}}@endisset" method="post" class="form-horizontal" enctype="multipart/form-data">
					@csrf
					@isset($slide)
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="id" value="{{$slide->id}}">
					@endisset
					
					<div class="control-group @if($errors->has('descricao')) 'error' @endif ">
						<label class="control-label">Título:</label>
						<div class="controls">
							<input type="text" name="titulo" value="@isset($slide){{$slide->titulo}}@else{{old('titulo')}}@endisset"></input>
							<br>
							<span class="help-inline">{{$errors->first('descricao')}}</span>
						</div>
					</div>
					<div class="control-group @if($errors->has('descricao')) 'error' @endif ">
						<label class="control-label">Descricao:</label>
						<div class="controls">
							<textarea class="span6" name="descricao" rows="6">@isset($slide){{$slide->descricao}}@else{{old('descricao')}}@endisset</textarea>
							<br>
							<span class="help-inline">{{$errors->first('descricao')}}</span>
						</div>
					</div>
					<div class="control-group ">
							<label class="control-label">Imagem:</label>
							<div class="controls">
								<div class="input-append">
									<input type="file" name="img" id="img" value="@isset($slide){{$slide->img}}@else{{old('img')}}@endisset">
								</div>
							</div>
						</div>
					<div class="control-group @if($errors->has('exibir')) 'error' @endif ">
						<label class="control-label">Publicar:</label>
						<div class="controls">
							<select class="form-control" name="exibir">
								<option value="1">Sim</option>
								<option value="0"{{isset($slide) && $slide->exibir == 0 ? 'selected' : ''}}>Não</option>
							</select>
							<br>
							<span class="help-inline">{{$errors->first('exibir')}}</span>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn blue"><i class="icon-ok"></i>Salvar</button>
						<a href="{{route('adm.slide')}}">ou cancelar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
