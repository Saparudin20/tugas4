@extends('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Detail Data User
					</div>	
					<div class="card-body">
						<h3>{{($user->nama)}}</h3>
						<hr>
						<p>
							{{"@".($user->username)}} l
							Email : {{$user->email}}
						 </p>	
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection