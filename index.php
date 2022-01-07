<?php

require("_connect.php");
require("_func.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lText</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/homepage.css">
</head>

<body class="bg-dark">
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

    <section class="container p-4 mt-4 rounded shadow-lg text-light" id="content">
        <div class="row">
            <div class="col-9">
                <form id="submitText">
                    <label for="txtInput" class="form-label">New Text Save:</label>
                    <textarea class="form-control" id="txtInput" name="txtInput" rows="5" required></textarea>
                    <hr>

                    <div class="mb-2">
                        <label for="cmbPrivacy" class="form-label">Paste visibility</label>
                        <select class="form-select" id="cmbTextType" name="cmbTextType">
                            <option selected>Select</option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="cmbSeconds" class="form-label">Text Expiration:</label>
                        <select class="form-select" id="cmbTextExpiration" name="cmbTextExpiration">
                            <option selected>Time</option>
                            <option value="none">Never</option>
                            <option value="3600">1 Hour</option>
                            <option value="7200">2 Hour</option>
                            <option value="10800">3 Hour</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="cmbHighlight" class="form-label">Highlight:</label>
                        <select class="form-select" id="cmbHighlight" name="cmbHighlight">
                            <option value="txt">None</option>
                            <?php

                                foreach (getLangs() as $key => $value)
                                {
                                    echo '<option value="' . $key . '">' . strip_tags($value) . '</option>';
                                }

                            ?>

                        </select>
                    </div>

                    <hr>

                    <button class="btn btn-dark p-2 mt-3 rounded shadow-lg" type="submit">Submit Text Save</button>

                </form>
            </div>

            <div class="col-3">
                <h3>Public Text Saves</h3>
                <ul>
                    <?php
                        $SQL= "SELECT * FROM `texts` WHERE `visibility` = '0' ORDER BY `texts`.`TIMESTAMP` DESC LIMIT 10";

                        $query = mysqli_query($connect, $SQL);
                
                        if (mysqli_num_rows($query) !=0)
                        {
                            while ($textSave = mysqli_fetch_assoc($query))
                            {
                                echo '<li><a href="./text/' . $textSave['textUUID'] . '">' .$textSave['textUUID'] .  '</a></li>';
                            }
                        }

                    ?>
                </ul>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="./js/homepage.js"></script>
</body>

</html>