<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    //Here we need to add a csrf

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
            color:white;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background: #6441A5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2a0845, #6441A5);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2a0845, #6441A5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .btn-primary {
            background-color: transparent;
            border: 1px solid white;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: white;
            color:black;
            border: 1px solid white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Laraval Ajax Example - Email subscription
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4 text-center m-auto subscribe-section pt-5">
            <!-- FORM START -->
            <form method="POST">
                <div class="form-row">
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input name="email" type="text" class="form-control " id="emailField" placeholder="Email">
                            <div class="invalid-feedback d-none">
                                Please provide a valid email
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-left">
                        <button class="btn btn-primary" id="submitButton" type="submit">Add email</button>
                    </div>
                </div>
            </form>
            <!-- FORM END -->
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    //Here will be our javascript
</script>
</body>
</html>
