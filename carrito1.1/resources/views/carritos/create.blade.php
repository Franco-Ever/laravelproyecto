
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/carrito.js')}}"></script>
    <title>Document</title>
</head>
<body>
<h1>
    productos oferta
</h1>
<form class=" row gx-3 gy-2 align-items-center"  action="{{route('carritos.store')}}" method="POST">

    @csrf
    <div>
        <label for="" >Platano</label>

        <button type="button" onclick="countingClicks1()"><img src="https://img.icons8.com/cute-clipart/64/000000/shopping-cart.png"/></button>
        <textarea name="contador1" id="counting1" cols="30" rows="10"></textarea>
        <div>
        <label for="" >Naranja</label>

        <button type="button" onclick="countingClicks2()"><img src="https://img.icons8.com/cute-clipart/64/000000/shopping-cart.png"/></button>
        <textarea name="contador2" id="counting2" cols="30" rows="10"></textarea>
    </div>
    
</div>
<button type="submit">enviar</button>

</form>
</body>
</html>