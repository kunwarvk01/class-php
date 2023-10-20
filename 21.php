
<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define required fields
    $required_fields = array('name', 'email', 'rating', 'comment');

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

    // Check if rating is valid
    if (!is_numeric($_POST['rating']) || $_POST['rating'] < 1 || $_POST['rating'] > 5) {
        $errors['rating'] = 'Rating must be a number between 1 and 5';
    }

    // Sanitize form data to prevent SQL injection
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $rating = filter_var($_POST['rating'], FILTER_SANITIZE_NUMBER_INT);
    $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

    // If there are no errors, save review to database
    if (empty($errors)) {
        // Save review code here
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
        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" value="<?php echo isset($_POST['rating']) ? htmlspecialchars($_POST['rating']) : ''; ?>">
        <?php if (!empty($errors['rating'])) echo '<span>' . $errors['rating'] . '</span>'; ?>
    </div>
    <div>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment"><?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : ''; ?></textarea>
        <?php if (!empty($errors['comment'])) echo '<span>' . $errors['comment'] . '</span>'; ?>
    </div>
    <button type="submit">Submit</button>
</form>

