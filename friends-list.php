<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisLink</title>
    <link rel="icon" type="image/x-icon" href="Assets/logo.png"/>
	<link rel="stylesheet" href="./css/friends-list.css">
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
        <div class="left-container">
            <div class="friends-header">
                <a class = "fl-route" href="dashboard.php">
                <div class="back-btn">
                    <i class='bx bx-arrow-back bx-tada' ></i>
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
            <div class="bottom-channel">
                <div class="profile">
                    <div class="profile_container" onclick="openProfileMenu()">
                            <img src="Assets/YENZ.png" alt="Profile">
                            <div class="caret">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                    </div>
                    <section class="userMenu_Popup" id="menuPopup">
                    <div class="uMP">
                        <div class="upmcU _settings">
                            <div class="upmcU_right">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <div class="upmcU_left">Settings & privacy</div>
                        </div>
                        <div class="upmcU _helpSupport">
                            <div class="upmcU_right">
                                <i class='bx bxs-help-circle'></i>
                            </div>
                            <div class="upmcU_left">Help & support</div>
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
                    <p>Lawrenz Xavier Carisusa</p>
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
        <div class="right-container">
            <div class="rc-header">
            <h1>LOOKING FOR FRIENDS?</h1>
            </div>
            <div class="flcr_container" data-user-id="<?php echo $account['id']; ?>">
               
                <!-- USER PROFILES WILL BE DISPLAYED HERE THROUGH AJAX -->
            </div>
        </div>
    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
