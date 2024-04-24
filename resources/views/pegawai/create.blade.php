@extends('layouts.app')

@section('content')
<h4 class="mt-2">Tambah Pegawai</h4>
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

<form method="post" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
   {{ csrf_field() }} 

   <div class="form-group row">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
       <div class="custom-file">
         <label for="foto" class="custom-file-label">Pilih file...</label>   
         <input class="custom-file-input" type="file" id="foto" name="foto">
      </div>
     </div>
   </div>

   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="nama" name="nama">
     </div> 
   </div>

   <div class="form-group row">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
     <div class="col-sm-4">   
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L"> 
          <label class="custom-control-label" for="jkl">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P"> 
          <label class="custom-control-label" for="jkp">Perempuan</label>
        </div> 
     </div>
   </div>

   <div class="form-group row">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>   
      <div class="col-sm-3">   
        <input class="form-control" type="date" id="tanggal" name="tanggal">
     </div>
   </div>

   <div class="form-group row">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-4">
        <select class="custom-select" id="jabatan" name="jabatan">
          <option value=""> -Pilih Jabatan-</option>
          @foreach($jabatan as $j){
            <option value="{{ $j['id_jabatan'] }}"> {{ $j['nama_jabatan'] }} </option>";
          @endforeach
        </select>
      </div>
   </div>

   <div class="form-group row">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
     </div>
   </div>

   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>
@endsection