@extends('template.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil') }} <button  type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }} <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="form-signin">
            
            <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">

                    <input type="email" id="email" name="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" required autofocus value="{{ old('email') }}">
                    <label for="floatingInput">Email Address</label>
                </div>

                <div class="form-floating">
                    <input type="password" id="floatingPassword" placeholder="password" class="form-control" required>
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">Belum punya akun ? <a href="/registrasi">Registrasi sekarang
                    !!</a></small>
        </main>
    </div>
</div>
@endsection
