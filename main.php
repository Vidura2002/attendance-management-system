<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="css/att.css?<?=filemtime("css/att.css")?>" rel="stylesheet" type="text/css" />
</head>
<body style="background:url('back.jpeg');">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script type="text/javascript" src="js/att.js?<?=filemtime("js/att.js")?>"></script>

    <p id="topic" class="row-sm-4 text-center">Welcome to Attendence Management System</p>
    <div id="set">
        <input type="submit" onclick="New()" value="New member registration" id="new"></input><br>
        <input type="submit" onclick="Del()" value="Remove a member" id="remove"></input><br>
        <input type="submit" onclick="mark()" value="Mark attendence" id="attend"></input><br>
        <input type="submit" onclick="data()" value="Go to database" id="base"></input>
    </div>

    <script>
        function New(){
            window.location.href="new.php";
        }
        function data(){
            window.location.href="datasheet.php";
        }
        function Del(){
            window.location.href="datasheet.php";
        }
        function mark(){
            window.location.href="mark.php";
        }
    </script>
</body>
</html>