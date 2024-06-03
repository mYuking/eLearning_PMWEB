@extends('admin.main')
@section('content')


<div class="pagetitle">
    <h1>+ Courses</h1>
    <nav>
      <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li> --}}
        <li class="breadcrumb-item">Courses</li>
        <li class="breadcrumb-item active">+ Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="section">
    <div class="card">
        <div class="card-body p-3">
            <form action="/admin/courses/create" method="post" >
            @csrf
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="mb-2">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" id="category" class="form-control">
            </div>

            <div class="mb-2">
                <label for="desc" class="form-label">Desc</label>
                <input type="text" name="desc" id="desc" class="form-control">
            </div>

            <div class="mb-4">
               <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
        </div>
    </div>
  </div>

  @endsection