<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="sign-up">
        <form action="process.php" method="post">
            <input type="text"placeholder="user name"class="text"name="username">
            <input type="text"placeholder="email"class="text"name="email">
            <input type="password"placeholder="password"class="text"name="password">
            <input type="password"placeholder="confirm password"class="text"name="cpassword">
            <input type="submit"placeholder="sign up"class="btn"name="btn -save">
        </form>
    </div>
</body>
</html>