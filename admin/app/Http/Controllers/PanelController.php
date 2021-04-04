<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePanel;
use App\Models\Producto;

class PanelController extends Controller
{
    public function index(){


        $datos = Producto::all();


        return view('paneles.index', compact('datos'));
    }
    public function create()
    {
        return view('paneles.create');
    }
    public function store(StorePanel $request){

          $dato=new Producto();

         $dato->nombre=$request->nombre;
         $dato->precio=$request->precio;
         $dato->valor=$request->valor;
         $dato->categoria=$request->categoria;
         $dato->cantidad=$request->cantidad;
         $dato->peso=$request->peso;


         $dato->save();

        //$dato = Producto::create($request->all());
        return redirect()->route('paneles.show',$dato);
    }
    public function show(Producto $dato)
    {

        return view('paneles.show',compact('dato'));
    }

    public function edit(Producto $dato)
    {
        return view('paneles.edit',compact('dato'));
    }
    public function update(StorePanel $request, Producto $dato)
    {

        // $request->validate([
        //     'nombre'=>'required',
        //     'precio'=>'required',
        //     'categoria'=>'required',
        //     'cantidad'=>'required'
        // ]);

        // $curso->nombre = $request->nombre;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $dato->update($request->all());
        return view('paneles.show',compact('dato'));
    }

    public function destroy(Producto $dato)
    {
        $dato->delete();

        return redirect()->route('paneles.index');
    }
}
