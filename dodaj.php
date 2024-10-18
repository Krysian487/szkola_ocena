<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Dziennik</h1>
    </header>
    <main>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $ocena = $_POST['ocena'];
        $przedmiot = $_POST['przedmiot'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "szkola";
        $conn = new mysqli($servername, $username, $password, $dbname);
    if ($przedmiot === 'matematyka') {
        $sql = "INSERT INTO matematyka (imie, nazwisko, ocena) VALUES ('$imie', '$nazwisko', '$ocena')";
    } elseif ($przedmiot === 'polski') {
        $sql = "INSERT INTO polski (imie, nazwisko, ocena) VALUES ('$imie', '$nazwisko', '$ocena')";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Ocena dodana poprawnie";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
        <h1>Dodaj ocenę</h1>
        <form action="dodaj.php" method="POST">
            <label for="imie">Imię:</label>
            <input type="text" name="imie" id="imie" required><br>
            <br>
            <label for="nazwisko">Nazwisko:</label>
            <input type="text" name="nazwisko" id="nazwisko" required><br>
            <br>
            <label for="ocena">Ocena:</label>
            <input type="number" name="ocena" id="ocena" min="0" max="6" required><br>
            <br>
            <label for="przedmiot">Wybierz przedmiot:</label>
            <select name="przedmiot" id="przedmiot"><br>
                <option value="matematyka">Matematyka</option>
                <option value="polski">Język Polski</option>
            </select>
            <br>
            <input type="submit" value="Dodaj ocenę">
        </form>
    </main>
    <nav>
        <ul>
            <li><a href="index.php">Matematyka</a></li>
            <li><a href="polski.php">J. Polski</a></li>
            <li><a href="dodaj.php">Dodaj ocenę</a></li>
        </ul>
    </nav>
    <footer>
        <a href="zsz.bobowa.pl">zsz.bobowa.pl</a>
    </footer>
</body>
</html>