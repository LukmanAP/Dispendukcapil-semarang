@extends('layouts.app')

@section('auth')
<div class="row d-flex align-items-center justify-content-center">
    <div class="card col-lg-8 col-md-6 o-hidden border-0 shadow-lg my-5 ">
        <div class="card-body p-5 d-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Buat Akun Sistem Antrian Dukcapil </h1>
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
                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password_confirmation" placeholder="Masukkan Password">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="row d-flex ">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-danger btn-user btn-block">Daftar</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p>Sudah punya akun?</p>
                            <a class="btn btn-secondary btn-user btn-block" href="/login" role="button">Masuk</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection