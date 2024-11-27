<?php

require "data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" target="_blank">Cv</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="form.php" target="_blank">Form</a>
        <a class="nav-link" href="mk.php" target="_blank">Mata Kuliah</a>
      </div>
    </div>
  </div>
</nav>
<h1>Skill Materi Mata Kuliah Pengenalan Pemrograman</h1>

<table class="table table-bordered">
    <thead class="table-dark">
              <tr>
            <th>Materi</th>
            <th>Level</th>
            <th>Keterangan</th>
        </tr>
  </thead>
  <tbody>
        <?php foreach($skill as $skl) { ?>
    <tr>
        <td><?= $skl[0]; ?></td>
        <td><?= $skl[1]; ?></td>
        <td><?= $skl[2]; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>