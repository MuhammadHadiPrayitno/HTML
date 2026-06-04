<?php
session_start();
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style type="text/css">
            body{
                display: flex;
                justify-content:center;
            }
        </style>
    </head>
    <body>
        <div class="border border-primary border-2 p-3 w-25 h-75 rounded bg-light">
            <form action="login.php" method="post">
            <h1>Login System</h1>
            <?php
                if(isset($_SESSION['pesan_kesalahan'])){
                    echo'<div class="alert alert-warning" role="alert">' . $_SESSION['pesan_kesalahan'] . '</div>';
                    unset($_SESSION['pesan_kesalahan']);
                }
            ?>
            <label class="form-label mt-3">
                Username
            </label>
            <input type="text" class="form-control" name="input_username"/>
            <label class="form-label mt-3">
                Password
            </label>
            <input type="password" class="form-control" name="input_password"/>
                <div class="mt-3">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="signup.html" class="btn btn-link float-end">Daftar</a>
                </div>
            </form>
        </div>
    </body>
</html>