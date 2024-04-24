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
