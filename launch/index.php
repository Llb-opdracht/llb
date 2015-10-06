<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div id="container">
        <?php include "../libs/header.php"; ?>
        <?php include "../libs/navbar.php"; ?>
    <div id="content">
        <div id="login">
            <div id="log-titel">Login</div>
            <div id="log-content">
                <table>
                    <tr>
                        <td>Gebruikersnaam:</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Wachtwoord:</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="">Wachtwoord vergeten?</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input align="right" type="submit" value="Inloggen">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
        <?php include "../libs/footer.php"; ?>

</div>

</body>
</html>