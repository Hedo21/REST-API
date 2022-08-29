<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Http::get('127.0.0.1:8002/api/distributor')->json();
        return view('admin.distributor.index', compact('distributors'));
    }

    function store(Request $request)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:8002/api/distributor', [
            'json' => [
                'distributor' => $request->distributor,
                'alamat' => $request->alamat,
                'tim' => $request->tim,
            ]
        ]);
        return redirect(route('distributor.index'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client();
        $data = $client->request('PUT', 'http://127.0.0.1:8002/api/distributor/' . $id, [
            'json' => [
                'distributor' => $request->distributor,
                'alamat' => $request->alamat,
                'tim' => $request->tim,
            ]
        ]);
        return redirect(route('distributor.index'));
    }

    public function destroy($id)
    {
        $client = new Client();
        $data = $client->request('DELETE', 'http://127.0.0.1:8002/api/distributor/' . $id);
        return redirect(route('distributor.index'));
    }
}
