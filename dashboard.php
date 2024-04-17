<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	<link rel="stylesheet" href="./css/dashboard-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
<div class="header">
        <div class="header_Left">
            <h2>DisLink</h2>
        </div>

        <div class="header_Center"></div>

        <div class="header_Right">
            <div>
                <i class="fa-solid fa-plus"></i>
            </div>
            <div>
                <i class="fa-brands fa-facebook-messenger"></i>
            </div>
            <div>
                <i class="fa-solid fa-bell"></i>
            </div>
            <div class="profile_container" onclick="openProfileMenu()">
                <img src="Assets/YENZ.png" alt="Profile">
                <div class="caret">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
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
    <div class="main-container">
    <div class="workspace-column">
        <h1>Workspace</h1>
        <div class="posting">
        <div class="posting-add">
                <img src="Assets/YENZ.png" alt="">
                <div class="text-box">
                    <p>Pag post DIHA!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="posted-column">
        <h1>Posted Content</h1>
        <div class="post-box">
        </div>
        <div class="post-box">
        </div>
        <div class="post-box">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FBMPilipinas%2Fvideos%2F405560655595520%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <div class="post-box">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FBMPilipinas%2Fvideos%2F405560655595520%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <div class="post-box">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FBMPilipinas%2Fvideos%2F405560655595520%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        </div>
    </div>
    <div class="friends-column">
        <div class="friends-list">
            <h1>Friends List</h1>
            <div class="online">
                <p>Online -- </p>
                <div class="online-count">
                    <p>3</p>
                </div>
            </div>
            <div class="add">
                <img src="Assets/YENZ.png" alt="">
                <div class="name">
                    <p>Lawrenz Xavier Carisusa</p>
                </div>
            </div>
            <div class="add">
                <img src="Assets/YENZ.png" alt="">
                <div class="name">
                    <p>Xavier Carisusa</p>
                </div>
            </div>
            <div class="add">
                <img src="Assets/YENZ.png" alt="">
                <div class="name">
                    <p>Yenz</p>
                </div>
            </div>
        </div>
    </div>
    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
