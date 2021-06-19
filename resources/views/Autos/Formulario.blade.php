<h1>Datos de los Autos<h1>

</<table class="table table-light">
   
   <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
        </tr>

   </thead>
   
   <tbody>
   @foreach($Autos as $Autos)
       <tr>
            <td>{{$loop-iteration}}</td>
            <td>{{$Autos->Nombre}}</td>
            <td>{{$Autos->Marca}}</td>
            <td>{{$Autos->Modelo}}</td>
            <td>{{$Autos->Precio}}</td>
        </tr>
        @endforeach
    </tbody>
</table>>