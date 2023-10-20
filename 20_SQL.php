<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define required fields
    $required_fields = array('name', 'email', 'message');

    // Initialize error array
    $errors = array();

    // Loop through required fields and check if they are empty
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = ucfirst($field) . ' is required';
        }
    }

    // Check if email is valid
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    // Sanitize form data to prevent SQL injection
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // If there are no errors, send email
    if (empty($errors)) {
        // Send email code here
        // ...
        // Redirect to thank you page
        header('Location: thank-you.php');
        exit;
    }
}

// Display form
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        <?php if (!empty($errors['name'])) echo '<span>' . $errors['name'] . '</span>'; ?>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        <?php if (!empty($errors['email'])) echo '<span>' . $errors['email'] . '</span>'; ?>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
        <?php if (!empty($errors['message'])) echo '<span>' . $errors['message'] . '</span>'; ?>
    </div>
    <button type="submit">Submit</button>
</form>


