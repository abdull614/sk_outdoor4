<?php

namespace App\Http\Controllers;

use App\Models\ContactUser;
use Illuminate\Http\Request;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class ProfilInfoController extends Controller
{

    public function tampilFormInfo()
    {
        $alamat = Alamat::where('user_id', Auth::id())->first();
        $contact = ContactUser::where('user_id', Auth::id())->first();
        return view('profil.info', compact('alamat', 'contact'));
    }

    public function simpanInfo(Request $request)
    {
        // Validasi input
        $request->validate([
            // Alamat
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'jalan' => 'required|string|max:255',
            // Kontak
            'instagram' => 'nullable|string|max:255',
            'no_tlp' => 'nullable|string|max:20',
        ]);

        // Simpan atau update alamat
        Alamat::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'jalan' => $request->jalan,
            ]
        );

        // Simpan atau update kontak
        ContactUser::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'instagram' => $request->instagram,
                'no_tlp' => $request->no_tlp,
            ]
        );

        return redirect()->back()->with('success', 'Informasi profil berhasil disimpan.');
    }

}
