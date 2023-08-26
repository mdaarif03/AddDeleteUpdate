<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "select * from `deleteupdate` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `deleteupdate` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Updated successfully ";
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
    <title>DELETE UPDATE CREATE</title>
</head>

<body>
    <h1>Welcome to IES</h1>
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

        <!-- Example Code -->
        <div class="container my-5">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="name" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value="<?php echo $email;?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" autocomplete="off" value="<?php echo $mobile;?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleInputpassword	1" class="form-label">Password</label>
                    <input class="form-control" placeholder="Enter the password" name="password" autocomplete="off" value="<?php echo $password;?>">
                </div>

                <button type=" submit" class="btn btn-primary w-100" name="submit">Update</button>
            </form>
        </div>

        <!-- End Example Code -->
    </body>

    </html>
</body>

</html>