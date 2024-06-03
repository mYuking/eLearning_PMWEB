@extends('admin.main')
@section('content')


<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li> --}}
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Edit Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="section">
    <div class="card">
        <div class="card-body p-3">
            <form action="/admin/courses/update/{{ $courses->id }}" method="POST" class="mt-3">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="category" class="form-label">category</label>
                    <input type="text" name="category" id="category" class="form-control"value="{{ $courses->category?? '' }}">
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Desc</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3">{{ $courses->desc?? '' }}</textarea>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>


  @endsection