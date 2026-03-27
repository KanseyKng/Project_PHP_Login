<!DOCTYPE html>
<html>
    <head>
        <title>Form Raja</title>
    </head>
    <body>
        <h2 align="center">Input Data</h2>
        <?php
        if(isset($_GET['error'])){
            echo '<p style="color:red">Maaf username dan password Anda salah</p>';
        }
        ?>
        <form action="cekLogin.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required/><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required/><br><br>
            <label for="username">Username:</label>
            <input type="text" name="username" required/><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required/><br><br>
            <input type="submit" name="submit" value="Login"/>
        </form>




    </body>



</html>