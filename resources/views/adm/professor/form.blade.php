@extends('adm.master')

@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">

					<h4><i class="icon-plus"> </i>Cadastrar novo professor</h4>

			</div>
			<div class="widget-body">

				<form action="" method="post" class="form-horizontal">
				<div class="control-group ">
            <label class="control-label" for="ed_nome">Nome:</label>
            <div class="controls">
                <input type="text" class="input-medium" name="ed_nome" id="ed_nome" value=""/>
                <span class="help-inline"></span>
            </div>
        </div>
				<div class="control-group ">
              <label class="control-label" for="ed_titulacao">Titulação:</label>
              <div class="controls">
                  <input type="text" class="input-xxlarge" name="ed_titulacao" id="ed_titulacao" value=""/>
                  <span class="help-inline"></span>
              </div>
         </div>
        <div class="control-group ">
						<label class="control-label">Foto</label>
								<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
														<div class="uneditable-input">
																<i class="icon-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
														</div>
									 <span class="btn btn-file">
									 <span class="fileupload-new">Selecionar</span>
									 </span>
														<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
										</div>
								</div>
          </div>
					<div class="control-group ">
								<label class="control-label">Descrição</label>
								<div class="controls">
									 <textarea class="span6" rows="6"></textarea>
								</div>
          </div>

          <div class="form-actions">
                <button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
                <a href="professor.php">ou cancelar</a>
          </div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection
