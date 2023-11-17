<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleUpload.css') }}">
    
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="http://www.grupohorizonte.com.br/wp-content/themes/layout/imgs/logo.png" alt="logo-hl" >
    </a>
  </div>
    <form action="{{ route('upload.csv') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="csv_file">Escolha um arquivo CSV:</label>
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit">Upload CSV</button>
        <a href="{{ route('frotas.index') }}">Voltar</a>
    </form>
</body>
</html>
