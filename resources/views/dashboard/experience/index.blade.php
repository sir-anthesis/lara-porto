@extends('dashboard.layout');

@section('konten')
    <p class="card-title">Experience</p>
    <div class="pb-3"><a href="{{ route('experience.create') }}" class="btn btn-primary">+ Tambah Experience</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Project</th>
                    <th>Programming Language</th>
                    <th>Starting Date</th>
                    <th>Ending Date</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach ($datas as $data)
                <?php 
                    $endDate = $data->tgl_akhir;
                    if ($endDate == null) {
                        $endDate = 'Present';
                    }
                ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->info1 }}</td>
                    <td>{{ $data->tgl_mulai }}</td>
                    <td>{{ $endDate }}</td>
                    <td>
                        <a href="{{ route('experience.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Yakin ingin hapus data?')" action="{{ route('experience.destroy', $data->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection
