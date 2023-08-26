<!DOCTYPE html>
<html>
<head>
    <title>Registration Form with PHP Validation</title>
</head>
<body>
    <?php
    $email = $password = "";
    $emailErr = $passwordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);

        $emailPattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
        $passwordPattern = '/^[0-9]{8}$/';

        if (!empty($email) && !preg_match($emailPattern, $email)) {
            $emailErr = "Invalid email address";
        }

        if (!empty($password) && !preg_match($passwordPattern, $password)) {
            $passwordErr = "Invalid password. Password must be 8 numbers.";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Registration Form with PHP Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span><br><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
