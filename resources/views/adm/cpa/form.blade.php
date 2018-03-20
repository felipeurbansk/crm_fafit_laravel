@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">

					<h4><i class="icon-plus"> </i>Novo Colaborador </h4>

			</div>
			<div class="widget-body">

				<form action="@isset($membro){{route('adm.cpa.atualizar')}}@else{{route('adm.cpa.salvar')}}@endisset" method="post" class="form-horizontal" enctype="multipart/form-data">
					{{csrf_field()}}
					@isset($membro)
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="id" value="{{$membro->id}}">
					@endisset
				<div class="control-group {{$errors->has('nome') ? 'error' : ''}}">
            <label class="control-label" for="nome">Nome:</label>
            <div class="controls">
                <input type="text" class="span6" name="nome" id="nome" value="@isset($membro){{$membro->nome}}@else{{old('nome')}}@endisset"/>
								<br>
                <span class="help-inline">{{$errors->first('nome')}}</span>
            </div>
        </div>
				<div class="control-group {{$errors->has('cargos') ? 'error' : ''}}">
              <label class="control-label" for="cargos">Cargo(s):</label>
              <div class="controls">
                  <input type="text" class="span3" name="cargos" id="cargos" value="@isset($membro){{$membro->cargos}}@else{{old('cargos')}}@endisset"/>
									<br>
                  <span class="help-inline">{{$errors->first('cargos')}}</span>
              </div>
         </div>
        <div class="control-group ">
						<label class="control-label">Foto(Opcional):</label>
								<div class="controls">
												<div class="input-append">
															<input type="file" name="img" id="img" value="@isset($membro){{$membro->cpa->img}}@else{{old('img')}}@endisset">
												</div>
								</div>
          </div>
					<div class="control-group {{$errors->has('descricao') ? 'error' : ''}}">
								<label class="control-label">Descrição</label>
								<div class="controls">
									 <textarea class="span6" name="descricao" id="descricao" rows="6" >@isset($membro){{$membro->cpa->descricao}}@else{{old('descricao')}}@endisset</textarea>
									 <br>
									 <span class="help-inline">{{$errors->first('descricao')}}</span>
								</div>
          </div>

          <div class="form-actions">
                <button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
                <a href="@isset($membro){{route('adm.cpa.visualizar',$membro->id)}}@else{{route('adm.cpa')}}@endisset">ou cancelar</a>
          </div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection
