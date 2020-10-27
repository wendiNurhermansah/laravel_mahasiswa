@extends('layout.main')

@section('conten')

	 <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content my-3" id="pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="semua-data" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h1 class="card-header"><strong>Data Mahasiswa</strong></h1>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="row">
                                        <label class="col-md-2 text-right s-12"><strong>NAMA :</strong></label>
                                        <label class="col-md-3 s-12">{{ $students->nama }}</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2 text-right s-12"><strong>NIM :</strong></label>
                                        <label class="col-md-3 s-12">{{ $students->nim }}</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2 text-right s-12"><strong>ALAMAT :</strong></label>
                                        <label class="col-md-3 s-12"></label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2 text-right s-12"><strong>JURUSAN :</strong></label>
                                        <label class="col-md-3 s-12"></label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
       </div>


@endsection