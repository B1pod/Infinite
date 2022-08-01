<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container rounded bg-primary text-white p-4 my-4">
        <h1>Questionnaire</h1>
    </div>
    <div class="container">
        <?php

        if (isset($_POST["name"]) && isset($_POST["lname"]) && isset($_POST["age"])){
            echo '
            <div class="alert alert-success">
                Welcome '.$_POST["name"].' '.$_POST["lname"].', '.$_POST["age"].'
            </div>
            ';
        } else {
            echo '
            <form action="./" method="post">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your first name" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your last name" id="lname" name="lname">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" placeholder="Enter your age" id="age" name="age">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            ';
        }
        ?>
    </div>
</body>
</html>