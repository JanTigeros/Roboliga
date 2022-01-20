<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekipe</title>
    <link rel="stylesheet" href="css/teams.css">
</head>

<body>
<?php include 'header.php'; ?>
<div class="main">
    <div class="question">
        <div class="question-header">
                <h1>Prijavljene Ekipe</h1>
                <p>Imena Ekip</p>
        </div>
        <?php 
        $sql = "SELECT * FROM teams";
        $result=mysqli_query($conn, $sql); 
        while ($row= mysqli_fetch_array($result)){
        echo '<div>
            <button class="accordion">'.$row['t_name'].'</button>
            <div class="panel">
                <div class="panel-body">
                    <div class="team-member">
                        <p id="ph">Član/i</p>
                        <ul>
                            <li>'.$row['u1'].'</li>
                            <li>'.$row['u2'].'</li>
                            <li>'.$row['u3'].'</li>
                            <li>'.$row['u4'].'</li>
                            <li>'.$row['u5'].'</li>
                        </ul>
                    </div>
                    <div class="team-mentor">
                        <p id="ph">Mentor/ja</p>
                        <ul>
                            <li>'.$row['m1'].'</li>
                            <li>'.$row['m2'].'</li>
                        </ul>
                    </div>';
                $sql2 = "SELECT * FROM schools WHERE id = $row[school_id]";
                $result2=mysqli_query($conn, $sql2); 
                while ($row2= mysqli_fetch_array($result2)){
                echo '<div class="team-school">
                        <p id="ph">Šola</p>
                        <p>'.$row2['sname'].'</p>
                    </div>
                </div>
            </div>
        </div>';}}?>
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
<?php include 'footer.php'; ?>
</body>

</html>