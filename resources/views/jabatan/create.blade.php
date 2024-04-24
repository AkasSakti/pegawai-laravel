@extends('layouts.app')

@section('content')
<h4 class="mt-2">Tambah Jabatan</h4>
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

<form method="post" action="{{ route('jabatan.store') }}">
    {{ csrf_field() }} 
    
   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>   
      <div class="col-sm-4">
         <input class="form-control" type="text" id="nama" name="nama">
     </div> 
   </div>

   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>
@endsection