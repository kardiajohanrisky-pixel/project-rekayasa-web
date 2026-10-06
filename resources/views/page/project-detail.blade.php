@extends('layouts.app')
@section('content')
<div class="container">
    <a href="/project" class="btn btn-secondary btn-sm mb-3">← Kembali</a>
    <div class="card shadow-sm border-0"><div class="row g-0">
        <div class="col-md-5"><img src="{{ asset('images/'.$project->gambar) }}" class="img-fluid rounded-start" style="height:100%;min-height:300px;object-fit:cover"></div>
        <div class="col-md-7"><div class="card-body p-4">
            <h3 class="fw-bold">{{ $project->judul }}</h3><span class="badge bg-primary mb-3">{{ $project->status }}</span>
            <p class="text-muted">{{ $project->deskripsi }}</p><hr><small>Tech: {{ $project->tech }}</small><br><small class="text-muted">Dibuat: {{ $project->created_at->format('d M Y') }}</small>
            <div class="mt-4"><a href="/project" class="btn btn-primary">Lihat Project Lain</a></div>
        </div></div>
    </div></div>
</div>
@endsection