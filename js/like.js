function toggleLike(postId, userId) {
    console.log("Toggle like function called for post ID: ", postId);
    
    // Check if the post is liked or not
    var isLiked = $("#like-icon-" + postId).hasClass("liked");

    // Send AJAX request
    $.ajax({
        type: "POST",
        url: isLiked ? "unlike.php" : "like.php",
        data: { postId: postId, userId: userId },
        success: function(response) {
            console.log("AJAX call successful. Response: ", response);
            // Update like count
            $("#like-count-" + postId).text(response);
            // Toggle like icon class
            $("#like-icon-" + postId).toggleClass("liked");
        },
        error: function(xhr, status, error) {
            console.error("AJAX call failed: ", xhr.responseText);
        }
    });
}

