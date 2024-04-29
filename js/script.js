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

// Function to display the popup
function displayPopup() {
    var popup = document.getElementById("postpopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "block";
    overlay.style.display = "block";
    // Add event listener to close popup when clicked outside
    document.addEventListener("click", closePopupOutside);
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("postpopup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "none";
    overlay.style.display = "none";
    // Remove event listener
    document.removeEventListener("click", closePopupOutside);
}

// Function to close the popup when clicked outside
function closePopupOutside(event) {
    var popup = document.getElementById("postpopup");
    var overlay = document.getElementById("overlay");
    var createPostBtn = document.getElementById("create-post-btn");
    // Check if click target is outside the popup and the button
    if (!popup.contains(event.target) && event.target !== createPostBtn) {
        popup.style.display = "none";
        overlay.style.display = "none";
        // Remove event listener
        document.removeEventListener("click", closePopupOutside);
    }
}

// Adding click event listener to the button
document.getElementById("create-post-btn").addEventListener("click", displayPopup);


// Function to display the changeprofilepopup
function changeProfilePopup() {
    var popup = document.getElementById("changeprofilepopup");
    popup.style.display = "block";

    // Add event listener to close popup when clicking outside of it
    window.addEventListener("click", function(event) {
        var closeButton = document.getElementById("closeButton");
        if (event.target === closeButton) {
            popup.style.display = "none";
        }
    });
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("changeprofilepopup");
    popup.style.display = "none";
}

function openChangeProfilePopup() {
    var popup = document.getElementById("changeprofilepopup");
    popup.style.display = "block";
}

