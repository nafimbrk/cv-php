<?php

require "data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
 .container {
    border: 2px solid;
    text-align: center;
    margin-left: 20%;
    margin-right: 20%;
 }
 .isi {
    text-align: left;
    margin: 50px;
 }
 .foto {
    margin-top: 50px;
    margin-right: 50px;
 }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="mk.php" target="_blank">Mata Kuliah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="form.php" target="_blank">Form</a>
        <a class="nav-link" href="skill.php" target="_blank">Skill</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="foto">
        <img src="foto/cv.jpg" alt="" align="right">
    </div>
    <div class="isi">
    <h1>CURRICULUM VITAE</h1>
    <u><h2>DATA PRIBADI</h2></u>
    <hr>
    <?php foreach($pribadi as $key => $value) { ?>
    <tr>
        <td><?= "$key : $value<br>"; ?></td>
    </tr>
    <?php } ?>
    <u><h2>DATA PENDIDIKAN</h2></u>
    <hr>
    <?php foreach($pendidikan as $key => $value) { ?>
    <tr>
        <td><?= "$key : $value<br>"; ?></td>
    </tr>
    <?php } ?>
    <u><h2>KEMAMPUAN</h2></u>
    <hr>
    <?php foreach($kemampuan as $key => $value) { ?>
    <tr>
        <td><?= "$key : $value<br>"; ?></td>
    </tr>
    <?php } ?>
    </div>
</div>
</body>
</html>