<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Http::get('127.0.0.1:8020/api/order')->json();
        return view('admin.order.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:8020/api/order', [
            'json' => [
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat,
                'merk' => $request->merk,
                'harga' => $request->harga,
            ]
        ]);
        return redirect(route('order.index'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client();
        $data = $client->request('PUT', 'http://127.0.0.1:8020/api/order/' . $id, [
            'json' => [
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat,
                'merk' => $request->merk,
                'harga' => $request->harga,
            ]
        ]);
        return redirect(route('order.index'));
    }

    public function destroy($id)
    {
        $client = new Client();
        $data = $client->request('DELETE', 'http://127.0.0.1:8020/api/order/' . $id);
        return redirect(route('order.index'));
    }
}
