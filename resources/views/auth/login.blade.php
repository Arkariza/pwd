<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-image: url("https://i.ytimg.com/vi/uNCr7NdOJgw/maxresdefault.jpg");
            background-size: cover;
            background-attachment: fixed;

        }
        #hi{
            border-radius: 10px;
            border: 1px solid #FFF;
            background: linear-gradient(180deg, rgba(255, 254, 254, 0.20) 0%, rgba(217, 217, 217, 0.20) 100%);
            backdrop-filter: blur(20px);
        }
    </style>

</head>
<body>
    <div id="hi" class="card" style="width: 18rem; height: 25rem; left: 40%; top: 150px">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center; color: white;">Login</h5>
            <br>
            <div class="card-body">
            <label for="" style="color: white">Email</label>
            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="card-body">
            <label for="" style="color: white">Password</label>
            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <br>
            <button type="button" class="btn btn-primary position-absolute top-20 start-50 translate-middle">Login</button>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>