<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap stylng -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Interview Code-Afiq Ammar</title> <!-- title -->
</head>
<body>
    <div class="container mt-4"> <!-- set container and top margin -->
        <div class="p-3 box"> <!-- set padding 3 and box(css) -->
            <div class="mb-3 row"> <!-- set margin bottom 3 and row -->
                <label for="inputPassword" class="col-form-label col-sm-4">User Name:</label>
                <div class="col-sm-8"> <!-- set cplumn for input -->
                    <input type="text" class="form-control" id="input"> <!-- input field -->
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success fw-bold" id="btn-submit">Submit</button> <!-- button with id btn-submit and bootstrap design -->
            </div>
            <div>
                <p class="font-green" id="verification">Key in username and click submit</p> <!-- message based on the input -->
            </div>
        </div>
    </div>

    <style>
        .box {
            border: 3px solid black;
            width: 40%; 
            border-radius: 5px;
        } /**border design with  width 40%, radius of black and 5px rounded corner*/

        .font-green {
            color: green; 
            font-size: large;
        } /**setup color green and large size for p*/
    </style>
    <!-- cdn jquery link -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    

    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- import external js file -->
    <script src="verify_ajax.js"></script>
</body>
</html>