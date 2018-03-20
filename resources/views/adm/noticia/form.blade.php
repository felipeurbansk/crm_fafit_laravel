@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
					<h4><i class="icon-plus"> </i>Nova notícia </h4>
			</div>
			<div class="widget-body">

				<form action="@isset($noticia) {{route('adm.noticia.atualizar')}} @else {{route('adm.noticia.salvar')}} @endisset" method="post" class="form-horizontal" enctype="multipart/form-data" >
					{{csrf_field()}}
					@isset($noticia)
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="id" value="{{$noticia->id}}">
					@endisset
					<div class="control-group {{$errors->has('titulo') ? 'error' : ''}} ">
	            <label class="control-label" for="titulo">Titulo:</label>
	            <div class="controls">
	                <input type="text" class="span5" name="titulo" id="titulo" value="@isset($noticia){{$noticia->titulo}}@else{{old('titulo')}}@endisset"/>
									<br>
	                <span class="help-inline">{{$errors->first('titulo')}}</span>
	            </div>
	        </div>

					<div class="control-group {{$errors->has('corpo') ? 'error' : ''}}">
	              <label class="control-label" for="corpo">Resumo:</label>
	              <div class="controls">
	                  <textarea class="span5" rows="3" name="resumo" id="resumo">@isset($noticia){{$noticia->resumo}}@else{{old('resumo')}}@endisset</textarea>
										<br>
		                <span class="help-inline">{{$errors->first('resumo')}}</span>
	              </div>
	         </div>

						<div class="control-group {{$errors->has('data') ? 'error' : '' }}">
									<label class="control-label">Data da notícia:</label>
									<div class="controls">
										<input class="span2" type="text" data-mask="9999/99/99" name="data" placeholder="yyyy-mm-dd" value="@isset($noticia){{$noticia->data}}@else{{old('data')}}@endisset">
										<br>
		                <span class="help-inline">{{$errors->first('data')}}</span>
									</div>
	          </div>

						<div class="control-group {{$errors->has('palavras_chaves') ? 'error' : ''}}">
									<label class="control-label" for="palavras_chaves">Palavras-chave:</label>
									<div class="controls">
											<input type="text" class="span5" name="palavras_chaves" id="palavras_chaves" value="@isset($noticia){{$noticia->palavras_chaves}}@else{{old('palavras_chaves')}}@endisset"/>
											<br>
			                <span class="help-inline">{{$errors->first('palavras_chaves')}}</span>
									</div>
						 </div>
						<div class="control-group ">
									<label class="control-label" for="img">Foto(Opcional):</label>
									<div class="controls">
											<input type="file" class="span5" name="img" id="img" value="@isset($noticia){{$noticia->img}}@else{{old('img')}}@endisset"/>
											<span class="help-inline"></span>
									</div>
						 </div>
						 <div class="control-group {{$errors->has('resumo') ? 'error' : ''}}">
									 <label class="control-label" for="resumo">Corpo:</label>
									 <div class="controls">
											 <textarea class="span5" rows="5" name="corpo" id="corpo" >@isset($noticia){{$noticia->corpo}}@else{{old('corpo')}}@endisset</textarea>
											 <br>
			                 <span class="help-inline">{{$errors->first('corpo')}}</span>
									 </div>
							</div>
						<div class="control-group {{$errors->has('autor') ? 'error' : ''}}">
									<label class="control-label" for="img">Autor:</label>
									<div class="controls">
											<select class="span5" name="autor">
												<option value="cpa">CPA</option>
												<option value="cpa" {{isset($noticia) && $noticia->eh_coordenador == 1 ? 'selected' : ''}} >Coordenador</option>
											</select>
											<br>
			                <span class="help-inline">{{$errors->first('autor')}}</span>
									</div>
						 </div>

	          <div class="form-actions">
	                <button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
	                <a href="{{route('adm.noticia')}}">ou cancelar</a>
	          </div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
