<?php

    $connection=mysqli_connect("localhost:3307","root","","user_db");

    $query="SELECT * FROM attendence";
    $data=mysqli_query($connection,$query);

    $table="<table>";
    $table.="<tr><th>Name</th><th>ID No</th><th>Section</th><th>Contact no</th><th>Present</th><th>Absent</th></tr>";

    while($get_data=mysqli_fetch_assoc($data)){
        $table.="<tr>";
        $table.="<td>".$get_data['User_name']."</td>";
        $table.="<td>".$get_data['employe_ID']."</td>";
        $table.="<td>".$get_data['Section']."</td>";
        $table.="<td>".$get_data['Contact_no']."</td>";
        $table.="<td><input type='radio' name='".$get_data['employe_ID']."' value='present'></td>" ;
        $table.="<td><input type='radio' name='".$get_data['employe_ID']."' value='present'></td>" ;
    }
    $table.="</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendence</title>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <style>
        th,td{
            border:1px solid black;
            padding:1rem;
        }
        tr{
            font-family:monospace;
        }
        table{
            border-collapse:collapse;
        }
        th{
            background-color:antiquewhite;
        }
        body{
            display:grid;
            justify-content:center;
        }
        #topic{
            font-family:monospace;
            font-weight:600;
            margin-top:1rem;
            font-size:3rem;
            margin-bottom:2rem;

        }
        #BtnD{
            margin-top:2rem;
            background-color:blue;
            color:white;
            font-weight:600;
            height:2rem;
            margin-left:3rem;
        }
        #BtnD:hover{
            background-color:aqua;
            color:black;
        }
        #data{
            margin-left:3rem;
        }
        #date{
            margin-bottom:2rem;
            font-weight:600;
            font-family:monospace;
            font-size:1.5rem;
        }
        @media screen and(max-width:600px){
            #data{
                width: 100vw;
                margin-right:1rem;
            }
        }
    </style>
</head>
<body>
    <div id="data" class="row">
        <span id="topic">Daily Attendence Sheet</span>
        <p id="date"></p>
        <?php echo $table ?>
    </div>
    <p id="x">* Click below button to download attendence report</p>
    <input type="button" onclick="downloadSheet()" id="BtnD" value="Download Sheet"></input>

    <script>

        let dateDiv=document.getElementById("date");
        let date=new Date();

        const options={year:'numeric',month:'long',day:'numeric'};
        dateDiv.innerHTML="Date : "+date.toLocaleDateString(undefined,options);

        function downloadSheet() {
            document.getElementById("BtnD").style.display="none";
            document.getElementById("x").style.display="none";

            setTimeout(()=>{
                window.print();
            },2000);
            
        }
        

    </script>
</body>
</html>