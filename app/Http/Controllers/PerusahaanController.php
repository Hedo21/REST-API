<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaans = Http::get('127.0.0.1:8001/api/perusahaan')->json();
        // dd($perusahaans);
        return view('admin.perusahaan.index', compact('perusahaans'));
    }

    public function store(Request $request)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:8001/api/perusahaan', [
            'json' => [
                'Nama_Perusahaan' => $request->Nama_Perusahaan,
                'Alamat' => $request->Alamat,
            ]
        ]);
        return redirect(route('perusahaan.index'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client();
        $data = $client->request('PUT', 'http://127.0.0.1:8001/api/perusahaan/' . $id, [
            'json' => [
                'Nama_Perusahaan' => $request->Nama_Perusahaan,
                'Alamat' => $request->Alamat,
            ]
        ]);
        return redirect(route('perusahaan.index'));
    }

    public function destroy($id)
    {
        $client = new Client();
        $data = $client->request('DELETE', 'http://127.0.0.1:8001/api/perusahaan/' . $id);
        return redirect(route('perusahaan.index'));
    }
}
