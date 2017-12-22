<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function week()
    {
        
        $orders = Order::select('orders.id', 'orders.quantity', 'product_users.name as user_name', 'orders.date', 'products.name as product_name', 'products.price as product_price')->join("products","products.id","=","orders.product_id")->join("product_users","product_users.id","=","orders.product_user_id")->whereBetween('date', [
            Carbon\Carbon::parse('last monday')->startOfDay(),
            Carbon\Carbon::parse('next friday')->endOfDay(),
        ])->get();

        return response()->json($orders);
    }

    public function today()
    {
        $orders = Order::select('orders.id', 'orders.quantity', 'product_users.name as user_name', 'orders.date', 'products.name as product_name', 'products.price as product_price')->join("products","products.id","=","orders.product_id")->join("product_users","product_users.id","=","orders.product_user_id")->whereDay('date', '=', date('d'))->get();

        //$orders = DB::table('orders')->whereDay('date', '=', date('d'))->get();
        return response()->json($orders);
    }

    public function index()
    {
        $orders = Order::select('orders.id', 'orders.quantity', 'product_users.name as user_name', 'orders.date', 'products.name as product_name', 'products.price as product_price')->join("products","products.id","=","orders.product_id")->join("product_users","product_users.id","=","orders.product_user_id")->get();
        //$orders = Order::with('product')->with('productUser')->get();

        //$feedback = DB::table('feedbacks')->where('usuario_id', '=', $id)->get();
        return response()->json($orders);
    }

    public function show($id)
    {
        $orders = Order::with('product')->with('productUser')->find($id);

        if(!$orders) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->fill($request->all());
        $order->save();

        return response()->json($order, 201);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if(!$order) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $order->fill($request->all());
        $order->save();

        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if(!$order) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $order->delete();
    }
}
