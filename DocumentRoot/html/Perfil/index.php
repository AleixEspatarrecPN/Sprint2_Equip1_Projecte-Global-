<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<header class="header">
    <img src="../../assets/logo.svg"/>
    <h1>PymeShield</h1>
    <a class="button-user" href="../Perfil/index.php"><i class="fa fa-user"></i></a>
</header>
<nav class="navbar">
    <a href="../Home"><i class="fa fa-home"></i></a>
    <a href="../Usuaris">Llistat</a>
    <a href="#">Qüestionari</a>
    <a href="#">Informes</a>
</nav>
<div id="perfil-container">
    <div id="basic-info">
        <img src="../../demo_img/bot.png" alt="profile image" id="profile-img">
        <span id="name">name</span>
        <span id="last-name">last name</span>
        <span id="dni">dni</span>
        <span id="empresa">empresa</span>
    </div>
    <div id="full-info">
        <div id="dades-container">
            <h3>DADES</h3>
            <div id="username-container">
                <div class="input-container">
                    <label for="username">Nom d'usuari</label>
                    <input type="text" name="username" id="username" value="my username" disabled>
                </div>
                <button id="edit-username" class="button-edit"><i class="fa fa-pencil"></i></button>
                <button id="cancel-username" class="button-cancel"><i class="fa fa-xmark"></i></button>
            </div>
            <div id="email-container">
                <div class="input-container">
                    <label for="email">Correu electrònic</label>
                    <input type="email" name="email" id="email" value="myemail@from.me" disabled>
                </div>
                <button id="edit-email" class="button-edit"><i class="fa fa-pencil"></i></button>
                <button id="cancel-email" class="button-cancel"><i class="fa fa-xmark"></i></button>
            </div>
            <div id="phone-container">
                <div class="input-container">
                    <label for="phone">Telèfon</label>
                    <input type="text" name="phone" id="phone" value="643543456" disabled>
                </div>
                <button id="edit-phone" class="button-edit"><i class="fa fa-pencil"></i></button>
                <button id="cancel-phone" class="button-cancel"><i class="fa fa-xmark"></i></button>
            </div>
            <button id="change-data" class="button-change">Guardar canvis</button>
        </div>

        <div id="password-container">
            <h3>CANVIAR CONTRASENYA</h3>
            <div id="original-password-container">
                <div class="input-container">
                    <label for="original-password">Contrasenya original</label>
                    <input type="password" name="original-password" id="original-password">
                </div>
            </div>
            <div id="new-password-container">
                <div class="input-container">
                    <label for="new-password">Nova contrasenya</label>
                    <input type="password" name="new-password" id="new-password">
                </div>
            </div>
            <div id="confirm-password-container">
                <div class="input-container">
                    <label for="confirm-password">Confirmació de la nova contrasenya</label>
                    <input type="password" name="confirm-password" id="confirm-password">
                </div>
            </div>
            <button id="change-password" class="button-change">Canvia la contrasenya</button>
        </div>

    </div>
</div>
<script src="./script.js"></script>
</body>
</html>