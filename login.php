<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Prijava ekipe</title>
</head>
<body>
    <div class="login-container">
        <div class="form-box">
            <form id="login-form" action="" method="post">
                <h1>Prijavi Ekipo</h1>
                <div class="input-container">
                    <input type="text" name="iekipa">
                    <label>Ime Ekipe</label>
                </div>
                <div class="input-container">
                        <input type="text" name="iekipa">
                        <label>Ime Člana</label>
                    </div>
                <button type="button" class="accordion">+</button>
                <div class="panel">
                    <div class="input-container">
                        <input type="text" name="iekipa">
                        <label>Ime Člana</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="iekipa">
                        <label>Ime Člana</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="iekipa">
                        <label>Ime Člana</label>
                </div>
                
            </form>
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
</body>
</html>