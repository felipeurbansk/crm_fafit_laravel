@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Slides Cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{route('adm.slide.cadastro')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Novo Slide
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="table-grey-head">
							<th width="4%">ID</th>
							<th width="20%">Titulo</th>
							<th width="35%">Descrição</th>
							<th width="12%">Diretorio</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($slide as $s)
							<tr class="odd gradeX">
								<input type="hidden" name="{{$s->id}}_id" value="{{$s->id}}">
								<td>{{$s->id}}</td>
								<td>{{$s->titulo}}</td>
								<td>{{$s->descricao}}</td>
								<td>{{$s->img}}</td>
								<td>
									<div class="btn-group">
										<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
										<ul class="dropdown-menu">
											<li>
												<a href="{{route('adm.slide.editar',$s->id)}}"><i class="icon-pencil"></i> Editar</a>
											</li>
											<li>
												<a href="{{route('adm.slide.excluir',$s->id)}}"><i class="icon-remove"></i> Deletar</a>
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
						<p style="padding-top:5px;">Total de slides: {{$slide->count()}}</p>
					</div>
					<div class="span6">
						<div class="pagination" style="text-align: right;">
							{{ $slide->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
