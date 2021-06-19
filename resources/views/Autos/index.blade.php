<div class="jumbotron text-center">
  <h1>Informacion de Autos </h1>
  <p>Formulario de Autos Nuevos</p> 
</div>

<div>
    <form action="{{url('/Autos')}}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="Nombre">{{'Nombre'}}</label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="">
  </div>
  <br>
  <div class="form-group">
    <label for="Marca">{{'Marca'}}</label>
    <input class="form-control" type="text" name="Marca" id="Marca" value="">
  </div>
  <br>
   <div class="form-group">
    <label for="Modelo">{{'Modelo'}}</label>
    <input class="form-control" type="text" name="Modelo" id="Modelo" value="">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>