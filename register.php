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
                <div class="team-input">
                    <div class="input-container">
                        <input type="text" name="iekipa" required>
                        <label>Ime Ekipe</label>
                    </div>
                </div>
                <div class="name-input">
                    <div class="input-container">
                            <input type="text" name="iekipa" required>
                            <label>Ime in Priimek Člana</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="iekipa" required="false">
                            <label>Ime in Priimek Člana 2</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="iekipa" required="false">
                            <label>Ime in Priimek Člana 3</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="iekipa" required="false">
                            <label>Ime in Priimek Člana 4</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="iekipa" required="false">
                            <label>Ime in Priimek Člana 5</label>
                        </div>
                </div>
                <div class="select-input">
                    <select>
                        <option value="#" selected="true" disabled="true" hidden>Izberite Kategorijo</option>
                        <option value="actual value 1">Kategorija 1</option>
                        <option value="actual value 2">Kategorija 2</option>
                        <option value="actual value 3">Kategorija 3</option>
                    </select>
                </div>
                <div class="select-input">
                    <select>
                        <option value="#" selected="true" disabled="true" hidden>Vaša šola</option>
                        <option value="actual value 1">Šola 1</option>
                        <option value="actual value 2">Šola 2</option>
                        <option value="actual value 3">Šola 3</option>
                    </select>
                </div>
                <div class="name-input">
                    <div class="input-container">
                        <input type="text" name="iekipa" required>
                        <label>Ime in Priimek Menotrja</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="iekipa" required>
                        <label>Ime in Priimek Menotrja 2</label>
                    </div>
                </div>
                <div class="btn-div">
                    <button type="reset" id="btn-red" onclick="history.back()">Nazaj</button>
                    <button type="reset" id="btn-gray">Reset</button>
                    <button type="submit" id="btn-subm">Prijavi</button>
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