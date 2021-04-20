<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $username_count = strlen($username);
    $password_count = strlen($password);
    $x = false;

    if ($username == "") {
        echo "username tidak boleh kosong<br>";
        $x = true;
    }

    if ($username_count > 7) {
        echo "username tidak boleh lebih dari 7 karakter atau huruf<br>";
        $x = true;
    }

    if (!preg_match("/[A-Z]/", $password)) {
        echo "password harus menggunakan huruf kapital<br>";
        $x = true;
    }

    if (!preg_match("/[a-z]/", $password)) {
        echo "password harus menggunakan huruf kecil<br>";
        $x = true;
    }

    if (!preg_match("/[^a-zA-Z\d]/", $password)) {
        echo "password harus menggunakan karakter spesial<br>";
        $x = true;
    }

    if (!preg_match("/[0-9]/", $password)) {
        echo "password harus menggunakan digit angka<br>";
        $x = true;
    }

    if ($password_count < 10) {
        echo "password harus lebih dari 10 karakter<br>";
        $x = true;
    }

    if ($x == false) {
        echo "berhasil";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Modul 2</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>

    </form>
</body>

</html>