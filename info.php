<?php
if (isset($_POST['username'])) { // Check the submitted form
    $username = $_POST['username']; // retrieve username from post request

    // Check if the username is equal to 'abc' or not
    if ($username === "abc") {
        echo "Verified";
    } else {
        echo "Error";
    }
} else {
    // else statement if username not found is error
    echo "Error";
}
?>
