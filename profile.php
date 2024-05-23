<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile | Facenote </title>
</head>
<style>
    body{
        font-family: tahoma;
        background-color: #e9ebee;
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
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

</style>
<body>
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
</body>
</html>