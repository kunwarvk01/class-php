<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Please enter a valid name";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Please enter a valid email address";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "The email address is incorrect";
        }
    }
    // ... (continue your validation logic for website, comment, and gender)

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (
            !preg_match(
                "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                $website
            )
        ) {
            $websiteErr = "Enter a valid Webiste URL";
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Please select a gender";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars(
    $_SERVER["PHP_SELF"]
); ?>">
    FullName: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span><br><br>
    E-mail address: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span><br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr; ?></span><br><br>
    Comment: <textarea name="comment" rows="2" cols="10"></textarea><br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr; ?></span><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<h2>Final Output:</h2>
<?php
echo $name . "<br>";
echo $email . "<br>";
echo $website . "<br>";
echo $comment . "<br>";
echo $gender;
?>
</body>
</html>

