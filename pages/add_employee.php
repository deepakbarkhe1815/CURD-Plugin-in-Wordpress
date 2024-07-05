<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        .form-outer{
            width:600px;
            height:500px
            background-color:#e5ffc6;
            margin:10px;
            border:1px solid black;
            border-radius:5px;
        }

        .form-heading{
            height:50px;
        }

        .form-heading h3{
            background-color:#000;
            color:#fff;
            text-align:center;
            height:30px;
            padding:10px;
            margin-top:0;
        }
        .wapper{
            width:350px;
            height:50px;
            position: relative;
            margin:20px;
        }

        .wapper input{
            width:350px;
            height:40px;
            position: relative;
            padding:10px;
            font-size:16px;
            font-weigth:500;
        }
        
        .wapper label{
            position: absolute;
            left:10px;
            top:10px;
            transition: all .3s ease;
            background-color: #fff;
            font-size:16px;
            pointer-events:none;
            padding: 0 5px;
        }

        .wapper input:focus ~ label,
        .wapper input:valid ~ label{
            transform:translateY(-18px);
        }

        .btn{
            margin:20px;
            width:150px;
            height:40px;
        }

        .btn button{
            background-color:orange;
            width:150px;
            heigth:40px;
            border:none;
            border-radius:10px;
            transition:all 0.2s ease-in-out;
            cursor:pointer;
            padding:10px 3px;
            font-weight:600;
        }

        .btn button:hover{
            background-color:green; 
            color:#fff;
        }

        /* @media (max-width:465px){
            .form-outer{
                width:450px;
            }
        } */
    </style>
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
                <input type="text" name="gender" required/>
                <label>Gender</label>
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
