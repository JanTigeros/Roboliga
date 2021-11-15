<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/competition.css">
    <title>Tekmovanje</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'banner.php'; ?>
    <div class="main">
        <div class="container">
            <div class="title">
                <h1>O Roboligi</h1>
            </div>
            <div class="text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.
                </p>
            </div>
        </div>
        <div class="row1-container">
            <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='login.php'">
                <h2>Ekipe</h2>
                <p>Tukaj si lahko ogledate vse prijavljenje ekipe :)</p>
                <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
            </div>

            <div class="box red" style="cursor: pointer;" onclick="window.location='login.php'">
                <h2>Prijava</h2>
                <p>Tukaj se lahko prijavite na tekmovanje Roboliga</p>
                <img id="ico" src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
            </div>

            <div class="box box-down blue" style="cursor: pointer;" onclick="window.location='login.php'">
                <h2>Rezultati</h2>
                <p>Uses data from past projects to provide better delivery estimates</p>
                <img id="ico" src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>