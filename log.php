<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Verification</title>

    <style>
        #log{
            margin-top:8rem;
            background-color:grey;
            border-radius:10px;
            color:white;
        }

        #btn{
            width:4rem;
            background-color:black;
            color:white;
            cursor: pointer;
        }
        #btn:hover{
            border:2px solid white;
        }
        body{
            background:url('back2.jpeg');
        }
    </style>
</head>
<body style="display:grid;justify-content: center;align-content:center;">

    <div id="log" style="border:2px solid gray;width:25rem;height:17rem;display:grid;justify-content: center;align-content:center;">
        <div>
            <label for="admin">admin</label>
            <input type="user" id="user"></input>
        </div>

        <div style="margin-top:2rem">
            <label for="pass">password</label>
            <input type="password" id="pass"></input>
        </div>

        <div style="margin-top:2rem;" >
            <input type="submit" value="Log" onclick="check()" id="btn">
        </div>

        <div id="error" style="margin-top:2rem;display:none">
            <p style="color:red;">invalid input!!!</p>
        </div>
        
    </div>

    <script>

        function check(){
            let myadmin="admin";
            let passkey="qpy9078";
            let admin=document.getElementById("user").value;
            let password=document.getElementById("pass").value;
            if(myadmin===admin && passkey===password){
                window.location.href="main.php";
            }
            else{
                document.getElementById("error").style.display="block";
            }
        }
    </script>
    
</body>
</html>