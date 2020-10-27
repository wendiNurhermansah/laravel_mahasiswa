@extends('layout.main')

@section('conten')


        @if(session('suksess'))
        <div class="alert alert-success" role="alert">
            data sukses di hapus.
        </div>
        @endif
        <div>
            <a href="{{ url('/tambahData') }}"><button class="btn btn-primary">tambah data</button></a>
        </div>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            data sukses di tambahkan.
        </div>
        @endif

        <div class="row">
        <div class="col-md-12">
                            <!-- TABLE NO PADDING -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Daftar Mahasiswa</h3>
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nim</th>
                                                <th>Alamat</th>
                                                <th>Jurusan</th>
                                                <th>Mapel</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $students as $i )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="{{ url('/profil') }}">{{ $i->nama }}</a></td>
                                                <td>{{ $i->nim }}</td>
                                                <td>{{ $i->alamat }}</td>
                                                <td>{{ $i->jurusan->n_jurusan }}</td>
                                                <td>{{ $i->mapel->n_mapel }}</td>
                                                <td>
                                                    <a href="{{ url('/mahasiswa') }}/{{ $i->id }}/{{ ('edit') }}"class="btn btn-success">edit</a>
                                                    

                                                    <a href="{{ url('/mahasiswa') }}/{{ $i->id }}/{{ ('delete') }}"  class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?')">hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TABLE NO PADDING -->
        </div>
        </div>

@endsection

@section('script')
<script type="text/javascript">
    
</script>

@endsection