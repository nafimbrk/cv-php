<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
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
        <a class="nav-link active" aria-current="page" href="mk.php" target="_blank">Mata Kuliah</a>
        <a class="nav-link" href="skill.php" target="_blank">Skill</a>
      </div>
    </div>
  </div>
</nav>
    <h1>Login</h1>
    <ul>
        <form action="admin.php" method="post">
            <li>
            <label for="un">username : </label>
            <input type="text" name="username" id="un" value="">
            </li>
            <li>
            <label for="pw">password : </label>
            <input type="password" name="password" id="pw" value="">
            </li>
            <li>
            <input type="radio" name="radio" id="rd1" value="">
            <label for="rd1">wanita</label>
            <input type="radio" name="radio" id="rd2" value="">
            <label for="rd2">pria</label>
            </li>
            <li>
            <select name="select" id="">
            <option value="">mahasiswa</option>
            <option value="">wirausha</option>
            <option value="">programmer</option>
            </select>
            </li>
            <li>
            <label for="tanya">pernyataan : </label><br>
            <textarea name="tanya" id="tanya" cols="30" rows="10" placeholder="masukan pertanyaan"></textarea>
            </li>
            <li>
            <input type="file" name="file" value="">
            </li>
            <input type="hidden" name="kode" value="864765890">
            <li>
            <button type="submit" name="submit" value="">kirim</button>
            </li>
        </form>
    </ul>
</body>
</html>