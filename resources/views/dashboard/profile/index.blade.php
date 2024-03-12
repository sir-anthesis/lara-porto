@extends('dashboard.layout')

@section('konten')

<p class="card-title">Profile</p>
    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Personal Datas</h3>
                @if (getMetaValue('photo'))
                    <img style="max-width:200px;max-height:200px" src="{{ asset('photos') . '/' . getMetaValue('photo') }}" alt="">
                @endif
                <div class="mb-3">
                    <label for="domisily" class="form-label">Photo</label>
                    <input type="file" class="form-control form-control-sm" name="photo" id="photo">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control form-control-sm" name="country" id="country" value="{{ getMetaValue('country') }}">
                </div>
                <div class="mb-3">
                    <label for="domisili" class="form-label">Domisili</label>
                    <input type="text" class="form-control form-control-sm" name="domisili" id="domisili" value="{{ getMetaValue('domisili') }}">
                </div>
                <div class="mb-3">
                    <label for="pnumber" class="form-label">Phone Number</label>
                    <input type="text" class="form-control form-control-sm" name="pnumber" id="pnumber" value="{{ getMetaValue('pnumber') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" value="{{ getMetaValue('email') }}">
                </div>
            </div>
            <div class="col-5">
                <h3>Social Media Accounts</h3>
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control form-control-sm" name="instagram" id="instagram" value="{{ getMetaValue('instagram') }}">
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter (X)</label>
                    <input type="text" class="form-control form-control-sm" name="twitter" id="twitter" value="{{ getMetaValue('twitter') }}">
                </div>
                <div class="mb-3">
                    <label for="github" class="form-label">GitHub</label>
                    <input type="text" class="form-control form-control-sm" name="github" id="github" value="{{ getMetaValue('github') }}">
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">LinkedIn</label>
                    <input type="text" class="form-control form-control-sm" name="linkedin" id="linkedin" value="{{ getMetaValue('linkedin') }}">
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>
    </form>
    
@endsection