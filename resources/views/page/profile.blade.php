@extends('layouts.app')
@section('content')
<style>.card-profile{max-width:500px;margin:0 auto;background:white;border-radius:12px;box-shadow:0 4px 15px rgba(0,0,0,.08)} .foto{width:150px;height:150px;border-radius:50%;object-fit:cover}</style>
<div class="card-profile p-4 text-center">
  <h5>Profile Mahasiswa</h5>
  <img src="{{ asset($foto) }}" class="foto my-3 mx-auto d-block">
  <div class="text-start"><hr><p><b>Nama:</b> {{ $nama }}</p><hr><p><b>NIM:</b> {{ $nim }}</p><hr><p><b>Prodi:</b> {{ $prodi }}</p><hr><p><b>Kampus:</b> {{ $kampus }}</p></div>
</div>
@endsection