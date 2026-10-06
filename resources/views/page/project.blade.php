@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2 class="text-center fw-bold">Portofolio Project</h2>
    <p class="text-center text-muted mb-4">Daftar project mahasiswa universitas pamulang</p>
    <div class="row">
        @foreach($projects as $p)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/'.$p->gambar) }}" class="card-img-top" style="height:200px;object-fit:cover">
                <div class="card-body d-flex flex-column">
                    <span class="badge {{ $p->status == 'Selesai' ? 'bg-success' : 'bg-warning text-dark' }} mb-2" style="width:fit-content">{{ $p->status }}</span>
                    <h6 class="fw-bold">{{ $p->judul }}</h6>
                    <p class="text-muted small">{{ \Illuminate\Support\Str::limit($p->deskripsi, 80) }}</p>
                    <div class="mt-auto"><small class="text-muted">Tech: {{ $p->tech }}</small><a href="/project/{{ $p->id }}" class="btn btn-primary w-100 mt-2">Lihat Detail</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">{{ $projects->links() }}</div>
</div>
@endsection