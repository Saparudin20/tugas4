@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Data Katagori
						<a href="{{url('katagori/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
					</div>	
					<div class="card-body">
						<table>
							
						</table>					
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection