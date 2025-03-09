<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php include ('./client/commonFiles.php')?>
    <link rel="stylesheet" href="./public/all.min.css">
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
    <?php 
    include('./client/header.php');

    if(isset($_GET['Dasboard'])){
        include('./client/Dasboard.php');
    }
    elseif(isset($_GET['userManagement'])){
        include('./client/userManagement.php');
    }
    elseif(isset($_GET['productManagement'])){
        include('./client/productManagement.php');
    }
    elseif(isset($_GET['orders'])){
        include('./client/orders.php');
    }
    elseif(isset($_GET['reports'])){
        include('./client/reports.php');
    }
    elseif(isset($_GET['settings'])){
        include('./client/settings.php');
    }
    elseif(isset($_GET['signUp'])){
        include('./client/signUp.php');
    }
    elseif(isset($_GET[''])){
        include('./client/');
    }
    elseif(isset($_GET[''])){
        include('./client/');
    }
    elseif(isset($_GET[''])){
        include('./client/');
    }
    ?>
    
</body>
</html>