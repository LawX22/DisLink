document.addEventListener("DOMContentLoaded", function() {
    var bellIcon = document.getElementById("notify");
    var notificationPopup = document.getElementById("notipopup");

    bellIcon.addEventListener("click", function() {
        notificationPopup.style.display = "block";
    });

    document.addEventListener("click", function(event) {
        if (!notificationPopup.contains(event.target) && event.target !== bellIcon) {
            notificationPopup.style.display = "none";
        }
    });
});


