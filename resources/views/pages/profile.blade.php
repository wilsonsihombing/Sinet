@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
    <main>
        <!-- content -->
        <div class="container profile-container">
            <!-- content -->
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="{{ $user->photo ? asset('storage/' . $user->photo) : url('frontend/images/profile.png') }}" alt="Profil {{ $user->name }}" class="profile-image" />
                </div>

                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>{{ $user->date_of_birth ? $user->date_of_birth->format('d-m-Y') : '-' }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Angkatan</th>
                                <td>{{ $user->force ?? '-'}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $user->email ?? '-'}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{ $user->address ?? '-'}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Telepon</th>
                                <td>{{ $user->phone_number ?? '-'}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Button Edit Profile -->
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profile</a>
                </div>
            </div>
        </div>
    </main>
@endsection
