 <html lang="en">
 <head>
        <meta charset="utf-8">
        <title>Laravel</title>
</head>
<body>
<form action="{{ url('cliente') }}" method="post">
    @csrf
    <div class="table-responsive-lg">

    <table border="1">

    <thead>
    <tr>
      <th>NOMBRE </th>
      <th>APELLIDOS</th>
      <th>FECHA DE NACIMIENTO</th>
      <th>CORREO</th>
      <th>TELEFONO</th>
      <th>DIRECCION</th>
      <th>CLAVE ACCESO</th>
      <th>ESTADO CIVIL</th>
      <th>SUELDO ANUAL</th>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="nombre"/></td>
            <td><input type="text" name="apellidos"/></td>
            <td><input type="date" name="fechanacimiento"/></td>
            <td><input type="email" name="correo"/></td>
            <td><input type="text" name="telefono"/></td>
            <td><input type="text" name="direccion"/></td>
            <td><input type="text" name="claveacceso"/></td>
            <td><input type="text" name="estadocivil"/></td>
            <td><input type="text" name="sueldoanual"/></td>
 

        </tr>
    </tbody>  
    </div>
   
    </table>
    <div>
         <input type="submit" value="submit" />
        <a href="{{url('cliente')}}">VOLVER</a>
        
    </div>
    
   
 
   
</form>
</body>
</html>

