<?php

namespace App\Http\Controllers;

use Response;
use App\Models\images;
use App\Models\halaman;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class halamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = halaman::orderBy('judul', 'asc')->get();
        return response(view('dashboard.halaman.index')->with('datas', $datas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Response::view('dashboard.halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('isi', $request->isi);

        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
            ],
            [
                'judul.required' => 'judul wajib diisi',
                'isi.required' => 'Isian wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];
        halaman::create($data);
        return response(redirect()->route('halaman.index')->with('success', 'Halaman berhasil ditambahkan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = halaman::where('id', $id)->first();
        $image = images::where('id_halaman', $id)->first();

        return response(view('dashboard.halaman.edit')->with(['datas' => $datas, 'image' => $image]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
            ],
            [
                'judul.required' => 'judul wajib diisi',
                'isi.required' => 'Isian wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];
        halaman::where('id', $id)->update($data);
        return response(redirect()->route('halaman.index')->with('success', 'Halaman berhasil diedit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        halaman::where('id', $id)->delete();

        return response(redirect()->route('halaman.index')->with('success', 'Halaman berhasil dihapus'));
    }
}
