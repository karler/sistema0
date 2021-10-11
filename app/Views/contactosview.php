<html>
	<head>
		<title>Mi Primer View</title>
	</head>
	<body>
		<h1><?PHP echo $titulo; ?></h1>
		<table width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th width="10%">Id Contacto</th>
                    <th width="40%">Nombre</th>
                    <th width="40%">Apellidos</th>
                    <th width="40%">DNI</th>
                    <th width="40%">Email</th>
                    <th width="40%">Celular</th>
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
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
	</body>
</html>