@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">

					<h4><i class="icon-plus"> </i>Nova notícia</h4>

			</div>
			<div class="widget-body">

				<form action="" method="post" class="form-horizontal">

				<div class="control-group ">
            <label class="control-label" for="ed_titulo">Titulo:</label>
            <div class="controls">
                <input type="text" class="input-medium" name="ed_titulo" id="ed_titulo" value=""/>
                <span class="help-inline"></span>
            </div>
        </div>

				<div class="control-group ">
              <label class="control-label" for="ed_corpo">Corpo:</label>
              <div class="controls">
                  <input type="text" class="input-xxlarge" name="ed_corpo" id="ed_corpo" value=""/>
                  <span class="help-inline"></span>
              </div>
         </div>

				 <div class="control-group ">
							 <label class="control-label" for="ed_resumo">Resumo:</label>
							 <div class="controls">
									 <input type="text" class="input-xxlarge" name="ed_resumo" id="ed_resumo" value=""/>
									 <span class="help-inline"></span>
							 </div>
					</div>

					<div class="control-group ">
								<label class="control-label">Data da notícia:</label>
								<div class="controls">
									<input class="span2" type="text" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
								</div>
          </div>

					<div class="control-group ">
								<label class="control-label" for="ed_pchave">Palavras-chave:</label>
								<div class="controls">
										<input type="text" class="input-xxlarge" name="ed_pchave" id="ed_pchave" value=""/>
										<span class="help-inline"></span>
								</div>
					 </div>

          <div class="form-actions">
                <button type="submit" class="btn blue"><i class="icon-ok"></i> Adicionar</button>
                <a href="Curso.php">ou cancelar</a>
          </div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
