@extends('layouts.app')

@section('auth')
        <div class="row d-flex align-items-center justify-content-center">
            <div class=" col-lg-8 col-md-6 mt-5 p-5 ">
                <div class="p-5 d-flex align-items-center justify-content-center">
                    <div class="col-lg-10 ">
                        <div class="text-center">
                            <h5 class="text-gray-900 mb-4"><strong>Login Sistem Antrian Dukcapil</strong></h5>
                        </div>

                        <form action="{{ route('login') }}" class="user" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Alamat Email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text field-icon fa fa-fw fa-eye toggle-password" style="width: 30px;"></span>
                                    </div>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div>

                            <div class="row d-flex ">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-danger btn-user btn-block">Masuk</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p style="font-size: 12px;">Belum punya akun?</p>
                                    <a class="btn btn-secondary btn-user btn-block" href="/register" role="button">Daftar Akun</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>

@endsection
