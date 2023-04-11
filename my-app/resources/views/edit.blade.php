@extends('layout')
@section('content')
    <div class="container p-5">
        <h1 class="mb-3 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-pencil" viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg> Edit {{ $listings->title }}</h1>
        <form action="/edit-listings/{{ $listings->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" name="company" value="{{ $listings->company }}" id="company" class="form-control"
                    placeholder="Reichert Group">
                @error('company')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" name="title" value="{{ $listings->title }}" id="title" class="form-control"
                    placeholder="PHP Backend">
                @error('title')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="job_location">Job Location</label>
                <input type="text" name="location" value="{{ $listings->location }}" id="location" class="form-control"
                    placeholder="Northern California">
                @error('location')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" value="{{ $listings->website }}" id="website" class="form-control"
                    placeholder="http://www.johns.com/">
                @error('website')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="tags">Tags (Please Comma separated with space)</label>
                <input type="text" name="tags" value="{{ $listings->tags }}" id="tags" class="form-control"
                    placeholder="php, laravel, api">
                @error('tags')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="tags">Email</label>
                <input type="email" name="email" value="{{ $listings->email }}" id="email" class="form-control">
                @error('email')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="logo">Company Logo</label>
                <input type="file" name="logo" id="logo" class="form-control-file">
                <img src="{{ $listings->logo ? asset('storage/' . $listings->logo) : asset('/images/logo1.jpg') }}"
                    class="img-fluid mt-2" alt="comp-logo" width="150">
            </div>
            <div class="form-group">
                <label for="job_description">Job Description</label>
                <textarea name="description" id="description" rows="5" class="form-control">
                    {{ $listings->description }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-success">Edit Job</button>
                <a href="/listings/manage">
                    <p class="btn btn-outline-success mt-3">
                        Back
                    </p>
                </a>
            </div>
        </form>
    </div>
@endsection
