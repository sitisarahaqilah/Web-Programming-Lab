<?php

    $line = '';
    $f = fopen('javamember.txt', 'r');
    $cursor = -1;
    fseek($f, $cursor, SEEK_END);
    $char = fgetc($f);
    //Trim trailing newline characters in the file
    while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
    }
    //Read until the next line of the file begins or the first newline char
    while ($char !== false && $char !== "\n" && $char !== "\r") {
    //Prepend the new character
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
    }

    $arr = explode(',', $line);

    $name= $arr[0];
    $email = $arr[1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <title>JavaJam Coffee House</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="javajam.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel = "icon" type="image/x-icon" href = "https://icons-for-free.com/iconfiles/png/512/Coffee-1320568040449299331.png">
</head>

<body class>
    <div class="container">
        
        <header>
            <br><h1 class="text-center border border-dark rounded-pill bg-light">JavaJam Coffee House</h1>
        </header>    
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light fs-5">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.html"><img src = "img/javajamlogo.png" width="80" height="80"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="index.html">Home</a>
                            <a class="nav-link" href="menu.html">Menu</a>
                            <a class="nav-link" href="music.html">Music</a>
                            <a class="nav-link" href="jobs.html">Jobs</a>
                            <a class="nav-link" href="profile.php">Profile</a>
                        </div>
                      </div>
                      <a type="button" class="btn text-white" href="signup.php">sign up</a>
                      <a type="button" class="btn btn-login text-white" href="login.php">log in</a>
                      <a type="button" class="btn btn-logout text-white" href="logout.php">log out</a>
                    </div>
                  </nav>
        
    <main>
        <hr>
        <h2>JavaJam Coffee House - Member Profile</h2>
        <p>Hello, <?php echo $name; ?>! Glad to have you here.</p>

        <div class="card text-white" style="background: #bb9666; width: 70%; margin:auto; margin-top: 3%; margin-bottom: 3%;">
            <div class="card-body" >
            <p><b>Name: </b><?php echo $name; ?></p>
            <p><b>Username: </b><?php echo $email; ?></p>
            </div>
        </div>

    </main> 

        <hr>
        <footer class="container text-center font-italic"><p>Copyright &copy; 2021 JavaJam Coffee House
            <br><a href="mailto:coffee@javajam.com">coffee@javajam.com</a></p>
        </footer>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>