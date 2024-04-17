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
