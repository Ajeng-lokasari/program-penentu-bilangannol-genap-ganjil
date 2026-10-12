<!DOCTYPE html>
<html>
<head>
    <title>Penentu Bilangan</title>
</head>
<body>

<h2>Penentuan bilangan (nol/genap/ganjil)</h2>

<form method="post">
    <label>Masukkan Bilangan :</label>
    <input type="int" name="bil" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>


<?php

if (isset($_POST['submit'])) {

    $bil = $_POST['bil'];
    
    if ($bil == 0) {
       echo "$bil adalah Bilangan nol";
    } 

    elseif ($bil % 2 == 0) {
        echo "$bil adalah bilangan genap";
    } else {
       echo "$bil adalah bilangan ganjil";
    }
    
}

?>

</body>
</html>