<!-- resources/views/employees/index.blade.php -->

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Photo</th>
            <th>Created Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->mobile }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->hobby }}</td>
                <td>
                    @if ($employee->photo)
                        <img src="{{ Storage::url($employee->photo) }}" alt="Employee Photo" width="50" height="50">
                    @endif
                </td>
                <td>{{ $employee->created_at }}</td>

                <td>
    <form action="{{ route('employees.edit', $employee->id) }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</td>
                <td>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>


            </tr>
        @endforeach
    </tbody>
 
</table>