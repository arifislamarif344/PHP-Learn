<?php
    session_start();
    $_user_id = $_SESSION['id'] ?? 0;
    if ( $_user_id ) {
        header( "location:words.php" );
        die();
    }

    include_once "function.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vocabulary Builder</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="home">
    <div class="container" id="main">

        <h1 class="maintitle">
            <i class="fas fa-language"></i> <br />My Vocabularies
        </h1>

        <div class="row navigation">
            <div class="column column-60 column-offset-20">
                <div class="formaction">
                    <a href="#" id="login">Login</a> | <a href="#" id="register">Register Account</a>
                </div>
                <div class="formc">
                    <form id="form01" method="post" action="tasks.php">
                        <h3>Login</h3>
                        <fieldset>
                            <label for="email">Email</label>
                            <input type="email" placeholder="Email Address" id="email" name="email">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Password" id="password" name="password">
                            <p style="color: red;font-weight:bold">
                                <?php
                                    $status = $_GET['status'] ?? 0;
                                    if ( $status ) {
                                        echo getStatusMessage( $status );
                                    }
                                ?>
                            </p>
                            <input class="button-primary" type="submit" value="Submit">
                            <input type="hidden" name="action" id="action" value="login">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>

</html>