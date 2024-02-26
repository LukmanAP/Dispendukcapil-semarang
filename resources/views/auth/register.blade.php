@extends('layouts.app')

@section('auth')
<div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-8 col-md-6 my-5 p-5">
        <div class=" p-5 d-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h5 class="text-gray-900 mb-4"><strong>Buat Akun Sistem Antrian Dukcapil</strong> </h5>
                </div>
                <form action="{{ route('register') }}" class="user" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="name" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama Anda">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Alamat Email">
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
                            @error('password')
                                <span class="invalid-feedback" style="border-radius: 20px;" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password1" name="password_confirmation" placeholder="Masukkan Password">
                            <div class="input-group-append">
                                <span class="input-group-text field-icon fa fa-fw fa-eye toggle-password1" style="width: 30px; "></span>
                            </div>

                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        
                        
                    </div>

                    <div class="row d-flex ">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-danger btn-user btn-block">Daftar</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p style="font-size: 12px;">Sudah punya akun?</p>
                            <a class="btn btn-secondary btn-user btn-block" href="/login" role="button">Masuk</a>
                        </div>
                    </div>
                </form>
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

    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword1 = document.querySelector('.toggle-password1');
        const password = document.querySelector('#password1');

        togglePassword1.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    });
</script>


@endsection
