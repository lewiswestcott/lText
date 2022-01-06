<?php

    require("_func.php");

    if (!isset($_GET['textUUID']))
        header("Location: ../");

    $textUUID = strip_tags($_GET['textUUID']);

    require("_connect.php");

    $SQL = "SELECT * FROM `texts` WHERE `textUUID` = ?";
    $stmt = mysqli_prepare($connect, $SQL);
    mysqli_stmt_bind_param($stmt, 's', $textUUID);

    $stmt->execute();

    $result = $stmt->get_result();
    // return var_dump($result);

    if ($result->num_rows !== 1)
    {
        die("Invalid");
    }

    $TEXT = $result->fetch_array(MYSQLI_ASSOC);

    $stmt->close();

    //echo mb_strlen("test string", '8bit');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lText | <?= $textUUID ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="../css/vs2015.min.css">
</head>

<body class="bg-dark">
    <style>
        body {background: url('https://i.ibb.co/cJVwf84/bg-img.jpg') no-repeat center center fixed;}
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">

            <a class="navbar-brand" href="#">LText</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Reset</a>
                    </li>

                </ul>
                <span class="navbar-text">
                    lewiswestcott.co.uk
                </span>
            </div>
        </div>
    </nav>

    <section class="container text-white p-4 mt-4 rounded shadow-lg" id="content">
        <div class="row">
            <div class="col-9">
                <div class="title border-bottom">
                    <h3 class="mb-1"><?= $textUUID ?></h3>
                    <p><?= timeElapsedString($TEXT['TIMESTAMP']) ?> | <?= humanFileSize(mb_strlen($TEXT['data']))  ?> </p>
                </div>

                <pre><code class="language-html"><?= htmlspecialchars($TEXT['data']) ?></code></pre>
            </div>
            <div class="col-3">
                <h3>Public saves</h3>
                <ul>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                </ul>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="../js/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

</body>

</html>