<html lang="en">

<head>
    <title>The Vault | Project Gideon | Max Azarcon | Gamer, Geek, Web Designer</title>
    <?php
        include('components/styles.php');
        include('components/scripts.php');
    ?>
</head>

<body>
    <div id="content">
        <div id="content-wrap">
            <div id="loginwrap">
                <div id="login">
                    <h2>Vault Login</h2>
                </div>
                <form id="vault-login" action="" method="post">
                    <input type="text" id="username" name="username" class="login-field" placeholder="USERNAME">
                    <input type="password" id="password" name="password" class="login-field" placeholder="PASSWORD">
                    <button id="loginbutton" type="submit" onClick="verify();">Enter</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>