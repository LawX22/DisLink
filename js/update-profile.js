function updateProfile() {
    // Retrieve updated profile information
    var firstName = document.getElementById('firstname').value;
    var lastName = document.getElementById('lastname').value;
    var profilePicture = document.getElementById('postImage').files[0]; // Get the uploaded file

    // Create a FormData object to send the data
    var formData = new FormData();
    formData.append('firstname', firstName);
    formData.append('lastname', lastName);
    formData.append('profile_picture', profilePicture);

    // Send the updated profile information to the server using AJAX
    $.ajax({
        url: 'update_profile.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Handle the success response (if needed)
            console.log('Profile updated successfully!');
            // You can add further logic here, such as displaying a success message or updating the UI
        },
        error: function(xhr, status, error) {
            // Handle errors
            console.error('Error updating profile:', error);
            // You can add error handling logic here, such as displaying an error message
        }
    });
}
