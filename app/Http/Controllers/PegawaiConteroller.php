<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiConteroller extends Controller
{
    public function index(){
        $pegawai = Pegawai::get();
        return response()->json(
            $pegawai
        );
    }

    public function store(Request $request){
        $pegawai = Pegawai::create([
            'nip' =>$request->nip,
            'nama' =>$request->nama,
            'tanggal' =>$request->tanggal,
            'tempat' =>$request->tempat,
            'alamat' =>$request->alamat,
            'jns_kelamin' =>$request->jns_kelamin,
            'kelompok' =>$request->kelompok,
            'spesialis' =>$request->spesialis
        ]);
        return response()->json(
            $pegawai
        );
    }

    public function show(Pegawai $pegawai){
        return response()->json(
            $pegawai
        );
    }

    public function update(Request $request, Pegawai $pegawai){
            $pegawai-> nip  =$request->nip;
            $pegawai-> nama  = $request->nama;
            $pegawai-> tanggal  = $request->tanggal;
            $pegawai-> tempat  = $request->tempat;
            $pegawai-> alamat = $request->alamat;
            $pegawai-> jns_kelamin  = $request->jns_kelamin;
            $pegawai-> kelompok  = $request->kelompok;
            $pegawai-> spesialis  = $request->spesialis;
            $pegawai->save();

            return response()->json(
                $pegawai
            );
    }

    public function destroy(Pegawai $pegawai){
        $pegawai->delete();
        return response()->json(
            [
                'message'=>'Pegawai deleted'
            ],204
        );
    }
}
