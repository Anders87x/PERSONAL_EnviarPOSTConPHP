<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Enviar POST con PHP</title>
        <meta charset="utf8">
        <meta name="viewport">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="txtnroper" aria-describedby="emailHelp" placeholder="Nro Operación">
                </div>
                <button type="button" id="btnenviar" class="btn btn-primary">Enviar</button>
            </form>

            <form>
                <button type="button" id="btnenviarfactura" class="btn btn-primary">Enviar Factura</button>
            </form>

            <form>
                <button type="button" id="btnenviarfacturaservicio" class="btn btn-primary">Enviar Factura Servicio</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="index.js" type="text/javascript"></script>

</html>