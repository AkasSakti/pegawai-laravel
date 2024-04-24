@extends('layouts.app')

@section('content')

<h4 class="mt-2">Data Pegawai</h4>
<hr>
<a class="btn btn-success" href="{{ route('pegawai.create') }}"><i class="oi oi-plus"></i> Tambah</a>

@if ($message = Session::get('success'))
  <div class="alert alert-success mt-3 pb-0">
      <p>{{ $message }}</p>
  </div>
@endif

<div class="table-responsive mt-3">
<table class="table table-striped table-hover table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Jabatan</th>
         <th>Keterangan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
@foreach($pegawai as $data)
      <tr>
         <td><?= ++$no ?></td>
         <td><img src="{{ asset('images/'.$data['foto']) }}" width="100"></td>
         <td><?= $data['nama_pegawai'] ?></td>
         <td><?= $data['jenis_kelamin'] ?></td>
         <td><?= $data['tgl_lahir'] ?></td>
         <td><?= $data['nama_jabatan'] ?></td>
         <td><?= $data['keterangan'] ?></td>
         <td>
            <a class="btn btn-sm btn-info" href="{{ route('pegawai.edit', $data['id_pegawai']) }}"> <i class="oi oi-pencil"></i> Edit </a>
            <form class="d-inline" 
            method="post" action="{{ route('pegawai.destroy', $data['id_pegawai']) }}">
               {{ method_field('DELETE') }}  
               {{ csrf_field() }}  
               <button type="submit" class="btn btn-sm btn-danger" > <i class="oi oi-trash"></i> Hapus </button>
            </form>
         </td>
     </tr>
@endforeach

   </tbody>
</table>
</div>

@endsection