<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<style>
span {
    font-size: 12px;
    color: red;
}

</style>
<body>
    <?php
        $email = $passwod = "";
        $emailError = $passwordError ="";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = test_input($_POST["email"]);
            $password = test_input($_POST["password"]);

            $emailPattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
            $passwordPattern = '/^[0-9]{8}$/';
         

            if (empty($email) && !preg_match($emailPattern, $email)) {
                $emailError = "Invalid email address";
            }
    
            if (empty($password) && !preg_match($passwordPattern, $password)) {
                $passwordError = "Invalid password. Password must be 8 numbers.";
            }

            if (empty($emailError) && empty($passwordError)) {
                header('location: form_success.php');
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ">
            <div id="form">
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                    <span><?php echo $emailError; ?></span>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password">
                    <span><?php echo $passwordError; ?></span>
                </div>
            </div>
            <button name="submit">Login</button>
        </form>

    </h2>
</body>
</html>