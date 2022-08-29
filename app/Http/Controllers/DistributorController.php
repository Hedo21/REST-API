<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Distributor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $distributor = new Distributor();
        $distributor->distributor = $request->distributor;
        $distributor->alamat = $request->alamat;
        $distributor->tim = $request->tim;
        $distributor->save();
        return "Data Distributor berhasil di ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distributor  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $distributor = Distributor::find($id);
        // dd($distributor);
        $distributor->update([
            'distributor' => $request->distributor,
            'alamat' => $request->alamat,
            'tim' => $request->tim,
        ]);

        return "Data Distributor berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_distri)
    {
        Distributor::destroy($id_distri);
        return response()->json([
            'success' => true,
            'message' => 'Distributor berhasil dihapus',
        ]);
    }
}
