@extends('layouts.app')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
@section('content')
<div class="container">
    <a href="{{ route('students.index')}}" class="float-right btn btn-primary">Go Back</a>
    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">Add Students
                </div>
                <div class="card-body">
                    <form action=" {{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name','')}}"/>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="profile_image">Profile Image</label>
                            <input type="file" name="profile_image" class="form-control" />
                        </div>

                        <div class="form-group mt-3">
                            <legend>
                                <h6>Gender</h6>
                            </legend>

                            <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" value="1" {{ '1' == old('gender','') ? 'checked' : ''}}>
                                <label for="female" class="form-check-label">Female</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" value="2" {{ '2' == old('gender','') ? 'selected' : ''}}>
                                <label for="male" class="form-check-label">Male</label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone" class="mb-3">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone','')}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="mb-3">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email','')}}"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nationality" class="mb-3">Nationality</label>
                            <input type="text" name="nationality" class="form-control" value="{{ old('nationality','')}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="date_of_birth" class="mb-3">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth','')}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="grade_ten" class="mb-3">Grade of 10</label>
                            <input type="text" name="grade_ten" class="form-control" value="{{ old('grade_ten','')}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="grade_twelve" class="mb-3">Grade of 12</label>
                            <input type="text" name="grade_twelve" class="form-control" value="{{ old('grade_twelve','')}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="grade_bachelor" class="mb-3">Grade of bachelor</label>
                            <input type="text" name="grade_bachelor" class="form-control" value="{{ old('grade_bachelor','')}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="grade_master" class="mb-3">Grade of master</label>
                            <input type="text" name="grade_master" class="form-control" value="{{ old('master','')}}"/>
                        </div>

                        <div class="form-group">
                            <label for="contact_mode">Preferred mode of contact</label>
                            <select name="contact_mode" class="form-control">
                                <option value="">--Select--</option>
                                <option value="phone" {{ 'phone' == old('contact_mode','') ? 'selected' : ''}}>Phone</option>
                                <option value="email" {{ 'email' == old('contact_mode','') ? 'selected' : ''}}>Email</option>
                                <option value="none">None</option>
                            </select>
                        </div>
                        <button class="btn btn-success mt-3">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection