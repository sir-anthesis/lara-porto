<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index');
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'photo' => 'mimes:jpeg,jpg,png,gif',
                'email' => 'email|required',
                'country' => 'required',
                'domisili' => 'required',
                'pnumber' => 'required',
                'instagram' => 'required',
                'twitter' => 'required',
                'github' => 'required',
                'linkedin' => 'required',
            ],
            [
                'photo.mimes' => 'Foto harus berformat JPEG, JPG, PNG, atau GIF',
                'email.email' => 'Email yang dimasukan tidak valid',
                'country.required' => 'Negara wajib diisi',
                'domisili.required' => 'Domisili wajib diisi',
                'pnumber.required' => 'No telepon wajib diisi',
                'instagram.required' => 'Instagram wajib diisi',
                'twitter.required' => 'Twitter wajib diisi',
                'github.required' => 'GitHub wajib diisi',
                'linkedin.required' => 'LinkedIn wajib diisi',
            ]
        );

        if ($request->hasFile('photo')) {
            $photo_file = $request->file('photo');
            $photo_extention = $photo_file->extension();
            $photo_new = date('ymdhis') . ".$photo_extention";
            $photo_file->move(public_path('photos'), $photo_new);

            // deleting old photo
            $photo_old = getMetaValue('photo');
            File::delete(public_path('photos') . '/' . $photo_old);

            metadata::updateOrCreate(['meta_key' => 'photo'], ['meta_value' => $photo_new]);
        }

        // personal datas
        metadata::updateOrCreate(['meta_key' => 'country'], ['meta_value' => $request->country]);
        metadata::updateOrCreate(['meta_key' => 'domisili'], ['meta_value' => $request->domisili]);
        metadata::updateOrCreate(['meta_key' => 'pnumber'], ['meta_value' => $request->pnumber]);
        metadata::updateOrCreate(['meta_key' => 'email'], ['meta_value' => $request->email]);

        // social medias
        metadata::updateOrCreate(['meta_key' => 'instagram'], ['meta_value' => $request->instagram]);
        metadata::updateOrCreate(['meta_key' => 'twitter'], ['meta_value' => $request->twitter]);
        metadata::updateOrCreate(['meta_key' => 'github'], ['meta_value' => $request->github]);
        metadata::updateOrCreate(['meta_key' => 'linkedin'], ['meta_value' => $request->linkedin]);

        return redirect()->route('profile.index')->with('success', 'Berhasil memperbaharui data profile');
    }
}
