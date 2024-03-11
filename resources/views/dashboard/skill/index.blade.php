@extends('dashboard.layout')

@section('konten')

<p class="card-title">Skills</p>
    <form action="{{ route('skill.update') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="skills" class="form-label">Programming Language & Tools</label>
            <input type="text" class="form-control form-control-sm" name="skills" id="skills" aria-describedby="helpId" placeholder="Input your skills here" value="{{ getMetaValue('skills') }}"/>
        </div>
        <div class="mb-3">
            <label for="workflow" class="form-label">Workflow</label>
            <textarea class="form-control summernote" name="workflow" id="workflow summernote" rows="10" placeholder="Input your workflow here">{{ getMetaValue('workflow') }}</textarea>
        </div>
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>
    </form>
    
@endsection