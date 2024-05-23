<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Facenote</title>
</head>
<body>
    <style>

        body {
            font-family: tahoma;
            background-color: #e9ebee;
        }

        #bar{
            height: 100px;
            background-color: #3c5899;
            color: #d9dfeb;
            padding: 4px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            
        }

        #signup {
            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;
        }

        #login-card {
            width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #text {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #ccc;
            padding: 4px;
            font-size: 14px;
        }

        #login-button {
            width: 300px;
            height: 40px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color: #3c5899;
            color: white;
        }

    </style>
    
    <div id="bar">
        <div style="font-size: 40px; width: 50%; float: left;">Facenote</div>
        <div id="signup">Signup</div>
    </div>

    <div id="login-card">

        Log in to Facenote
        <br><br>

        <input type="text" id="text" placeholder="Email"><br><br>
        <input type="password" id="text" placeholder="Password"><br><br>
        <input type="submit" id="login-button" value="Log In"><br><br><br>

    </div>

</body>
</html>