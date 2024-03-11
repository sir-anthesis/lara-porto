@extends('dashboard.layout')

@section('konten')

<div class="pb-3 text-end"><a href="{{ route('halaman.index') }}" class="btn btn-primary"><<< Kembali</a></div>
    <form action="{{ route('halaman.update', $datas->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Input your judul here" value="{{ $datas->judul }}"/>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" name="isi" id="isi summernote" rows="10" placeholder="Input your isi here">{{ $datas->isi }}</textarea>
        </div>
        <div class="mb-3">
            <img src="{{ $image->link }}" alt="">
        </div>
        <button class="btn btn-success" type="submit" name="simpan">Edit</button>
    </form>
    
@endsection