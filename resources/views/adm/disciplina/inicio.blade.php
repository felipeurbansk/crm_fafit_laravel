@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Disciplinas cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{route('adm.disciplina.cadastro')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Cadastrar Disciplina
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover ">
					<thead>
						<tr class="table-grey-head">
							<th width="22%">Disciplina</th>
							<th width="22%">Descrição</th>
							<th width="10%">Carga Horaria</th>
							<th width="10%">Professor</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($disciplina as $d)
						<tr class="odd gradeX">
							<input type="hidden" name="id" value="{{$d->id}}">
							<td width="22%">{{$d->nome}}</td>
							<td width="22%">{{str_limit($d->descricao,50)}}</td>
							<td width="10%">{{$d->ch}}</td>
							<td width="10%">{{$d->professor->nome}}</td>
							<td width="10%">
								<div class="btn-group">
									<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
									<ul class="dropdown-menu">
										<li>
											<a data-toggle="modal" data-target="#modalDisciplina"><i class="icon-eye-open"></i> Ver cursos</a>
										</li>
										<li>
											<a href="{{route('adm.disciplina.editar',$d->id)}}"><i class="icon-pencil"></i> Editar</a>
										</li>
										<li>
											<a href="{{route('adm.disciplina.excluir',$d->id)}}"><i class="icon-remove"></i> Deletar</a>
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
						<p style="padding-top:5px;">Total de curso: {{$disciplina->count()}}</p>
					</div>
					<div class="span6">
						<div class="pagination" style="text-align: right;">

						</div>
					</div>
				</div>
				<div class="modal fade" id="modalDisciplina" tabindex="-1" role="dialog" aria-labelledby="Disciplina" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Disciplina</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								...
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Fechar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
