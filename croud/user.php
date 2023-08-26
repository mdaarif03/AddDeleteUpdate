<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `deleteupdate` (name,email,mobile,password)values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data Inserted successfully ";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARazaTPoint</title>
</head>

<body>
    <h1>Welcome to IES ARazaTPoint</h1>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
    </head>

    <body class="p-3 m-0 border-0 bd-example">

        <div class="container my-5">
            <form method="post" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="name" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputpassword	1" class="form-label">Password</label>
                    <input class="form-control" placeholder="Enter the password" name="password" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
            </form>
        </div>

    </body>

    </html>
</body>

</html>