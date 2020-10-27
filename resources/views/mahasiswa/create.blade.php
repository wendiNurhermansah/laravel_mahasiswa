@extends('layout.main')

@section('conten')

       <div class="container">
            <div class="row">
                <div class="col-8">

                    <h1 class="mt-3">FORM TAMBAH MAHASISWA</h1>

                    <form method="post" action="{{ url('/students') }}">
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="valid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" placeholder="masukan nim" name="nim" value="{{ old('nim') }}">
                        </div>
                        <div class="form-group">
                            <label for=alamat>Alamat</label>
                            <input type="textarea" class="form-control" id="alamat" placeholder="masukan alamat" name="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="form-group">
                             <label>Jurusan</label>
                                 <div>
                                  <select class="select2 form-control" name="id_jurusan" id="id_jurusan" autocomplete="off">

                                   <option value="">Pilih</option>
                                   	@foreach ( $jurusan as $i )
                                     <option value="{{ $i->id }}">{{ $i->n_jurusan }}</option>
                                    @endforeach
                                      </select>
                                                    
                                </div>
                        </div>
                         <div class="form-group">
                              <label>Mapel</label>
                                 <div >
                                  <select class="form-control" name="id_mapel" id="id_mapel" autocomplete="off">
                                   </select>
                                 </div>
                          </div>
                          <div>
                             <button type="submit" class="btn btn-primary btn-sm" id="action"><i class="icon-save mr-2"></i>Simpan<span id="txtAction"></span></button>
                              <a class="btn btn-sm" onclick="add()" id="reset">Reset</a>
                           </div>
                        
                        
                    </form>

                    
                </div>
            </div>
        </div>

@endsection

@section('script')
<script type="text/javascript">

	 $('#id_jurusan').on('change', function(){
        val = $(this).val();
        option = "<option value=''>&nbsp;</option>";
        if(val == ""){
            $('#id_mapel').html(option);
            
            selectOnChange();
        }else{
            $('#id_mapel').html("<option value=''>Loading...</option>");
            url = "{{ route('mapelByJurusan', ':id') }}".replace(':id', val);
            $.get(url, function(data){
                if(data){
                    $.each(data, function(index, value){
                        option += "<option value='" + value.id + "'>" + value.n_mapel +"</li>";
                    });
                    $('#id_mapel').empty().html(option);

                    $("#id_mapel").val($("#id_mapel option:first").val()).trigger("change.select2");
                }else{
                    $('#id_mapel').html(option);
                   
                    selectOnChange();
                }
            }, 'JSON');
        }
    });
    
</script>

@endsection
