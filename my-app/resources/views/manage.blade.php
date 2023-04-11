@extends('layout')
@section('content')
    <a href="/">
        <p class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left-circle mt-1" viewBox="0 0 12 12">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Back
        </p>
    </a>
 @if(!$listings->isEmpty())   
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            @foreach ($listings as $listing)
            <div class="row my-3">
                <div class="col-12 col-md-8">
                    <h4 class="text-primary">{{ $listing->title }}</h4>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-end align-items-center">
                    <div class="btn-group" role="group" aria-label="Listing Actions">
                        <form method="POST" action="/delete-listings/{{ $listing->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-1">
                                <i class="bi bi-trash"></i>
                                <span class="d-block d-md-inline">Delete</span>
                            </button>
                        </form>
                        <a href="/listings/{{ $listing->id }}/edit" class="btn btn-warning m-1">
                            <i class="bi bi-pencil"></i>
                            <span class="d-block d-md-inline">Edit</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
          <div class="text-center">
            <h1 class="display-1 text-secondary">Your job list is empty...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection
