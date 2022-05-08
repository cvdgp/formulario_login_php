<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    
    <main>
        <header class="header">
            <h1>Formulario de acceso</h1>
        </header>
        <form action="assets/php/conectionbbdd.php" method="post" class="form_log">
            <label for="inp_User"> User</label>
            <input type="text" name="inp_User" id="inp_User">
            <label for="inp_password"> password</label>
            <input type="password" name="inp_password" id="inp_password">
            <input type="submit" value="Log" name="log" id="log">
        </form>
    </main>
    <footer></footer>
</body>
</html>