 <html lang="en">
 <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <style type="text/css">
            th{
                background:gray;
            }
        </style>
</head>
<body>
    <div>

    <table border="1">

    <thead>
    <tr>
      <th>ID </th>
      <th>NOMBRE </th>
      <th>APELLIDOS</th>
      <th>CORREO</th>
      <th>TELEFONO</th>
      <th>DIRECCION</th>
      <th>CLAVE ACCESO</th>
      <th>FECHA DE NACIMIENTO</th>
      <th>ESTADO CIVIL</th>
      <th>SUELDO ANUAL</th>
      <th>IP</th>
   
    </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <th>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->claveacceso}}</td>
            <td>{{$cliente->fechanacimiento}}</td>
            <td>{{$cliente->estadocivil}}</td>
            <td>{{$cliente->sueldoanual}}</td>
            <td>{{$cliente->ip}}</td>
            <td><a href="{{url('cliente/'.$cliente->id) }}">Mostrar</a></td>
            <td><a href="{{url('cliente/'.$cliente->id.'/edit') }}">Editar</a></td>
            <td>
                <form action="{{url('cliente/'.$cliente->id)}}" method="post" class="destroy">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
         @endforeach
    </tbody>  
    </div>
   
    </table>
    <div>
        <a href="{{url('cliente/create')}}">AGREGAR CLIENTE</a>
        
    </div>
    
</body>
</html>

