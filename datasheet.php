<?php
    $connection=mysqli_connect("localhost:3307","root","","user_db");

    $query="SELECT * FROM attendence";
    $data=mysqli_query($connection,$query);
    $table="<table>";
    $table.="<tr><th>Name with initials</th><th>ID no</th><th>Section</th><th>Contact no</th></tr>";
    while($get_data=mysqli_fetch_assoc($data)){
        $table.="<tr>";
        $table.="<td>".$get_data['User_name']."</td>";
        $table.="<td>".$get_data['employe_ID']."</td>";
        $table.="<td>".$get_data['Section']."</td>";
        $table.="<td>".$get_data['Contact_no']."</td>";
        $table.="</tr>";
    }
    $table.="</table>";

    if(isset($_POST['delete'])){
        $id=$_POST['DelID'];

        $delQuery="DELETE FROM attendence WHERE employe_ID='{$id}'";
        $delData=mysqli_query($connection,$delQuery);

        if($delData){
            echo '<script> window.onload=function() {sucsess();}</script>';
        }
        else{
            echo '<script>window.onload=function() {error();}</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sheet</title>

    <style>
        td,th{
           border:2px solid black; 
           padding:1rem;
        }
        table{
            border-collapse:collapse;
            font-family:monospace;
        }
        th{
            background-color:antiquewhite;
        }
        body{
            display:grid;
            justify-content:center;
            align-content:center;
        }
        #topic{
            font-weight:600;
            font-size:3vw;
            font-family:monospace;
            text-decoration:underline;
        }
        form{
            border:1px solid black;
            padding:1rem;
            margin-bottom:2rem;
            background-color: whitesmoke;
        }
        #succ{
            display:none;
            font-family:monospace;
            color:green;
        }
        #error{
            display:none;
            font-family:monospace;
            color:red;
        }
    </style>
</head>
<body>
    <p id="topic">Employe Details Datasheet</p>
    <form method="post" action="">
        <label for="delete">Enter ID:</label>
        <input type="text" name="DelID"></input><br><br>
        <input type="submit" value="delete" name="delete" style="background-color:red;color:white;border:1px solid red;"></input>
        <p id="succ">Deleted sucsessfully.</p>
        <p id="error">Delete Fail!</p>
    </form>
    <?php echo $table ?>;
    
    <script>
        function sucsess(){
            document.getElementById("succ").style.display="block";
            setTimeout(() => {
                window.location.href="main.php";
            }, 3000);
            
        }

        function error(){
            document.getElementById("error").style.display="block";
        }
    </script>
</body>
</html>