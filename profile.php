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
        margin-top: -210px;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
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

    <!-- cover -->
    <div style="width: 800px; margin: auto; background-color:black;">
        <div style="background-color: white; text-align: center; color: #405d9b;">
            <img src="images/mountain.jpg" alt="" style="width: 100%;"><br> 
            <div id="bg-content">
                <img src="images/selfie.jpg" alt="" id="profile-pic"><br>
                <span style="color: white; font-size: 24px; ">Mary Watson</span>
            </div>

            <br>
            Timeline About Friends Photos Settings
        </div>
    </div>
</body>
</html>