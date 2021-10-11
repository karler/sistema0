<html>
	<head>
		<title>Mi Primer View</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>
		<h1><?PHP echo $titulo; ?></h1>
        <form method="POST" action="<?= base_url() ?>/public/contactos/insertar">
            <div class="form-group row">
                <label for="nombre" class="col-4 col-form-label">Nombre</label> 
                <div class="col-8">
                <input id="nombre" name="nombre" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="apellidos" class="col-4 col-form-label">Apellidos</label> 
                <div class="col-8">
                <input id="apellidos" name="apellidos" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="dni" class="col-4 col-form-label">DNI</label> 
                <div class="col-8">
                <input id="dni" name="dni" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="celular" class="col-4 col-form-label">Celular</label> 
                <div class="col-8">
                <input id="celular" name="celular" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
</body>
</html>