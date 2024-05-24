<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Http\Controllers\NotificationController;


class PedidoController extends Controller
{
    public function index()
    {
        
        $pedidos = Pedido::orderByDesc("updated_at")->get();
        //return $pedidos;
        NotificationController::mark_all_notifications();

        return view('admin.pedido.index', compact('pedidos'));

    }

    public function edit($id)
    {
        
        $pedido = Pedido::find($id);
        //return $pedido;
        return view('admin.pedido.edit', compact('pedido'));

    }

    public function update(Request $request, $id){
        
        $pedido = Pedido::findOrFail($id);
        $pedido->fill($request->all());
        $pedido->save();
        return redirect()->route('admin.pedido.index')->with('status_success', 'Actualizacion Realizada Correctamente');
    }





}
