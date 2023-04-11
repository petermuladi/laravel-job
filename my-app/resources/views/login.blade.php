@extends('layout')
@section('content')
    <div class="container h-100 mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-dark" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div>
                            <h2 class="fw-bold mb-2">Login</h2>
                            <form method="POST" action="/login-user">
                                @csrf
                                <div class="p-3">
                                    <label class="form-label" for="email">username</label>
                                    <input type="email" id="email" value="{{ old('email') }}" name="email"
                                        class="form-control form-control-lg" />
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="p-3">
                                    <label class="form-label" for="password">password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-lg" />
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button class="btn btn-outline-primary btn-lg px-5 mt-5" type="submit">Sign in</button>
                                <p class="mt-5">Don't have an account? <a class="mt-2" href="/register">Reistrate</a>
                                </p>
                            </form>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
