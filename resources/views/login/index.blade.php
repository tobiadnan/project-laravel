@extends('template.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
            <form action="">

                <div class="form-floating">
                    <input type="email" id="floatingInput" placeholder="name@example.com" class="form-control">
                    <label for="floatingInput">Email Address</label>
                </div>

                <div class="form-floating">
                    <input type="password" id="floatingPassword" placeholder="password" class="form-control">
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
