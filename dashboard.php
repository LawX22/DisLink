<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect the user to the login page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisLink</title>
    <link rel="icon" type="image/x-icon" href="Assets/logo.png"/>
    <link rel="stylesheet" href="./css/dashboard-style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/get-post.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
<div class="header">
    <div class="header_Left">
        <div class="logo">
            <img src="Assets/logo.png" alt="">
        </div>
        <h2>DisLink</h2>
    </div>

    <div class="header_Center"></div>

    <div class="header_Right">
        <div class="search_bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search" style="font-size: 15px;"></i></button>
        </div>
        <div class="messenger_icon">
            <i class="fab fa-facebook-messenger"></i>
        </div>
    </div>

</div>
<div class="main-container">
    <div class="workspace-column">
        <div class="posting">
            <div class="posting-add">
                <?php if(isset($_SESSION['profile_picture'])): ?>
                    <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile">
                <?php endif; ?>
                <div class="post-fnt">
                    <button id="create-post-btn">CREATE POST</button>
                </div>
            </div>
        </div>

        <!-- Popup content -->
        <div class="popup" id="postpopup">
            <span class="close-icon" onclick="closePopup()">&#10006;</span>
            <div class="post-profile">
                <?php if(isset($_SESSION['profile_picture'])): ?>
                    <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile">
                <?php endif; ?>
            </div>
            <div class="post-username">
                <p><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>
            </div>
            <div class="popup-content">
                    <form id="myMind">
                        <textarea class="popup-textarea" name="content" placeholder="What's on your mind? <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?>" oninput="autoExpand(this)"></textarea>
                    <div class="upload-img">
                        <label for="postImage" class="upload-label">
                            <span>Upload Image</span>
                            <input type="file" id="postImage" name="image" accept="image/*" style="display: none;">
                        </label>
                    </div>
                    <div class="popup-btns">
                        <button class="popup-btn">Post</button>
                    </div>
                    </form>
            </div>
        </div>
        <!-- Overlay -->
        <div class="overlay" id="overlay"></div>
        <div class="channel">
            <div class="text-channel">
                <div class="left"> <i class="fa-solid fa-angle-down"></i> </div>
                <div class="middle"> <p>TEXT CHANNELS</p> </div>
                <div class="right"> <i class='bx bx-plus'></i> </div>
                <div class="dropdown-content">
                    <a> <i class='bx bx-hash' style = "font-size: 4vh;"></i> General</a>
                    <a> <i class='bx bx-hash' style = "font-size: 4vh;"></i> Dropdown Item 2</a>
                    <a> <i class='bx bx-hash' style = "font-size: 4vh;"></i> Dropdown Item 3</a>
                </div>
            </div>
            <div class="bottom-channel">
                <div class="profile">
                    <div class="profile_container" onclick="openProfileMenu()">
                        <?php if(isset($_SESSION['profile_picture'])): ?>
                            <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile">
                        <?php endif; ?>
                        <div class="caret">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>
                    <section class="userMenu_Popup" id="menuPopup">
                        <div class="uMP">
                            <div class="upmcU _changeprofile">
                                <div class="upmcU_right">
                                        <i class='bx bxs-user-circle'></i>
                                    </div>
                                    <div class="upmcU_left" onclick="changeProfilePopup()">Change Profile</div>
                                </div>

                               <!-- Change Profile Popup -->
                                <div id="changeprofilepopup" class="changeprofilepopup">
                                    <!-- Content of the popup goes here -->
                                    <h3>User Profile</h3>
                                    <div class="change">
                                        <div class="change-left">
                                        <div class="change-profile">
                                                <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile Picture">
                                            </div>
                                            <div class="upload-img1">
                                                    <label for="postImage" class="upload-label">
                                                        <span>Change Profile</span>
                                                        <input type="file" id="postImage" name="postImage" accept="image/*" style="display: none;">
                                                    </label>
                                            </div>
                                        </div>
                                        <div class="change-right">
                                            <div class="profile-info">
                                                        <label for="firstname">First Name:</label>
                                                        <input type="text" id="firstname" name="firstname" value="<?php echo $_SESSION['firstname']; ?>">
                                                        <label for="lastname">Last Name:</label>
                                                        <input type="text" id="lastname" name="lastname" value="<?php echo $_SESSION['lastname']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <button class="btn-updateprofile" id="updateButton" onclick="updateProfile()">Update</button>
                                    <span class="close-icon" onclick="closePopup()">&#10006;</span>
                                </div>
                            <div class="upmcU _settings">
                                <div class="upmcU_right">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <div class="upmcU_left">Settings & privacy</div>
                            </div>
                            <div class="upmcU _giveFeedback">
                                <div class="upmcU_right">
                                    <i class='bx bxs-comment-error'></i>
                                </div>
                                <div class="upmcU_left">Give Feedback</div>
                            </div>
                            <a class="logout-btn" id="logout">
                                <div class="upmcU_right">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </div>
                                <div class="upmcU_left">Log Out</div>
                            </a>
                        </div>
                    </section>
                </div>
                <div class="user-name">
                    <p><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>
                </div>

                <div class="functions">
                    <div>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div>
                        <i class="fa-solid fa-bell"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="posted-column">
        <div class="post-box">
        <!-- Add your post boxes or content here -->
        <div id="ContentGet">
            
        <!-- POST DIPLAY -->
        <div class="posted">
                <div v-for="post in contents" :key="post.id" class="post-container">
                    <div class="post">
                        <div class="post-header">
                            <div class="post-user-profile">
                            <?php if(isset($_SESSION['profile_picture'])): ?>
                                <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile">
                            <?php endif; ?>
                            </div>
                            <div class="post-user-name">
                                <p><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>
                                <label>{{ post.created_at}}</label>
                            </div>
                        </div>
                        <div class="btn-cta-post">
                            <button>Edit</button>
                            <button @click="DeletePost(post.id)">Delete</button>
                        </div>
                        <div class="caption">
                            <label>{{ post.content }}</label>
                        </div>
                        <div class="post-img">
                            <img :src="post.image" alt="" width="575" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- POST DISPLAY END -->
    </div>
    <div class="friends-column">
        <div class="friends-header">
            <a class="fl-route" href="friends-list.php">
                <div class="add-friends">
                    <i class='bx bxs-user-plus bx-tada'></i>
                </div>
            </a>
            <div class="friends-title">
                <h1>Friends List</h1>
            </div>
        </div>
        <div class="friend-count-container">
            You are following <span class="friend-count">0</span> friends
        </div>
        <div class="display-friends">
            <!-- Friends list will be displayed here -->
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/post.js"></script>
<script src="./js/main.js"></script>
<script src="./js/script.js"></script>
<script src="./js/update-profile.js"></script>
</body>
</html>
