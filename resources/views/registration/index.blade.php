@extends('template.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/registration" method="post">
                <div class="form-floating">
                    <input type="text" id="name" placeholder="name" class="form-control rounded-top @error('name') is-invalid @enderror" required value="{{ old('name') }}">
                    <label for="name">Nama</label>

                    @error('name')
                    <div class="ivalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- <div class="form-floating">
                    <input type="text" id="username" placeholder="username" class="form-control">
                    <label for="username">Username</label>
                </div> --}}

                <div class="form-floating">
                    <input type="email" id="floatingInput" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                    <label for="floatingInput">Email Address</label>
                    @error('email')
                    <div class="ivalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" id="floatingPassword" placeholder="password" class="form-control @error('password') is-invalid @enderror" required value="{{ old('password') }}">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="ivalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Daftar</button>
            </form>

            <small class="d-block text-center mt-3">Sudah punya akun ? <a href="/login">Masuk</a></small>
        </main>
    </div>
</div>
@endsection
