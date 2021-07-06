<div class="card mb-3">
    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80"
        height="300px" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You cane find here all the informations about students in the system</p>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">RollNo</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->specialty }}</td>
                    <td>
                        <a href="{{ url('/edit/' . $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url('/delete/' . $student->id) }}" class="btn btn-sm btn-danger">Delete</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
