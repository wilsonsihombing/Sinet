@include('includes.style')

<main>
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-9">
                    <div class="card text-black">
                        <div class="row g-0">
                            <!-- Bagian kiri (logo + teks) -->
                            <div class="col-lg-6 d-flex align-items-center justify-content-center bg-primary text-white">
                                <div class="text-center px-3 py-4 p-md-5 mx-md-4">
                                    <img src="frontend/images/lambang bagus.png" class="img-fluid mb-4" alt="logo"
                                        width="200px" />
                                    <h4 class="mb-4">WELCOME BACK!</h4>
                                    <p class="small mb-0">
                                        Enter your ID and Password to continue
                                    </p>
                                </div>
                            </div>

                            <!-- Bagian kanan (formulir login) -->
                            <div class="col-lg-6 align-items-center justify-content-center mb-5">
                                <div class="card-body p-md-5 mx-md-4">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf <!-- Tambahkan CSRF token untuk keamanan -->

                                        <!-- Email -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Enter your Email" required autofocus />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="........" required />
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Remember me -->
                                        <div class="form-check d-flex justify-content-between mb-5">
                                            <div>
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="rememberMe" {{ old('remember') ? 'checked' : '' }} />
                                                <label class="form-check-label" for="rememberMe">
                                                    Remember me
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}" class="text-muted">Forgot
                                                password?</a>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block btn-lg w-100">
                                            Sign in
                                        </button>

                                        <!-- Register link -->
                                        <div class="mt-3">
                                            <p class="small">
                                                Don't have an account? <a href="{{ url('/register') }}">Sign up</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
