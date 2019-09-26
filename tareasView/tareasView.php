<?php


class tareasView 
{

    function mostrar($titulo, $cosas, $total){ //cosas es el gitTarea que tenia antes

        
        
        ?>
      
        <!doctype html>
        <html lang="en">
      
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
          <title> <?php echo $titulo ?> </title>
        </head>
      
        <body>
          <h1>HOLA, SALUDA SANTIAGO SEGUROS</h1>
      
      
      <!-- ACA VA EL FOREACH PARA MOSTRARLO EN PANTALLA -->
      <div class="container">
            <ul class="list-group">
              <?php
                foreach ($cosas as $tareas) {
                  if ($tareas["pagado"] == 1) {
                    echo '<li  class = "list-group-item" ><s>' . 'NOMBRE Y APELLIDO: ' . $tareas['nombreApellido'] . ' : ' . 'CUOTA: ' . $tareas['cuota'] . ' : ' . 'CUOTA CAPITAL: ' . $tareas['cuotaCapital'] . ' : '. ' VENCIMIENTO: ' . $tareas['vencimiento'] . ' : '. 'FECHA DE PAGO: ' . $tareas['fechaPago'] . ' : '. 'INTERES: ' . $tareas['interes'] . '</li> </s> ';
                  } else{
                    echo '<li  class = "list-group-item" >' . 'NOMBRE Y APELLIDO: ' . $tareas['nombreApellido'] . ' : ' . 'CUOTA: ' . $tareas['cuota'] . ' : ' . 'CUOTA CAPITAL: ' . $tareas['cuotaCapital'] . ' : '. ' VENCIMIENTO: ' . $tareas['vencimiento'] . ' : '. 'FECHA DE PAGO: ' . $tareas['fechaPago'] . ' : '. 'INTERES: ' . $tareas['interes'] .  '</li> ';
                  }
                }
                ?>
            </ul>
          </div>
      
      
      
          <div class="container">
            <h2> DEUDOR DE CUOTAS </h2>
            
            <form action="insertarTarea" method="post">
      
              <div class="form-group">
                <label for="exampleInputEmail1"> Nombre y Apellido </label>
                <input type="text" class="form-control" id="nombreApellido" name="nombreApellido">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"> Cuota </label>
                <input type="text" class="form-control" id="cuota" name="cuota">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"> Cuota capital </label>
                <input type="text" class="form-control" id="cuotaCapital" name="cuotaCapital">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"> Vencimiento </label>
                <input type="text" class="form-control" id="vencimiento" name="vencimiento">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"> Fecha de Pago </label>
                <input type="text" class="form-control" id="fechaPago" name="fechaPago">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"> Interes </label>
                <input type="text" class="form-control" id="interes" name="interes">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="pago" name="pago">
                <label class="form-check-label" for="exampleCheck1"> ¿Pagado? </label>
              </div>
              <button type="submit" class="btn btn-primary"> Enviar </button>
            </form>
          </div>
      
      
      <h4>SEGURO TOTAL A FIN DE CUENTA</h4>
      <?php
       echo rand(2, 10);

          foreach ($total as $item) {
                  if ($item["pagado"] == 1) {
                    echo '<li  class = "list-group-item" ><s>' . 'PRECIO FINAL: ' . $item['precio_final'] . '</li> </s> '; //nombre y lo q debe o pago(cuota capital+ interes)
                  }
                  else{
                    echo '<br>'. 'no pagaste nada gil de mierda' . '</br>';
                  }
                }
      ?>
      <form action="montoTotal" method="post">
      <div class="form-group form-check">
              <div class="form-group">
                <label for="exampleInputPassword1"> Vencimiento </label>
                <input type="text" class="form-control" id="precio_final" name="precio_final">
              </div>
                <input type="checkbox" class="form-check-input" id="pagado" name="pagado">
                <label class="form-check-label" for="exampleCheck1"> ¿Pagado? </label>
              </div>
              <button type="submit" class="btn btn-primary"> Enviar </button>
      </form>
      
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
        </body>
      
        </html>
      
      <?php
      }



}


?>