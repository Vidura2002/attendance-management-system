<?php
        $connection=mysqli_connect("localhost:3307","root","","user_db");

        if(isset($_POST["enter"])){
            $name=$_POST["name"];
            $id=$_POST["id"];
            $section=$_POST["section"];
            $No=$_POST["no"];

            $query="INSERT INTO attendence(User_name,employe_ID,Section,Contact_no)
            values('{$name}','{$id}','{$section}','{$No}')";

            $add_query=mysqli_query($connection,$query);

            if($add_query){
                echo '<script> window.onload=function() {succsess();}</script>';
            }
            else{
                echo '<script> window.onload=function() {error();}</script>';
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            display:grid;
            justify-content:center;
            align-content:center;
            font-family: monospace;
        }
        #topic{
            font-weight: 600;
            font-family: monospace;
            text-decoration: underline;
            font-size: 3vw;
        }
        #form{
            border:2px solid black;
            display:grid;
            justify-content:center;
            width: 40rem;
            background-color:antiquewhite;
        }

    </style>
</head>
<body>
    <p id="topic" class="row-sm-4 text-center">New Registration</p>

    <form id="form" method="post" action="">
        <div style="margin-top:2rem;">
            <label for="name">Name with initials:</label>
            <input type="text" id="name" name="name"></input>
        </div>
        
        <div style="margin-top:2rem;">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id"></input>
        </div>
        
        <div style="margin-top:2rem;">
            <label for="section">Section:</label>
            <input type="text" id="section" name="section"></input>
        </div>
        
        <div style="margin-top:2rem;">
            <label for="no">Contact no:</label>
            <input type="text" id="no" name="no"></input>
        </div>

        <div id="error" style="margin-top:2rem;display:none">
            <p style="color:red;">somthing went wrong try again!!!</p>
        </div>
        

        <input type="submit" value="Enter" name="enter" style="margin-top:2rem;margin-bottom:2rem;"></input>
        <input type="button" value="back"  style="margin-bottom:2rem;" onclick="goback()"></button>
    </form>

    <script>
        function succsess(){
            window.location.href="main.php";
        }

        function error(){
            document.getElementById("error").style.display="block";
        }
        function goback(){
            window.location.href="main.php";
        }
    </script>
    
</body>
</html>