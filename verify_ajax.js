$(document).ready(function() {

    // jquery event handler for the submit button
    $('#btn-submit').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var userName = $('#input').val(); // Get the value of the input field

        // Check if the input field is empty
        if(userName === "") {
            $('#verification').text('Input Is Empty').css('color', 'red'); // set verification text with the color red
            return;
        }

        // AJAX request to send the username to the server
        $.ajax({
            url: "info.php", // server side URL
            type: "POST", // HTTP method OF the request
            data: { username: userName }, // data that be send
            
            // Success callback function
            success: function(response) {
                // Check if response is success
                if (response === "Verified") {
                    $("#verification").text("Verified").css("color", "green"); // set verification text with the color green
                } else {
                    $("#verification").text("Error").css("color", "red"); // set verification text with the color red
                }
            },

            // Error callback function
            error: function() {
                $("#verification").text("Error").css("color", "red"); // set verification text with the color red
            }
        });
    });
});
