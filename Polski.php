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
            echo '<main>';
            echo '<div style="text-align: center;">';
            echo '<h1>Język Polski</h1>';
            $login = mysqli_connect('localhost', 'root', '', 'szkola');
            $result = mysqli_query($login, 'SELECT ID, Imie, Nazwisko, Ocena FROM uczniowie');
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div id='blok'> Nr: " . $row['ID'] .
                "<br>" . " imie: " . $row['Imie'] .
                "<br>" . " nazwisko: " . $row['Nazwisko'] .
                "<br>" . " ocena: " . $row['Ocena'] . "</div>";
            }
            echo '</div>';
            echo '</main>';
            ?>
</main>
<nav>
    <ul>
        <li><a href="index.php">Matematyka</a></li>
        <li><a href="polski.php">J. Polski</a></li>
        <li>J. Angielski</li>

</nav>
    <footer>
        <a href="zsz.bobowa.pl">zsz.bobowa.pl</link>
        </footer>

</body>
</html>