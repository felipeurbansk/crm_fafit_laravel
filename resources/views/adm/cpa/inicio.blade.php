@extends('adm.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Colaboradores cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{route('adm.cpa.cadastro')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Novo Membro
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="table-grey-head">
							<th width="22%">Nome</th>
							<th width="13%">Cargo</th>
							<th width="12%">Descrição</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($dados as $d)
						<tr class="odd gradeX">
							<td>{{$d->descricao}}</td>
							<td>Auxiliar Contabil</td>
							<td>Realização de atividades contabeis</td>
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
						@endforeach
					</tbody>
				</table>
				<div class="row-fluid">
					<div class="span6">
						<p style="padding-top:5px;">Total de CPA:  1</p>
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

<link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
<script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript">
@endsection
