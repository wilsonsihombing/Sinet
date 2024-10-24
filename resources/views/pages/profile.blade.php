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
                    <img src="{{ url('frontend/images/kezia.png') }}" alt="Profil Kezia" class="profile-image" />
                </div>

                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>Kezia Judika Manira Hutagaol</td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth</th>
                                <td>17-10-2004</td>
                            </tr>
                            <tr>
                                <th scope="row">Angkatan</th>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>keyziahutagaol@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Telepon</th>
                                <td>085763872494</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Button Edit Profile -->
                    <a href="{{ route('edit.profiles') }}" class="btn btn-primary mt-3">Edit Profile</a>
                </div>
            </div>
        </div>
    </main>
@endsection
