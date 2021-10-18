<html>
	<head>
		<title>Mi Primer View</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>
		<h1><?= $titulo ?></h1>
		<!--
		<h1><?= $titulo ?></h1>
		--> 
        <table class="table table-striped table-bordered table-sm table-info border-light">
        <thead>
            <tr>
            <th scope="col">Id Contacto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">DNI</th>
            <th scope="col">Email</th>
            <th scope="col">Celular</th>
			<th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($datos as $dat){
                    echo "<tr>";
                    echo "<td>".$dat['idcontacto']."</td>";
                    echo "<td>".$dat['nombre']."</td>";
                    echo "<td>".$dat['apellidos']."</td>";
                    echo "<td>".$dat['dni']."</td>";
                    echo "<td>".$dat['email']."</td>";
                    echo "<td>".$dat['celular']."</td>";
					$rutae = base_url()."/public/contactos/editar/".$dat['idcontacto'];
					echo "<td><a href='$rutae'>Editar</a></td>";
					$rutad = base_url()."/public/contactos/eliminar/".$dat['idcontacto'];
					echo "<td><a href='$rutad'>Eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
</body>
</html>