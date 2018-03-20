@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Cursos cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{route('adm.curso.cadastro')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Cadastrar Curso
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover ">
					<thead>
						<tr class="table-grey-head">
							<th width="22%">Curso</th>
							<th width="22%">Descrição</th>
							<th width="10%">Duração</th>
							<th width="10%">Carga Horaria</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($curso as $c)
						<tr class="odd gradeX">
							<input type="hidden" name="id" value="{{$c->id}}">
							<td width="22%">{{$c->nome}}</td>
							<td width="22%">{{str_limit($c->descricao,50)}}</td>
							<td width="10%">{{$c->duracao}} Anos</td>
							<td width="10%">{{$c->ch_total}}</td>
							<td width="10%">
								<div class="btn-group">
									<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
									<ul class="dropdown-menu">
										<li>
											<a href="{{route('adm.curso.visualizar',$c->id)}}"><i class="icon-eye-open"></i> Visualizar</a>
										</li>
										<li>
											<a href="{{route('adm.curso.editar',$c->id)}}"><i class="icon-pencil"></i> Editar</a>
										</li>
										<li>
											<a href="{{route('adm.curso.excluir',$c->id)}}"><i class="icon-remove"></i> Deletar</a>
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
						<p style="padding-top:5px;">Total de curso: {{$curso->count()}}</p>
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
