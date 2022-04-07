<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A text saving site!">
    <meta name="author" content="Lewis Westcott">
    <title>lText</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./css/product.css" rel="stylesheet">
</head>

<body>

    <header class="site-header sticky-top ">
        <nav class="navbar navbar-light bg-dark">
            <div class="container ">
                <a class="navbar-brand mx-auto" href="#">
                    <img src="./img/ltextdark.png" alt="" width="250px">
                </a>
            </div>
        </nav>
    </header>

    <main>

        <div class="position-relative overflow-hidden p-3 text-center bg-light">
            <div class="box">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 fw-normal">Save your texts!</h1>
                    <p class="lead fw-normal">This is best way to publically save your text saves!</p>
                    <a class="btn btn-outline-secondary" href="#">View my other projects!</a>
                </div>

            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-dark me-md-3 pt-3 px-3  px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Add a text save!</h2>
                    <p class="lead">Click the button to add a new text save!</p>
                    <button type="button" class="btn btn-outline-secondary bg-light text-dark btnAddText"
                        data-bs-toggle="modal" data-bs-target="#modalTwo">Continue</a>

                </div>

            </div>
            <div class="bg-light me-md-3 pt-3 px-3  px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Public Text Saves</h2>
                    <p class="lead">Click the button to view public text saves!</p>
                    <a class="btn btn-outline-secondary bg-dark text-light" href="#">View</a>

                </div>

            </div>


        </div>

        
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card h-100" style="width: 100%;">
                        <img src="./img/5.jpg"  class="card-img-top" alt="...">
                        <div class="card-body bg-light">
                        <h1 class="display-5">My projects</h1>
                        <p class="lead">Click the button below to view my github, here you can keep up to date with what I am currently working on.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card h-100" style="width: 100%;">
                        <img src="./img/3.jpg" class="card-img-top" id="crdimg" alt="...">
                        <div class="card-body bg-light">
                        <h1 class="display-5">Want to know more about me?</h1>
                        <p class="lead">Click the button to view my linkedin, where you can find out more about my history and what I am currently upto!</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </main>

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <img src="./img/ltext.png" width="175px">
                <small class="d-block mb-3 text-muted">&copy; <?php echo date("Y"); ?>
                </small>
            </div>
            <div class="col-6 col-md">
                <h5>Find out More!</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="http://www.lewiswestcott.co.uk">lewiswestcott.co.uk</a></li>
                    <li><a class="link-secondary" href="http://www.github.com/lewiswestcott">Github</a></li>
                    <li><a class="link-secondary" href="http://www.linkedin.com/in/lewiswestcott">LinkedIn</a></li>

                </ul>
            </div>
        </div>
    </footer>

    <div class="modal modalTwo" tabindex="-1" id="modalTwo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a text save!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="./php/newSave.php" id="UpdateForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Text</label>
                            <input type="text" class="form-control" name="txtInput" id="txtInput">
                        </div>
                        <!-- <div class="mb-3">
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
                        <div class="mb-3">
                            <label for="cmbSeconds" class="form-label">Text Expiration:</label>
                            <select class="form-select" id="cmbTextExpiration" name="cmbTextExpiration">
                                <option selected>Time</option>
                                <option value="none">Never</option>
                                <option value="3600">1 Hour</option>
                                <option value="7200">2 Hour</option>
                                <option value="10800">3 Hour</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cmbPrivacy" class="form-label">Paste visibility</label>
                            <select class="form-select" id="cmbTextType" name="cmbTextType">
                                <option selected>Select</option>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#modalTwo').click(function () {
            $('#modalTwo').modal('show');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>




</body>

</html>