<h1>El registro es:</h1>
<h2>{{$carrito->contador1*15}}</h2>
<h3>{{$carrito->contador2*20}}</h3>
<h4>Total: {{$carrito->contador1*15+$carrito->contador2*20}}</h4>
<a href="{{ route('welcome') }}">ir al menu</a>