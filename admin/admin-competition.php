<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-compet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Tekomvanje</title>
</head>
<body>
<script>
  var timer = localStorage.getItem('timer');

  document.getElementById("tsec").value = timer;
</script>
<script type="text/javascript" src="../js/timer.js"></script>
<?php 
// echo $_COOKIE["Onlysec"];
$Onlysec = $_COOKIE["Onlysec"];
?>
<div class="login-container">
  <div class="form-box">
    <div class="timer-head">
       <h1>
          <span id="hour">00</span> :
          <span id="min">00</span> :
          <span id="sec">00</span> :
          <span id="milisec">00</span>
          <span id="onlysec">00</span>
        </h1> 
      </div>
      <div class="btn-div">
          <button id="start" class ="btn-subm" onclick="startStop()">Start</button>
          <button id="btn-subm" onclick="reset()">Reset</button>
        </div>
      <form id="login-form" action="admin-result-add.php" method="post" autocomplete="off">
        <input id="tsec" type="hidden" name="Onlysec" value="<?php echo $Onlysec ?>">
          <div class="btn-div">
              <button type="reset" id="btn-red" onclick="history.back()">Nazaj</button>
              <button type="reset" id="btn-gray" onClick="window.location.reload();">Shrani rezultat</button>
              <button type="submit" id="btn-subm">Pošlji</button>
          </div>
      </form>
  </div>
</div>
</body>
</html>