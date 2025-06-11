<?php

namespace App\Http\Controllers;

use App\Models\ContactUser;
use App\Models\User;
use App\Models\Alamat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        $contact = ContactUser::where('user_id', Auth::id())->first();
        return view('profil.general', compact('user', 'contact'));
    }

    public function password()
    {
        return view('profil.password');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        // Update nama
        $user->name = $request->name;

        // Update foto jika ada
        if ($request->hasFile('photo')) {
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            $path = $request->file('photo')->store('photos', 'public');
            $user->photo = $path;
        }

        $user->save();

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui.');
    }


}
