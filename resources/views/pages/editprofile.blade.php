@extends('layouts.app')

@section('title')
    Edit Profile
@endsection

@section('content')
    <main>
        <div class="container my-4 pt-5">
            <h2 class="mt-4">Edit Profile</h2>

            <!-- Tampilkan Pesan Sukses Jika Ada -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                        required>
                </div>

                <!-- Tanggal Lahir -->
                <div class="form-group">
                    <label for="dob">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="dob" name="dob"
                        value="{{ $user->date_of_birth }}" required>
                </div>

                <!-- Angkatan -->
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" class="form-control" id="angkatan" name="angkatan" value="{{ $user->force }}"
                        required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                        required>
                </div>

                <!-- Alamat -->
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->address }}"
                        required>
                </div>

                <!-- Nomor Telepon -->
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        value="{{ $user->phone_number }}" required>
                </div>

                {{-- Image Profile --}}
                <div class="form-group">
                    <label for="profile-img">Upload Gambar</label>
                    <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                </div>

                <!-- Button Submit -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>

    </main>
@endsection
