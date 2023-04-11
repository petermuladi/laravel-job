@extends('layout')
@section('content')
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-dark" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div>
                            <h2 class="fw-bold mb-2">Registrate</h2>
                            <p class="text-primary">Fill in the Data Sheet for Registration</p>
                            <form method="POST" action="/new-user">
                                @csrf
                                <div class="p-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" value="{{ old('name') }}" name="name"
                                        class="form-control form-control-lg" placeholder="john smith" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="p-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="form-control form-control-lg" placeholder="john@mail.com" />
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="p-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-lg" />
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="p-3">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control form-control-lg" />
                                    @error('password_confirm')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button class="btn btn-outline-primary btn-lg px-5 mt-5" type="submit">Sing up</button>
                            </form>
                            <p class="mt-5">Already have an account? <a class="mt-2" href="/login">Login</a></p>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
