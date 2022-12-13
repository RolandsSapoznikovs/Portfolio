<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <style type="text/css">
        .header{
            height: 50px;
            background-color: black;
            color: white;  
            text-align: center;
            font-size: 30px; 
        }

    </style>
</head>
<body>

   <div class="header">My Portfolio</div>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="firstname">First Name: </label>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Last Name: </label>
        <input type="text" id="lastname" name="lastname">
        <button type="submit">GET</button>
        <button type="submit" formmethod="post">POST</button>
    </form>
    <?php include('Request.php');
    
    $NewRequest = new Request();
    $NewRequest->GetOrPost();
    $NewRequest->RequestedURI();
    $NewRequest->RequestParametrs();
    
    ?>
</body>
</html>