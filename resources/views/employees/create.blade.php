<!-- resources/views/employees/create.blade.php -->

<form action="{{ route('employees.store') }}" method="POST">    @csrf

    <div>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
    </div>

    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="mobile">Mobile with Country Code:</label>
        <select name="country_code" id="country_code">
            <option value="+1">+1 (USA)</option>
            <option value="+91">+91 (India)</option>
            <!-- Add more options for other country codes -->
        </select>
        <input type="number" name="mobile_number" id="mobile_number" required>
    </div>

    <div>
        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea>
    </div>

    <div>
        <label for="gender">Gender:</label>
        <label>
            <input type="radio" name="gender" value="male" required> Male
        </label>
        <label>
            <input type="radio" name="gender" value="female" required> Female
        </label>
    </div>

    <div>
        <label for="hobby">Hobby:</label>
        <label>
            <input type="checkbox" name="hobby[]" value="reading"> Reading
        </label>
        <label>
            <input type="checkbox" name="hobby[]" value="music"> Music
        </label>
        <label>
            <input type="checkbox" name="hobby[]" value="sports"> Sports
        </label>
        <!-- Add more checkboxes for other hobbies -->
    </div>

    <div>
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo">
    </div>

    <button type="submit">Add Employee</button>
</form>