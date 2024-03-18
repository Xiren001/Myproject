<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dynamic Certificate Generator</title>

</head>
<body>
    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="generator.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="Name" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Enter Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="Course" id="floatingInput1" placeholder="name@example.com">
                            <label for="floatingInput1">Enter Course Name</label>
                        </div>
                        <div class="col-md-3">
                            <div class="d-grid">
                                <button class="btn btn-outline-info fw-bold fs-5" type="submit" name="certificate">Generate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>