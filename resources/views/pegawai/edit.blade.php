@extends('layouts.app')

@section('content')
<h4 class="mt-2">Edit Pegawai</h4>
<hr>

@if ($errors->any())
   <div class="alert alert-danger pb-0">
      <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif

<form method="post" action="{{ route('pegawai.update', $pegawai['id_pegawai']) }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}  
    {{ csrf_field() }}  

  <div class="form-group row">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
       <div class="custom-file">
         <label for="foto" class="custom-file-label">Ubah file...</label>   
         <input class="custom-file-input" type="file" id="foto" name="foto">
        </div>
      <img class="img-thumbnail mt-2" src="{{ asset('images/'. $pegawai['foto'] ) }}" width="150">
     </div>
   </div>

   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="nama" name="nama" value="{{ $pegawai['nama_pegawai'] }}">
      </div> 
   </div>

   <div class="form-group row">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-4">  
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L" {{ $l }}> 
          <label class="custom-control-label" for="jkl">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P" {{ $p }}> 
          <label class="custom-control-label" for="jkp">Perempuan</label>
        </div> 
     </div>
   </div>

   <div class="form-group row">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>   
      <div class="col-sm-3">   
        <input class="form-control" type="date"  id="tanggal" name="tanggal" value="{{ $pegawai['tgl_lahir'] }}">
      </div>
   </div>

   <div class="form-group row">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-4">
       <select class="custom-select" id="jabatan" name="jabatan">
         <option value=""> -Pilih Jabatan-</option>
         @foreach($jabatan as $j){
            <option value="{{ $j['id_jabatan'] }}" 
               @if($j['id_jabatan'] == $pegawai['id_jabatan']) 
                selected
               @endif
            >{{ $j['nama_jabatan'] }}</option>";
         @endforeach
      </select>
      </div>
   </div>

   <div class="form-group row">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
        <textarea class="form-control" rows="5" id="keterangan" name="keterangan">{{ $pegawai['keterangan'] }}</textarea>
      </div>
   </div>

   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>
@endsection