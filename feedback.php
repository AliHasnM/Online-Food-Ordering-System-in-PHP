<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="admin/admincss.css">
    <style>

    </style>
</head>

<body>
    <!-- Database connection file include -->
    <?php include 'partials/_dbconnect.php'; ?>

    <!-- Form Design -->
    <div id="contact-box">
        <form action="code_fb.php" method="post" class="form" enctype="multipart/form-data">
            <h1 class="center">Feedback</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="fb_name" id="fb_name">
            </div>
            <div class="form-group">
                <label for="name">Feedback</label>
                <input type="text" name="fb_desc" id="fb_desc">
            </div>
            <div class="form-group">
                <label for="name">Choose Profile Image</label>
                <input type="file" name="fb_img" id="fb_img">
            </div>
            <div class="form-group">
                <button type="submit" name="upload">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>