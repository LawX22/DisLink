
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


// Function to fetch accounts
function fetchAccounts() {
    var userEmail = "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>";
    
    $.ajax({
        type: 'GET',
        url: 'fetch_accounts.php',
        data: { userEmail: userEmail }, 
        dataType: 'json',
        success: function(response) {
            $('.flcr_container').empty(); 
            response.forEach(function(account) {
                var profile = $('<div>').addClass('user_follow').attr('data-user-id', account.id); 
                var profileImg = $('<img>').attr('src', account.profile_picture).attr('alt', 'Profile Picture');
                var profileInfo = $('<div>').addClass('uf_info');
                var profileName = $('<h3>').text(account.firstname + ' ' + account.lastname);
                var followBtn = $('<button>').addClass('followBtn').text('Follow');
                var removeBtn = $('<button>').addClass('removeBtn').text('Delete');

                profileInfo.append(profileName, followBtn, removeBtn);
                profile.append(profileImg, profileInfo);
                $('.flcr_container').append(profile);
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('An error occurred while fetching accounts.');
        }
    });
}

// Call fetchAccounts
fetchAccounts();

// Follow Button Click Event
$(document).on('click', '.followBtn', function() {
    var friendId = $(this).closest('.user_follow').attr('data-user-id');

    $.ajax({
        type: 'POST',
        url: 'follow.php',
        data: { friendId: friendId },
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message);
                fetchAccounts();
            } else {
                alert(response.message);
            }
        },            
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('An error occurred while following');
        }
    });
});


$(document).ready(function(){
    // Function to fetch friends and display them
    function fetchFriends() {
        $.ajax({
            type: 'GET',
            url: 'fetch-friends.php',
            success: function(response){
                // Parse JSON response
                var data = JSON.parse(response);
                var friends = data.friends;
                var numFriends = data.numFriends;

                // Clear existing content
                $('.display-friends').empty();

                // Display the count of friends
                $('.friend-count').text(numFriends);

                // Append each friend to the display
                friends.forEach(function(friend) {
                    var profilePicture = friend.profile_picture ? friend.profile_picture : 'default-profile-picture.png'; // Default profile picture if not available
                    var fullName = friend.firstname + ' ' + friend.lastname;
                    $('.display-friends').append('<div class="friend-profile"><img src="' + profilePicture + '" alt="' + fullName + '"><div class="friend-name">' + fullName + '</div></div>');
                });
            },
            error: function(xhr, status, error) {
                // Handle AJAX errors
                console.error(xhr.responseText);
            }
        });
    }
    
    // Call fetchFriends function when the page loads
    fetchFriends();
});


