<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Employee</title>
    <style>
        *{
            font-family:sans-serif;
        }
        table{
            border-collapse:collapse;
            width:1000px;
        }

        th,td{
            border:1px solid black;
            text-align:left;
            padding:10px;
        }

        .ttr{
            background-color:#000;
            color:#ff6;
        }

        tbody tr:hover{
            background-color:#062;
            box-shadow:1px 1px 2px rgba(0, 0, 0, 0.3);
            cursor:pointer;
        }


        /* @media (max-width:465px){
            table{
            border-collapse:collapse;
            width:470px;
            } 
        } */
    </style>
</head>
<body>
    <h2>Welcome Employee List Page</h2>
    <div class="table">
        <table>
            <thead>
                <tr class="ttr">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Gender</th>
                    <th>Designation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Deepak Barkhe</td>
                    <td>deepakbarkhe@gmail.com</td>
                </tr>
                <tr>
                    <td>Deepak Barkhe</td>
                    <td>deepakbarkhe@gmail.com</td>
                </tr>
                <tr>
                    <td>Deepak Barkhe</td>
                    <td>deepakbarkhe@gmail.com</td>
                </tr>
                <tr>
                    <td>Deepak Barkhe</td>
                    <td>deepakbarkhe@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>