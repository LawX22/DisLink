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
                <div class="post-fnt">
                    <button>CREATE POST</button>
                </div>
            </div>
        </div>
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
    </div>
    </div>
    <div class="posted-column">
        <h1>Posted Content</h1>
        <div class="post-box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/LD1SHJ_PHqk?si=phE-ATlN9EU3Pxaf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="post-box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/LzrbTQBKRKg?si=tKDUn5IOO5YZ7Ymo&amp;start=91" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="post-box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/c1kkxtAoIeI?si=h_Vpxopof7935y7a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="post-box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5id1HFtoIc8?si=5WMQZ9EN-EvAJJBH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="post-box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yjFCI3eG-D4?si=sT8V4VbDXl8OGDgD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        </div>
    </div>
    <div class="friends-column">
        <div class="friends-header">
            <a class = "fl-route" href="friends-list.php">
            <div class="add-friends">
            <i class='bx bxs-user-plus bx-tada'></i>
            </div>
            </a>
            <div class="friends-title">
            <h1>Friends List</h1>
            </div>
        </div>
        <div class="friends-list">
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
    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
