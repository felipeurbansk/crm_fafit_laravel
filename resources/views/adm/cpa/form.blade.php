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
				<div class="control-group ">
            <label class="control-label" for="nome">Nome:</label>
            <div class="controls">
                <input type="text" class="span6" name="nome" id="nome" value=""/>
                <span class="help-inline"></span>
            </div>
        </div>
				<div class="control-group ">
              <label class="control-label" for="cargos">Cargo:</label>
              <div class="controls">
                  <input type="text" class="span3" name="cargos" id="cargos" value=""/>
                  <span class="help-inline"></span>
              </div>
         </div>
        <div class="control-group ">
						<label class="control-label">Foto:</label>
								<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
															<input type="file" name="img" id="img" placeholder="Selecione uma imagem">
												</div>
										</div>
								</div>
          </div>
					<div class="control-group ">
								<label class="control-label">Descrição</label>
								<div class="controls">
									 <textarea class="span6" name="descricao" id="descricao" rows="6"></textarea>
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
