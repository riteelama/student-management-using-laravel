<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <title>Students</title>
</head>

<body>
    @extends('layouts.app');

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Students
                    </div>
                    <div class="card-body">
                        <table id="studentTable" class="table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Nationality</th>
                                    <th>Phone</th>
                                    <th>Profile Picture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->name}}</td>
                                    <td>{{ $student->email}}</td>
                                    <td>{{ $student->nationality}}</td>
                                    <td>{{ $student->phone}}</td>
                                    <td>{{ $student->profile_image}}</td>
                                    <td>{{ $student->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
                        <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#studentTable').DataTable();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>