<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Dziennik</h1>
    </header>
    <main>
<?php
$login = mysqli_connect('localhost', 'root', '', 'szkola');
$result = mysqli_query($login, 'SELECT ID, Imie, Nazwisko, Ocena FROM uczniowie');
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>" . $row['ID']  . $row['Imie'] . $row['Nazwisko']  . $row['Ocena'] . "</div>";

}
?>
</main>
    </main>
    <aside>
        <ul>
            <li>Matematyka</li>
            <li>J.Polski</li>
            <li>J.Niemiecki</li>
        </ul>
    </aside>

    <footer>
        ZSZ Bobowa
    </footer>
</body>
</html>