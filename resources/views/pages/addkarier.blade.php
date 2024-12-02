@extends('layouts.app')

@section('title', 'Tambah Karier')

@section('content')
     <!-- Form Section -->
     <div class="career-form-container">
        <div class="career-form">
            <h3>Tambah Info Karir</h3>
            <form action="{{ route('career.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul lowongan..." required>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Deskripsi lengkap..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="posted_date" class="form-label">Tanggal Diposting</label>
                    <input type="date" class="form-control" id="posted_date" name="posted_date" required>
                </div>
                <div class="form-group">
                    <label for="expired_date" class="form-label">Tanggal Kadaluarsa (Opsional)</label>
                    <input type="date" class="form-control" id="expired_date" name="expired_date">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Info Karir</button>
            </form>            
        </div>
    </div>
@endsection