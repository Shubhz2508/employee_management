<!-- resources/views/employees/edit.blade.php -->

<form action="{{ route('employees.update', $employee->id) }}" method="POST">    @csrf
    @method('PUT')

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="{{ $employee->first_name }}" required>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="{{ $employee->last_name }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $employee->email }}" required>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" value="{{ $employee->mobile }}" required>

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{ $employee->address }}" required>

    <label for="gender">Gender:</label>
    <input type="text" name="gender" value="{{ $employee->gender }}" required>

    <label for="hobby">Hobby:</label>
    <input type="text" name="hobby" value="{{ $employee->hobby }}" required>

    <button type="submit">Update</button>
</form>