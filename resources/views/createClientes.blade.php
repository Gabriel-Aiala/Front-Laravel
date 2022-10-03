<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuarios</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
<form action="index.html">
<div class="row">
 <div class="form-group ">
   <label for="nome">Nome do cliente</label>
   <input type="text" class="form-control" id="nome">
 </div>
 <br>
 <div class="form-group ">
   <label for="valor">Cpf/cnpj</label>
   <input type="text" class="form-control" id="valor">
 </div>
 <br>
 <div class="form-group ">
   <label for="valor">endereço</label>
   <input type="text" class="form-control" id="valor">
 </div>
  <div class="form-group ">
   <label for="valor">numero de contato</label>
   <input type="number" class="form-control" id="valor">
 </div>
</div>
  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="{{route('Home')}}" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
</div>
</body>
</html>