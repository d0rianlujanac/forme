<!DOCTYPE html>
<html>

<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
        //print_r($_POST);
        if($_POST['godine'] < 18)
        {
            echo('<span style color: red>' . $_POST['ime']'</span>');
        }
        else
        {
            echo('<span style color: green>' . $_POST['ime']'</span>');
        }
    ?>
</body>

</html>