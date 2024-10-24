@extends('layouts.app')

@section('title')
    Edit Profiles
@endsection

@section('content')
    <main>
        <div class="container my-4">
            <h2 class="mt-4">Edit Profile</h2>
            <form action="#" method="POST">
                <!-- Nama -->
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="" required>
                </div>

                <!-- Tanggal Lahir -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="" required>
                </div>

                <!-- Angkatan -->
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" class="form-control" id="angkatan" name="angkatan" value="" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>

                <!-- Nomor Telepon -->
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="" required>
                </div>

                {{-- Image Profile --}}
                <div class="form-group">
                    <label for="profile-img">Upload Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>

                <!-- Button Submit -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>

    </main>
@endsection
