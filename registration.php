
<form action="register.php" method="POST">
    <h2>Register</h2>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" required>
    </div>
    <div class="form-group">
        <label>Middle Name</label>
        <input type="text" class="form-control" name="middle_name" placeholder="Enter your middle name">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" required>
    </div>
    <div class="form-group"> 
        <label>Student ID Number</label>
        <input type="text" class="form-control" name="student_id_number" placeholder="Enter your student ID number" required>
    </div>
    <div class="form-group">
        <label>Year Graduated</label>
        <input type="number" class="form-control" name="year_graduated" placeholder="Enter your graduation year" required>
    </div>
    <div class="form-group">
        <label>Email Address</label>
        <input type="email" class="form-control" name="email_address" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" class="form-control" name="mobile_number" placeholder="Enter your mobile number" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your password" required>
    </div>
    <button class="btn btn-success btn-block" type="submit">Register</button>
</form>
