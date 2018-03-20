@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Membros Cadastrados</h4>
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
						@foreach($cpa as $c)
							@if($c->cpa != null)
							<tr class="odd gradeX">
								<input type="hidden" name="{{$c->cpa->id}}_id" value="{{$c->cpa->id}}">
								<td>{{$c->nome}}</td>
								<td>{{$c->cargos}}</td>
								<td>{{$c->cpa->descricao}}</td>
								<td>
									<div class="btn-group">
										<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
										<ul class="dropdown-menu">
											<li>
												<a href="{{route('adm.cpa.visualizar',$c->id)}}"><i class="icon-pencil"></i> Visualizar</a>
											</li>
											<li>
												<a href="{{route('adm.cpa.editar',$c->id)}}"><i class="icon-pencil"></i> Editar</a>
											</li>
											<li>
												<a href="{{route('adm.cpa.excluir',$c->id)}}"><i class="icon-remove"></i> Deletar</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@endif
						@endforeach
					</tbody>
				</table>
				<div class="row-fluid">
					<div class="span6">
						<p style="padding-top:5px;">Total de membros: {{$cpa->count()}}</p>
					</div>
					<div class="span6">
						<div class="pagination" style="text-align: right;">
							{{ $cpa->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
