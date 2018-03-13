@extends('layouts.master')

@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">

					<h4><i class="icon-plus"> </i>Cadastrar novo professor</h4>

			</div>
			<div class="widget-body">

				<form action="{{route('adm.professor.salvar')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				{{csrf_field()}}
				<div class="control-group ">
            <label class="control-label" for="nome">Nome:</label>
            <div class="controls">
                <input type="text" class="input-medium" name="nome" id="nome" value=""/>
                <span class="help-inline"></span>
            </div>
        </div>
				<div class="control-group ">
              <label class="control-label" for="titulacao">Titulação:</label>
              <div class="controls">
                  <input type="text" class="input-xxlarge" name="titulacao" id="titulacao" value=""/>
                  <span class="help-inline"></span>
              </div>
         </div>
        <div class="control-group ">
						<label class="control-label">Foto</label>
								<div class="controls">
										<input type="file" name="img">
								</div>
          </div>
					<div class="control-group ">
								<label class="control-label">Descrição</label>
								<div class="controls">
									 <textarea class="span6" rows="6" name="descricao" id="descricao"></textarea>
								</div>
          </div>
					<div class="control-group ">
								<label class="control-label">Coordenador</label>
								<div class="controls">
									 <select name="coordenador" id="coordenador">
									 	<option value="0">Não</option>
										<option value="1">Sim</option>
									 </select>
								</div>
          </div>

          <div class="form-actions">
                <button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
                <a href="{{route('adm.professor')}}">ou cancelar</a>
          </div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection
