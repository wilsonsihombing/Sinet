@include('includes.style')

<body>
    <section class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="row w-100 justify-content-center align-items-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="card text-black">
                        <div class="row g-0">
                            <!-- Bagian kiri (logo + teks) -->
                            <div class="col-lg-6 d-flex align-items-center justify-content-center bg-primary text-white">
                                <div class="text-center px-3 py-4 p-md-5 mx-md-4">
                                    <img src="frontend/images/lambang bagus.png" class="img-fluid mb-4" alt="logo"
                                        width="200px" />
                                    <h4 class="mb-4">HELLO!</h4>
                                    <p class="small mb-0">
                                        Let's Get Started and Create an Account
                                    </p>
                                </div>
                            </div>

                            <!-- Bagian kanan (formulir pendaftaran) -->
                            <div class="col-lg-6 align-items-center justify-content-center">
                                <div class="card-body p-md-5 mx-md-4">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- name -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Enter your Name" />
                                        </div>

                                        <!-- username -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="username" class="form-control"
                                                placeholder="Enter your username" />
                                        </div>

                                        <!-- email -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Enter your Email" />
                                        </div>

                                        <!-- password -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="........" />
                                        </div>

                                        <!-- confirm password -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="confirm-password">Confirm Password</label>
                                            <input type="password" id="confirm-password" name="password_confirmation"
                                                class="form-control" placeholder="........" />
                                        </div>

                                        <div class="text-center pt-1 mb-4">
                                            <button class="btn btn-primary btn-block gradient-custom-2" type="submit">
                                                Create an Account
                                            </button>
                                        </div>

                                        <div class="text-center">
                                            <p class="mb-0">
                                                Have an account? <a href="login.html">Login</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
