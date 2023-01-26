@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('students.index')}}" class="float-right btn btn-primary">Back to Students</a>
    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">Details of {{ $student->name }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th scopr="row">Name</th>
                                <td>{{ $student->name}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Profile Image</th>
                                <td><img src="../../../storage/app/public/{{ $student->profile_image}}" alt="profile image of {{ $student->name}}"/></td>
                            </tr>
                            <tr>
                                <th scopr="row">Gender</th>
                                <td>{{ $student->gender == 1 ? 'Female' : 'Male'}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Phone</th>
                                <td>{{ $student->phone}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Nationality</th>
                                <td>{{ $student->nationality}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Date of Birth</th>
                                <td>{{ $student->date_of_birth}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Grade of Ten</th>
                                <td>{{ $student->grade_ten}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Grade of Twelve</th>
                                <td>{{ $student->grade_twelve}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Grade of Bachelor</th>
                                <td>{{ $student->grade_bachelor}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Grade Master</th>
                                <td>{{ $student->grade_master}} </td>
                            </tr>
                            <tr>
                                <th scopr="row">Preferred mode of contact</th>
                                <td>{{ $student->contact_mode}} </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection