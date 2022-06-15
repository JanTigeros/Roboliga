<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/competition.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
    <title>Tekmovanje</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'banner.php'; ?>
    <div class="main">
        <div class="container">
            <div class="title">
                <h1>Tekmovanje</h1>
            </div>
            <div class="text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.
                </p>
            </div>
        </div>
        <div class="row1-container">
            <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='teams.php'">
                <h2>Ekipe</h2>
                <p>Tukaj si lahko ogledate vse prijavljenje ekipe :)</p>
                <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
            </div>

            <div class="box red" style="cursor: pointer;" onclick="window.location='register.php'">
                <h2>Prijava</h2>
                <p>Tukaj se lahko prijavite na tekmovanje Roboliga</p>
                <img id="ico" src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
            </div>

            <div class="box box-down blue" style="cursor: pointer;" onclick="window.location='results.php'">
                <h2>Rezultati</h2>
                <p>Uses data from past projects to provide better delivery estimates</p>
                <img id="ico" src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>