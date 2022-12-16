@extends('template.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/registration" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"  id="name" placeholder="name" required value="{{ old('name') }}">
                    <label for="name">Name</label>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                    <label for="email">Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-floating">
                    <input type="password" id="password" name="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" required>
                    <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
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
