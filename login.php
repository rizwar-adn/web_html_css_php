<?php  

$db = mysqli_connect("localhost","root","root","login");

if(isset($_POST["submit"])){
    $emaill = $_POST["emaill"];
    $passwd = $_POST["passwd"];

    $query = "INSERT INTO loginn VALUES('', '$emaill', '$passwd')";
    mysqli_query($db,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Sistem Login</title>
</head>
<body>
    <div class="container">
    <nav class="cf">
            <h1>Sistem Login</h1>
            <ul>
                <li><a href="homepage.html">Homepage</a></li>
                <li><a href="https://www.instagram.com/rizwar_adn/?hl=en">Profile IG</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>

        <div class="login" id="login">
            <form action="" method="post">
                <ul type="none">
                    <li>
                        <label for="emaill">Email : </label>
                        <input type="text" name="emaill" id="emaill">
                    </li>
                    <br>
                    <li>
                        <label for="passwd">Password : </label>
                        <input type="password" name="passwd" id="passwd">
                    </li>
                    <li>
                        <button type="submit" name="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>