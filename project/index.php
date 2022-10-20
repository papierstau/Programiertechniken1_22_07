<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Erste Seite</title>
</head>
<body>
    <!-- Mit dem Formular werden die "Daten" strukturiert -->
    <!-- die "action" wird über den Submit-Button ausgelöst -->
    <!-- method gibt an ob POST oder GET für den HTTP-Request verwendet wird -->
    <form action="inc/insert.php" method="POST">
        <label for="userName">Benutzername</label>
        <input type="text" name="userName">
        <label for="userEmail">Emailadresse</label>
        <input type="email" name="userEmail">
        <input type="submit" value="Absenden">
    </form>
    
</body>
</html>