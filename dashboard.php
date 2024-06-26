<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect the user to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Get the user ID from the session
// $userId = $_SESSION['user_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisLink</title>
    <link rel="icon" type="image/x-icon" href="Assets/logo.png" />
    <link rel="stylesheet" href="./css/dashboard-style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/get-post.js" defer></script>
    <script src="js/get-notif.js" defer></script>
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
                    <?php if (isset($_SESSION['profile_picture'])) : ?>
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
                    <?php if (isset($_SESSION['profile_picture'])) : ?>
                        <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile">
                    <?php endif; ?>
                </div>
                <div class="post-username">
                    <p><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>
                </div>
                <div class="popup-content">
                    <form id="myMind">
                        <textarea class="popup-textarea" name="content" placeholder="What's on your mind? <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?>" oninput="autoExpand(this)"></textarea>
                        <div class="upload-img-container">
                            <img id="imagePreview" src="#" alt="Image Preview" style="display: none;">
                        </div>
                        <label for="postImage" class="upload-label">
                            <span>Upload Image</span>
                            <input type="file" id="postImage" name="image[]" accept="image/*" style="display: none;" onchange="previewImage(this)" multiple>
                        </label>
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
                    <div class="middle">
                        <p>TEXT CHANNELS</p>
                    </div>
                    <div class="right"> <i class='bx bx-plus'></i> </div>
                    <div class="dropdown-content">
                        <a> <i class='bx bx-hash' style="font-size: 4vh;"></i> General</a>
                        <a> <i class='bx bx-hash' style="font-size: 4vh;"></i> Dropdown Item 2</a>
                        <a> <i class='bx bx-hash' style="font-size: 4vh;"></i> Dropdown Item 3</a>
                    </div>
                </div>
                <div class="bottom-channel">
                    <div class="profile">
                        <div class="profile_container" onclick="openProfileMenu()">
                            <?php if (isset($_SESSION['profile_picture'])) : ?>
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
                                                <label for="postImage" class="upload-label1">
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

                    <!-- NOTICE ME SENPAI -->
                    <div id="notifa">
                        <div class="functions">
                            <div>
                                <i class="fa-solid fa-plus"></i>
                            </div>

                            <div class="noti-bell">
                                <i class="fa-solid fa-bell" id="notify" @click="Readme()"></i>
                                <span v-if="nutt > 0" style="background-color: red;">{{ nutt }}</span>
                            </div>

                        </div>
                        <div class="notificationpopup" id="notipopup">
                            <div class="popup-content">
                                <div v-for="item in notifff" :key="item.id">
                                    <div class="notifs">
                                        <span class="noti-profile"><img :src="item.profile_picture" alt="Profile Picture"></span>
                                        <span class="noti-text">
                                            <p><strong>{{item.firstname}}</strong> Liked your post</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="posted-column">
            <div class="post-box">
                <!-- Add your post boxes or content here -->

                <!-- POST DIPLAY START-->
                <div id="ContentGet">
                    <div class="posted">
                        <div v-for="post in contents" :key="post.id" class="post-container">
                            <div class="post">
                                <div class="post-header">
                                    <div class="post-user-profile">
                                        <img :src="post.profile_picture" alt="Profile">
                                    </div>
                                    <div class="post-user-name">
                                        <p>{{ post.firstname }} {{ post.lastname }}</p>
                                        <label>{{ post.created_at}}</label>
                                    </div>
                                </div>

                                    <template v-if="post.user_id == curuser">
                                            <div class="btn-cta-post">
                                                <i class="fas fa-edit" @click="EditContent(post.id)"></i>
                                                <i class="fas fa-trash-alt" @click="DeletePost(post.id)"></i>
                                            </div>
                                    </template>
                                    
                                <div class="caption">
                                    <label v-if="!post.mei">{{ post.content }}</label>
                                    <div v-else>
                                        <input v-model="post.mel" class="large-input">
                                        <div class="btn-cta-save">
                                            <i class="fas fa-edit" @click="Save(post)"></i>
                                            <i class="fa fa-times" @click="Cancel(post)"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <div v-if="post.image && post.image.length > 0">
                                        <template v-for="(iamimage, index) in post.image" :key="index">
                                            <div class="image-post">
                                                <img v-if="iamimage" :src="iamimage" >
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <div class="actions-container">


                                    <!-- I LIKE TURTLES -->
                                    <div class="like-container">
                                        <div v-if="!post.likes_user_ids.includes(curuser)" class="like-icon">
                                            <i class='bx bxs-like' @click="LikePP(post.id, curuser)"></i>
                                        </div>
                                        <div v-if="post.likes_user_ids.includes(curuser)" class="like-icon" style="color: blue;">
                                            <i class='bx bxs-like' @click="UnlikePP(post.id, curuser)"></i>
                                        </div>
                                        <span>{{ post.likes_count }}</span>
                                    </div>

                                    <!-- COMMENT SECTION -->
                                    <div class="comment-popup-container">
                                        <div class="comment-container" @click="FetchMeth(post.id)" onclick="togglePopup('comment-popup-1')">
                                            <div class="comment-icon"> <i class='bx bxs-comment-dots bx-flip-horizontal'></i> </div>
                                        </div>
                                        Comment
                                        <div id="comment-popup-1" class="comment-popup">
                                            Your comment popup content here...
                                            <div v-for="meth in comments" :key="meth.id" class="comment-display">
                                                <img :src="meth.profile_picture" alt="Profile">
                                                <div class="comment-text">
                                                
                                                <div class="username-comment">
                                                    <p>{{ post.firstname }} {{ post.lastname }}</p>
                                                </div>
                                                
                                                    <template v-if="meth.user_id == curuser">
                                                    <div class="comment-edit">
                                                        <i class="fas fa-edit icon" @click="ChangeMyWill(meth.id)"></i>
                                                        <i class="fas fa-trash-alt icon" @click="StopLife(meth.id)"></i>
                                                    </div>

                                                    </template>

                                                    <p class="text-display" v-if="!meth.cmei">{{ meth.comment_text }}</p>
                                                    <div v-else>
                                                        <input v-model="meth.cmel">
                                                        <div class="comment-confirm">
                                                                <i class="fas fa-save icon" @click="ChangeLife(meth)"></i>
                                                                <i class="fas fa-times icon" @click="CancelMyLife(meth)"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popup-overlay" onclick="togglePopup('comment-popup-1')"></div>
                                    </div>
                                    <div class="share-container">
                                        <div class="share-icon"> <i class='bx bxs-share bx-flip-horizontal'></i> </div>
                                        Share
                                    </div>
                                </div>

                                <!-- COMMENT BOX -->
                                <div class="comment">
                                    <div class="comment-profile">
                                        <?php if (isset($_SESSION['profile_picture'])) : ?>
                                            <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile">
                                        <?php endif; ?>
                                    </div>
                                    <div class="comment-inputs">
                                        <form @submit.prevent="HandleBar" id="myFreeWill">
                                            <input type="hidden" name="postid" :value="post.id">
                                            <input type="text" name="mentmsg" placeholder="Write a comment...">
                                            <div class="comment-send">
                                                <button><i class="fas fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
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
        <script src="./js/noti-popup.js"></script>



</body>

</html>