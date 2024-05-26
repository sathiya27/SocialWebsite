<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile | Facenote </title>
</head>
<style>
    body{
        font-family: tahoma;
        background-color: #d0d8e4;
    }
    #blue-bar{
        height: 50px;
        background-color: #405d9b;
        color: #d9dfeb;
    }
    #search-box {
        width: 400px;
        height: 20px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        background-image: url('images/search.png');
        background-repeat: no-repeat;
        background-position: right;
    }

    #top-bar {
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 4px 10px;

    }

    #top-bar-1 {
        width: 65%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #profile-pic {
        width: 20%;
        border-radius: 50%;
        border: solid 3px white;
    }

    #bg-content {
        margin-top: -25%;
        width: 100%;
    }

    #profile-nav {
        list-style: none;
        display: flex;
        justify-content: space-evenly;
        padding: 2px 0;
    }

    #profile-content {
        display: flex;
    }

    #friend-list {
        flex: 1;
        background-color: white;
        color: #aaa;
        padding: 8px;
        min-height: 500px;
    }

    #post-list {
        flex: 2.5;
        padding-left: 13px;
    }

    #friends_bar {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #friends_bar li img{
        width: 75px;
        float: left;
        margin: 8px;
    }

    #friends_bar li {
        clear: both;
        font-size: 15px;
        font-weight: bold;
        color: #405d9b;
    }

    #friends_bar .users {
        color: #aaa;
        font-size: 10px;
    }

    #post-list textarea {
        width: 100%;
        border: none;
        font-family: tahoma;
        font-size: 14px;
        height: 70px;
    }

    #post-button {
        float: right;
        background-color: #405d9b;
        border: none;
        color: white;
        padding: 4px;
        font-size: 14px;
        border-radius: 4px;
        width: 50px;

    }

</style>
<body>
    <!-- Top Bar -->
    <div id="blue-bar">
        <div  id="top-bar">
            <div id="top-bar-1">
                Facenote
                <input type="text" id="search-box" placeholder="Search... ">
            </div>
            <div>
                <img src="images/selfie.jpg" alt="" style="width: 42px; border-radius: 20px;">
            </div>
        </div>
    </div>

    <div style="width: 65%; margin: auto;">
        <!-- cover -->
        <div style="background-color: white; text-align: center; color: #405d9b;">
            <img src="images/mountain.jpg" alt="" style="width: 100%;"><br> 
            <div id="bg-content">
                <img src="images/selfie.jpg" alt="" id="profile-pic"><br>
                <span style="color: white; font-size: 24px;">Mary Watson</span>
            </div>
            <ul id="profile-nav">
                <li>Timeline</li>
                <li>About</li>
                <li>Friends</li>
                <li>Photos</li>
                <li>Settings</li>
            </ul>
        </div>

        <!-- Profile Content -->
        <div id="profile-content">
            <!-- Friends area -->
            <div id="friend-list">
                <Span>Friends</Span><br>

                <ul id="friends_bar">
                    <li>
                        <img src="images/user1.jpg" alt="">
                        <br>
                        Bernt Ash Rupert <br>
                        <span class="users">First User</span>
                    </li>
                    <li>
                        <img src="images/user2.jpg" alt="">
                        <br>
                        Robert Downey Jr <br>
                        <span class="users">Second User</span>
                    </li>
                    <li>
                        <img src="images/user3.jpg" alt="">
                        <br>
                        Tammmy HideinStone <br>
                        <span class="users">Third User</span>
                    </li>
                    <li>
                        <img src="images/user4.jpg" alt="">
                        <br>
                        Tommas shellby shopee <br>
                        <span class="users">Fourth User</span>
                    </li>
                </ul>

            </div>

            <!-- Posts area -->
            <div id="post-list">

                <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
                    <textarea name="" placeholder="Whats on your mind?"></textarea>
                    <input type="submit" id="post-button" value="Post"><br>

                </div>

            </div>
        </div>
    </div>

</body>
</html>