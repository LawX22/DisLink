
// ----------------- Log IN -----------------
$(document).ready(function(){
    $('#loginForm').submit(function(e){
        e.preventDefault(); // Prevent form submission
        var formData = $(this).serialize(); // Serialize form data
        $.ajax({
            type: 'POST',
            url: 'login-process.php', // Update to point to login processing script
            data: formData,
            success: function(response){
                // Check response from server
                if(response.trim() === "success") {
                    // Redirect to dashboard page if login successful
                    window.location.href = "dashboard.php";
                } else {
                    // Display error message if login failed
                    $('.error-msg').text(response);
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX errors
                console.error(xhr.responseText);
            }
        });
    });
});



// ----------------- Sign UP -----------------

$(document).ready(function(){
    $('#signupForm').submit(function(e){
        e.preventDefault(); // Prevent form submission
        var formData = $(this).serialize(); // Serialize form data
        $.ajax({
            type: 'POST',
            url: 'signup-process.php', // Update to point to signup processing script
            data: formData,
            success: function(response){
                // Check response from server
                if(response.trim() === "success") {
                    // Redirect to login page or show success message
                    alert("Signup successful! Please log in.");
                    window.location.href = "login.php";
                } else {
                    // Parse JSON response
                    var errors = JSON.parse(response);
                    // Display error messages
                    if(errors['password']) {
                        $('.password-error').html(errors['password']);
                    } else {
                        $('.error-msg').html(response);
                    }
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX errors
                console.error(xhr.responseText);
            }
        });
    });
});

// ----------------- Log OUT -----------------
// Wait for the DOM to be ready
$(document).ready(function() {
    // Attach a click event handler to the logout button
    $('.logout-btn').click(function() {
        // Perform an AJAX request to the logout PHP script
        $.ajax({
            url: 'logout.php',
            method: 'POST',
            success: function(response) {
                // Redirect to the login page after successful logout
                window.location.href = 'login.php';
            },
            error: function(xhr, status, error) {
                // Handle error if logout fails
                console.error('Logout failed:', error);
            }
        });
    });
});




