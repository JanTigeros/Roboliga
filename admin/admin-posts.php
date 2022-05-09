<?php
session_start();
if ($_SESSION['loggedin'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-pannel.css">
    <link rel="stylesheet" href="../css/admin-posts.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Dodaj Novico</title>
</head>
<body>
<div id="page-container">
    <?php require('admin-header.php'); ?>
    <div id="main">
        <form action="admin-post-add.php" method="post" enctype='multipart/form-data'>
            <input type="hidden" name="username" value="<?php echo $_SESSION["user"]?>">
                <div id="left">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Naslov (max. 28):</label>
                        <input maxlength="28" name="title" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Podnaslov (max. 181):</label>
                        <textarea maxlength="181" name="bait_text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Besedilo:</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-secondary mb-2">Post</button>
                </div>
                <div id="right">
                    <div class="form-group">
                        <div class="item-inner">
                            <div class="item-content">
                                <div class="image-upload"> <label style="cursor: pointer;" for="file_upload"> <img src="" alt="" class="uploaded-image">
                                        <div class="h-100">
                                            <div class="dplay-tbl">
                                                <div class="dplay-tbl-cell"> <i class="fa fa-cloud-upload"></i>
                                                    <h5><b>Izberite sliko iz računalnika</b></h5>
                                                    <h6 class="mt-10 mb-70">ali povlecite sliko sem</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <input data-required="image" type="file" name="image" id="file_upload" class="image-input" data-traget-resolution="image_resolution" value="">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>
<?php
}
else {
    header("Location: ../index.php");
	exit();
}
?>