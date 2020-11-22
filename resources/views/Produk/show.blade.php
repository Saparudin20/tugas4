@extends('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>	
					<div class="card-body">
						<h3>{{($produk->nama)}}</h3>
						<hr>
						<p>
							Rp. {{number_format($produk->harga)}} l
							Stok : {{$produk->stok}} l
							Berat : {{$produk->berat}} gr
						 </p>
						 <p>
						 	{!! ($produk->deskripsri) !!}
						 </p>		
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection