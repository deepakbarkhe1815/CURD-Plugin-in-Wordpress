<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="<?php echo Emp_PLUGIN_URL?>css/add_employee.css">
    
</head>
<body>
    <h2>Welcome Employee Management System</h2>
    <div class="form-outer">
        <form action="" method="post">
            <div class="form-heading">
                <h3>Add Employee</h3>
            </div>
            <div class="wapper">
                <input type="text" name="name" required/>
                <label>Name</label>
            </div>
            <div class="wapper">
                <input type="text" name="email" required/>
                <label>Email</label>
            </div>
            <div class="wapper">
                <input type="text" name="phone" required/>
                <label>Phone No</label>
            </div>
            <div class="wapper">
                <select class="select">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                
            </div>
            <div class="wapper">
                <input type="text" name="desgination" required/>
                <label>Desgination</label>
            </div>
            <div class="btn">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
