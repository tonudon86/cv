<?php
$mysqli = new mysqli("sql206.byethost7.com","b7_27816055","8369619945","b7_27816055_tonu");
if(isset($_POST['sbm']))
{


    $sql = "Insert Into formdata(name,contact,email,remark) values('".$_POST['fname']."',
    '".$_POST['contact']."','".$_POST['email']."','".$_POST['remark']."' )";
    if($mysqli -> query($sql))
    {
         ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
</head>
<style>
    body{
        background-color: aqua;
    }
</style>
<body>
    <header>
        your response has saved
    </header>
    <p>
        <a href="http://suryasen.byethost7.com/">BACK TO  MIAN PAGE</a>
    </p>
</body>
<script>
    
    a= alert("details submited")
    console.log(a)
</script>
</html>
        
   
<?php
    }
    else{
        echo $sql;
        print_r($mysqli);
    }
}


?>