@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Noticias cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{url('adm/noticia/cadastro')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Nova Noticia
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="table-grey-head">
							<th width="22%">Titulo</th>
							<th width="13%">Corpo</th>
							<th width="12%">Resumo</th>
							<th width="10%">Data</th>
							<th width="10%">Palavras-chaves</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>Palestra sobre o impacto do bitcoin</td>
							<td>Tirando suas duvidas sobre essa tecnologia</td>
							<td>Blablablabla </td>
							<td>12/02/2018</td>
							<td>Bitcoin,criptomoeda,descentralização</td>
							<td>
								<div class="btn-group">
									<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
									<ul class="dropdown-menu">
										<li>
											<a href="#"><i class="icon-pencil"></i> Editar</a>
										</li>
										<li>
											<a href="#"><i class="icon-remove"></i> Deletar</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row-fluid">
					<div class="span6">
						<p style="padding-top:5px;">Total de noticias:  1</p>
					</div>
					<div class="span6">
						<div class="pagination" style="text-align: right;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
