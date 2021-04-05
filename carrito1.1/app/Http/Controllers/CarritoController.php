<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('carritos.create');
    }
    public function store(Request $request){

        $carrito=new Carrito();

        $carrito->contador1=$request->contador1;
        $carrito->contador2 = $request->contador2;


        $carrito->save();
        return redirect()->route('carritos.show',$carrito);

        //$carrito = Carrito::create($request->all());
    }
    public function show(Carrito $carrito)
    {

        return view('carritos.show',compact('carrito'));
    }

}
