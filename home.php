<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        *{
           font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           box-sizing: border-box; 
        }
        
        body{
            background: rgb(84, 84, 243);
            display: flex;
            justify-content: center; 
            align-items: center;
            height: 100vh;
        }

        .abece{
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: white;
            border-radius: 20px;
        }

        h1{
            text-align: center;
        }
        a{
            text-align: center;
            display: block;
            width: 20%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 10px;
            background: rgb(90, 90, 206);
            color: white;
            font-size: 15px;
            border: none;
            text-decoration: none;
        }a:hover{
            opacity: .7;
        }
    </style>
</head>
<body>
    <div class="abece">
    <h1>Haii, <?php echo $_SESSION['nama']; ?></h1>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>

<?php
} 
else {
    // Redirect ke halaman login jika user belum login
    header("Location: index.php");
    exit();
}
?>