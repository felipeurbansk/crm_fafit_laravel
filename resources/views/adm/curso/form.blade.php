@extends('layouts.master')

@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">

					<h4><i class="icon-plus"> </i>Cadastrar novo Curso</h4>

			</div>
			<div class="widget-body">

				<form action="{{route('adm.curso.salvar')}}" method="post" class="form-horizontal">
					{{csrf_field()}}
				<div class="control-group @if($errors->has('nome')) error @endif">
            <label class="control-label" for="nome">Curso:</label>
            <div class="controls">
                <input type="text" class="span6" name="nome" id="nome" value="{{old('nome')}}"/>
								<br>
                <span class="help-inline">{{$errors->first('nome')}}</span>
            </div>
        </div>

				<div class="control-group @if($errors->has('duracao')) error @endif">
              <label class="control-label" for="duracao">Duração (Semestres):</label>
              <div class="controls">
                  <input type="text" class="span1" name="duracao" id="duracao" value="{{old('duracao')}}"/>
									<br>
                  <span class="help-inline">{{$errors->first('duracao')}}</span>
              </div>
         </div>

				 <div class="control-group @if($errors->has('ch_total')) error @endif ">
							 <label class="control-label" for="ch_total">Carga Horaria:</label>
							 <div class="controls">
									 <input type="text" class="span1" name="ch_total" id="ch_total" value="{{old('ch_total')}}"/>
									 <br>
									 <span class="help-inline">{{$errors->first('ch_total')}}</span>
							 </div>
					</div>

					<div class="control-group @if($errors->has('descricao')) error @endif ">
								<label class="control-label">Descrição:</label>
								<div class="controls">
									 <textarea class="span6" name="descricao" rows="6" value="{{old('descricao')}}"></textarea>
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
