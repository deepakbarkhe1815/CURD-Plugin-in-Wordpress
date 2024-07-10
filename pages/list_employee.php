<?php 
$limit = $_POST['limit'];

echo $limit;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Employee</title>
    <link rel="stylesheet" href="<?php echo Emp_PLUGIN_URL ?>css/list_employee.css">
    
</head>
<body>
    <div class="main-container">
        <h2>Employee List Page</h2>
        <div class="container">
            <div class="limit-option">
                <select name="limit" id="limit" onchange='handle()'>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="searchbar">
                <div class="wapper">
                    <input type="text" name="search" class="search" required>
                    <label for="search">Search</label>
                </div>
            </div>
        </div>
        <div class="table">
            <table id="tabel-emp">
                <thead>
                    <tr class="ttr">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Gender</th>
                        <th>Designation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Deepak Barkhe</td>
                        <td>deepakbarkhe@gmail.com</td>
                        <td>8962195447</td>
                        <td>Male</td>
                        <td>Software Enginer</td>
                        <td>
                            <a href="javascript:void(0)" class="btn-action">Edit</a>
                            <a href="javascript:void(0)" class="btn-action-delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Deepak Barkhe</td>
                        <td>deepakbarkhe@gmail.com</td>
                        <td>8962195447</td>
                        <td>Male</td>
                        <td>SE</td>
                        <td>
                            <a href="javascript:void(0)" class="btn-action">Edit</a>
                            <a href="javascript:void(0)" class="btn-action-delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Deepak Barkhe</td>
                        <td>deepakbarkhe@gmail.com</td>
                        <td>8962195447</td>
                        <td>Male</td>
                        <td>SE</td>
                        <td>
                            <a href="javascript:void(0)" class="btn-action">Edit</a>
                            <a href="javascript:void(0)" class="btn-action-delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Deepak Barkhe</td>
                        <td>deepakbarkhe@gmail.com</td>
                        <td>8962195447</td>
                        <td>Male</td>
                        <td>SE</td>
                        <td>
                            <a href="javascript:void(0)" class="btn-action">Edit</a>
                            <a href="javascript:void(0)" class="btn-action-delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Deepak Barkhe</td>
                        <td>deepakbarkhe@gmail.com</td>
                        <td>8962195447</td>
                        <td>Male</td>
                        <td>SE</td>
                        <td>
                            <a href="javascript:void(0)" class="btn-action">Edit</a>
                            <a href="javascript:void(0)" class="btn-action-delete">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bottom-content">
            <div class="text-show">
                <span>Showing 1 to <script>
                    var table = document.getElementById("tabel-emp");

                    var totalRowCount = table.rows.length; 

                    var tbodyRowCount = table.tBodies[0].rows.length;
                    document.write(tbodyRowCount);
         </script> of 
         <script>document.write(tbodyRowCount)</script> 
         entries</span>
         
            </div>
            <div class="next-btn">
                <button type="submit">< Pre</button>
                <button type="submit">Next > </button>
            </div>
        </div>
    </div>
    

   
    <script>
       
            var table = document.getElementById("tabel-emp");
     
            // var totalRowCount = table.rows.length; 
     
            var tbodyRowCount = table.tBodies[0].rows.length;

      funtion limit(1){
        let limit = 
      }

       
       console.log(tbodyRowCount);
    </script>
</body>
</html>