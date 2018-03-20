@extends('layouts.master')

@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Professores cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{url('adm/professor/cadastro')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Cadastrar Professor
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="table-grey-head">
							<tr class="table-grey-head">
								<th width="22%">Nome</th>
								<th width="13%">Titulação</th>
								<th width="12%">Descrição</th>
								<th width="12%">Cordenador</th>
								<th width="10%">Ações</th>
							</tr>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							@foreach($professor as $p)
							<td>{{$p->nome}}</td>
							<td>{{$p->titulacao}}</td>
							<td>{{str_limit($p->descricao,50)}}</td>
							<td>{{($p->coordenador == 1 ? "Sim" : "Não")}}</td>
							<td>
								<div class="btn-group">
									<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
									<ul class="dropdown-menu">
										<li>
											<a href="{{route('adm.professor.visualizar',$p->id)}}"><i class="icon-eye-open"></i> Visualizar</a>
										</li>
										<li>
											<a href="{{route('adm.professor.editar',$p->id)}}"><i class="icon-pencil"></i> Editar</a>
										</li>
										<li>
											<a href="{{route('adm.professor.excluir',$p->id)}}"><i class="icon-remove"></i> Deletar</a>
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
						<p style="padding-top:5px;">Total de professores:  {{$professor->count()}}</p>
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
