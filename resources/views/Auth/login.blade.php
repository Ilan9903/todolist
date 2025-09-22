<!doctype html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-Login</title>
</head>
<body>
<div id="mainButton">
    <div class="btn-text" onclick="openForm()">Sign In</div>
    <div class="modal">
        <div class="close-button" onclick="closeForm()">x</div>
        <div class="form-title">Sign In</div>
        <div class="input-group">
            <input type="text" id="name" onblur="checkInput(this)" />
            <label for="name">Username</label>
        </div>
        <div class="input-group">
            <input type="password" id="password" onblur="checkInput(this)" />
            <label for="password">Password</label>
        </div>
        <div class="form-button" onclick="closeForm()">Go</div>
    </div>
    </div>
</body>
</html>
