$('#myMind').submit(function(event) {
    event.preventDefault();
    const userId = localStorage.getItem('UserID');
    const formData = new FormData(this);
    formData.append('user_id', userId);
    
    $.ajax({
        url: 'post.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function() {
            location.reload();
        },
        error: function(error) {
            console.error('Error:', error);
            alert('No mind detected');
        }
    });
});