<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Student Management System</title>
</head>

<body>
    @include('navbar')

    <div class="container text-center">
        <h1>Student Management System</h1>
    </div>

    @if ($layout == 'index')
        <div class="container mt-3">
            <div class="row justify-content-center">
                <section class="col">
                    @include('studentslist')
                </section>

            </div>
        </div>
    @elseif($layout=='create')
        <div class="container-fluid mt-3">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">
                    <div class="card mb-3">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information of the new student</h5>

                            <form action="{{ url('/store') }}" method="POST" autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label for="roll_no" class="form-label">RollNo</label>
                                    <input type="text" class="form-control" id="roll_no" name="roll_no"
                                        placeholder="Enter RollNo">
                                </div>
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Enter Last Name">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age"
                                        placeholder="Enter your age">
                                </div>
                                <div class="mb-3">
                                    <label for="specialty" class="form-label">Speciality</label>
                                    <input type="text" class="form-control" id="specialty" name="specialty"
                                        placeholder="Enter your speciality">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @elseif($layout=='show')
        <div class="container-fluid mt-3">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">

                </section>
            </div>
        </div>
    @elseif($layout=='edit')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">
                    <div class="card mb-3">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update information of student</h5>
                        </div>
                        <form action="{{ url('/update/' . $student->id) }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label for="roll_no" class="form-label">RollNo</label>
                                <input type="text" class="form-control" id="roll_no" name="roll_no"
                                    placeholder="Enter RollNo" value="{{ $student->roll_no }}">
                            </div>
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter First Name" value="{{ $student->first_name }}">
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter Last Name" value="{{ $student->last_name }}">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Enter your age"
                                    value="{{ $student->age }}">
                            </div>
                            <div class="mb-3">
                                <label for="specialty" class="form-label">Speciality</label>
                                <input type="text" class="form-control" id="specialty" name="specialty"
                                    placeholder="Enter your speciality" value="{{ $student->specialty }}">
                            </div>
                            <button type="submit" class="btn btn-info">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                    </div>

                </section>
            </div>
        </div>
    @endif

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container-fluid bg-dark">
            <span class="text-light">© 2021 Copyright: Students Management System </span>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
