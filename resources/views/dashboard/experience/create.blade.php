@extends('dashboard.layout')

@section('konten')

<div class="pb-3 text-end"><a href="{{ route('experience.index') }}" class="btn btn-primary"><<< Kembali</a></div>
    <form action="{{ route('experience.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Project</label>
            <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Input your project here" value="{{ Session::get('judul') }}"/>
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Bahasa</label>
            <input type="text" class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Input your programming language here" value="{{ Session::get('info1') }}"/>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{ Session::get('tgl_mulai') }}"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{ Session::get('tgl_akhir') }}"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" name="isi" id="isi summernote" rows="10" placeholder="Input your isi here">{{ Session::get('isi') }}</textarea>
        </div>
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>
    </form>
    
@endsection