@extends('layout')
@section('content')
    <div class="container p-5">
        <h1 class="mb-3 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor"
                class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
            </svg> Create Job</h1>
        <form action="/listings-create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" name="company" value="{{ old('company') }}" id="company" class="form-control"
                    placeholder="Reichert Group">
                @error('company')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control"
                    placeholder="PHP Backend">
                @error('title')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="job_location">Job Location</label>
                <input type="text" name="location" value="{{ old('location') }}" id="location" class="form-control"
                    placeholder="Northern California">
                @error('location')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" value="{{ old('website') }}" id="website" class="form-control"
                    placeholder="http://www.johns.com/">
                @error('website')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="tags">Tags (Please Comma separated with space)</label>
                <input type="text" name="tags" value="{{ old('tags') }}" id="tags" class="form-control"
                    placeholder="php, laravel, api">
                @error('tags')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="tags">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control"
                    placeholder="test@mail.com">
                @error('email')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="logo">Company Logo</label>
                <input type="file" name="logo" id="logo" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="job_description">Job Description</label>
                <textarea name="description" id="description" rows="5" class="form-control">
                    {{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Post Job</button>
                <a href="/listings/manage">
                    <p class="btn btn-outline-info mt-3">
                        Back
                    </p>
                </a>
            </div>
        </form>
    </div>
@endsection
