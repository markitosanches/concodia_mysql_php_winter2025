
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div>
            
            <?php if(isset($_SESSION)){
               echo $_SESSION['name']; 
            }
            ?>
        </div>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <?php if(isset($_SESSION)){?>
                <li><a href="client-create.php">Client Create</a></li>
            <?php } ?>
            <li><a href="city-index.php">Cities</a></li>
            <?php if(isset($_SESSION)){?>
                <li><a href="city-create.php">City Create</a></li>
            <?php } ?>
            <?php if(isset($_SESSION)){?>
                <li><a href="logout.php">Logout</a></li>
            <?php }else{ ?>
                <li><a href="login.php">Login</a></li>
            <?php } ?>
            
        </ul>
    </nav>
    <main>