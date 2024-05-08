// Function to adjust the height of workspace and friends columns dynamically
function adjustColumnsHeight() {
    const mainContainerHeight = document.querySelector('.main-container').offsetHeight;
    const headerHeight = 40; // Height of the fixed header

    const workspaceColumn = document.querySelector('.workspace-column');
    const friendsColumn = document.querySelector('.friends-column');

    workspaceColumn.style.height = mainContainerHeight - headerHeight + 'px';
    friendsColumn.style.height = mainContainerHeight - headerHeight + 'px';
}

// Call the function initially and whenever the window is resized
adjustColumnsHeight();
window.addEventListener('resize', adjustColumnsHeight);


// USER PROFILE MENU
function openProfileMenu() {
    toggleDivVisibility("menuPopup");
}

function toggleDivVisibility(divId) {
    var div = document.getElementById(divId);
    if (div.style.display === "none" || div.style.display === "") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}


// TEXT CHANNEL
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".text-channel").addEventListener("click", function() {
        this.querySelector(".dropdown-content").style.display = this.querySelector(".dropdown-content").style.display === "block" ? "none" : "block";
    });
});

// Function to close the popup when the close icon is clicked
function closePopupFromIcon() {
    var popup = document.getElementById("postpopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "none";
    overlay.style.display = "none";
}

// Function to display the popup
function displayPopup() {
    var popup = document.getElementById("postpopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "block";
    overlay.style.display = "block";
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("postpopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "none";
    overlay.style.display = "none";
}

// Adding click event listener to the button
document.getElementById("create-post-btn").addEventListener("click", displayPopup);

// Adding click event listener to the close icon
document.querySelector(".close-icon").addEventListener("click", closePopupFromIcon);

function autoExpand(textarea) {
    // Reset font size to its original value
    textarea.style.fontSize = '20px';
    
    // Calculate the ideal font size based on the textarea's scrollHeight
    const idealFontSize = Math.max(10, Math.min(20, 20 - (textarea.scrollHeight - textarea.clientHeight) / 10));
    
    // Set the font size
    textarea.style.fontSize = idealFontSize + 'px';
    
    // Set the textarea's height to fit the content
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
}




// Function to display the changeprofilepopup
function changeProfilePopup() {
    var popup = document.getElementById("changeprofilepopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "block";
    overlay.style.display = "block";
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("changeprofilepopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "none";
    overlay.style.display = "none";
}

function openChangeProfilePopup() {
    var popup = document.getElementById("changeprofilepopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "block";
    overlay.style.display = "block";
}


// Image View for Posting
function previewImage(input) {
    var preview = document.getElementById('imagePreview');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    }
}



// Comment View 
function showCommentPopup() {
    var popup = document.getElementById("comment-popup");
    popup.style.display = "block";
}

function sendComment() {
    var commentInput = document.getElementById("comment-input");
    var comment = commentInput.value;
    // Here you can implement the logic to send the comment
    console.log("Comment sent: " + comment);
    // Close the popup after sending
    var popup = document.getElementById("comment-popup");
    popup.style.display = "none";
    // Clear the input field
    commentInput.value = "";
}



