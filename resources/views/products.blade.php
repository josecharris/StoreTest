<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card" style="margin-top: 5%;">
				<div class="card-body">
					<h4 class="card-title text-center">Listado de productos</h4>
					@foreach($products as $product)
						<div class="card" style="width: 50%; margin-top: 2%; margin: 0 auto;">
							 <img src="{{$product->photo}}" class="card-img-top" alt="...">
							<div class="card-body">
								<div class="card-title">{{ $product->name }}</div>
								<p>{{ $product->description }}</p>
								<p><strong>${{ $product->price }}</strong></p>

								<a href="{{ url('add-to-cart/$product->id') }}" class="btn btn-primary btn-lg btn-block" role="button">
									Agregar al carrito
								</a>
							</div>
						</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="margin-top: 5%;">
				<div class="card-body">
					<h4 class="card-title text-center">Carrito de productos</h4>
					<?php $valor = 0; ?>
					@if(session('cart'))
						@foreach(session('cart') as $id => $details)
						<div class="card" style="width: 70%; margin-top: 2%; margin: 0 auto;">
							<img src="{{$details['photo']}}" class="card-img-top" alt="...">
							<div class="card-body">
								<?php $valor = $details['price'] * $details['quantity']; ?>
								<div class="card-title">{{ $details['name'] }}</div>
								<p><strong>Precio: ${{ $details['price'] }}</strong></p>
								<p><strong>Cantidad: {{ $details['quantity'] }}</strong></p>
								<p><strong>Total: ${{ $details['price'] * $details['quantity'] }}</strong></p>

								<a href="{{ url('add-to-cart/$product->id') }}" class="btn btn-primary btn-lg btn-block" role="button">
									Pagar
								</a>
								<a href="{{ url('add-to-cart/$product->id') }}" class="btn btn-primary btn-lg btn-block" role="button">
									Sacar unidad
								</a>
								<a href="{{ url('add-to-cart/$product->id') }}" class="btn btn-primary btn-lg btn-block" role="button">
									Vaciar carrito
								</a>
							</div>
						</div>
							
							
							
							

							
						@endforeach
					@endif
					
				</div>
			</div>
		</div>
	</div>
</div>