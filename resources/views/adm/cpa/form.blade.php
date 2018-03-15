@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">

					<h4><i class="icon-plus"> </i>Novo Colaborador</h4>

			</div>
			<div class="widget-body">

				<form action="{{route('adm.cpa.salvar')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
					{{csrf_field()}}
				<div class="control-group {{$errors->has('nome') ? 'error' : ''}}">
            <label class="control-label" for="nome">Nome:</label>
            <div class="controls">
                <input type="text" class="span6" name="nome" id="nome" value="{{old('nome')}}"/>
								<br>
                <span class="help-inline">{{$errors->first('nome')}}</span>
            </div>
        </div>
				<div class="control-group {{$errors->has('cargos') ? 'error' : ''}}">
              <label class="control-label" for="cargos">Cargo(s):</label>
              <div class="controls">
                  <input type="text" class="span3" name="cargos" id="cargos" value="{{old('cargos')}}"/>
									<br>
                  <span class="help-inline">{{$errors->first('cargos')}}</span>
              </div>
         </div>
        <div class="control-group ">
						<label class="control-label">Foto(Opcional):</label>
								<div class="controls">
												<div class="input-append">
															<input type="file" name="img" id="img" value="{{old('img')}}">
												</div>
								</div>
          </div>
					<div class="control-group {{$errors->has('descricao') ? 'error' : ''}}">
								<label class="control-label">Descrição</label>
								<div class="controls">
									 <textarea class="span6" name="descricao" id="descricao" rows="6" value="{{old('descricao')}}"></textarea>
									 <br>
									 <span class="help-inline">{{$errors->first('descricao')}}</span>
								</div>
          </div>

          <div class="form-actions">
                <button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
                <a href="{{route('adm.cpa')}}">ou cancelar</a>
          </div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection
