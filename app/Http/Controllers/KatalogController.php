<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Http::get('127.0.0.1:8010/api/katalog')->json();
        return view('admin.katalog.index', compact('katalogs'));
    }

    public function store(Request $request)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:8010/api/katalog', [
            'json' => [
                'merk' => $request->merk,
                'spesifikasi' => $request->spesifikasi,
                'harga' => $request->harga,
            ]
        ]);
        return redirect(route('katalog.index'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client();
        $data = $client->request('PUT', 'http://127.0.0.1:8010/api/katalog/' . $id, [
            'json' => [
                'merk' => $request->merk,
                'spesifikasi' => $request->spesifikasi,
                'harga' => $request->harga,
            ]
        ]);
        return redirect(route('katalog.index'));
    }

    public function destroy($id)
    {
        $client = new Client();
        $data = $client->request('DELETE', 'http://127.0.0.1:8010/api/katalog/' . $id);
        return redirect(route('katalog.index'));
    }
}
