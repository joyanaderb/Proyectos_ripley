<div class="container-fluid">
<div class="row">
  <div class="col-xs-12">
    <h1 class="page-header">
      Filtrando una tabla
    </h1>

    <p>
      Las reglas de este evento consiste en desarrollar un algoritmo en javascript que <b>permita filtrar</b> el resultado de la tabla en <b>base al criterio que uno escriba</b> en el <b>campo de búsqueda</b>.
    </p>
    
    
    <!-- TABLA INICIA -->
    <table id="tabla" class="table table-striped">
      <thead>
        <tr>
          <th style="width:160px">Nombre</th>
          <th>Apellido</th>
          <th style="width:220px">Profesion</th>
          <th style="width:140px">Sueldo</th>
        </tr>
        <tr>
          <td colspan="4">
            <input id="buscar" type="text" class="form-control" placeholder="Escriba algo para filtrar" />
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan</td>
          <td>Perez Patiño</td>
          <td>Marketing Empresarial</td>
          <td class="text-right">S/. 9000.00</td>
        </tr>
        <tr>
          <td>Alberto</td>
          <td>Gonzales Flores</td>
          <td>Derecho</td>
          <td class="text-right">S/. 4000.00</td>
        </tr>
        <tr>
          <td>Gustavo</td>
          <td>Bueno Bravo</td>
          <td>Derecho</td>
          <td class="text-right">S/. 7000.00</td>
        </tr>
        <tr>
          <td>Enrique</td>
          <td>Pacheco Perez</td>
          <td>Derecho</td>
          <td class="text-right">S/. 12000.00</td>
        </tr>
        <tr>
          <td>Jaime</td>
          <td>Andrade Gonzales</td>
          <td>Economia</td>
          <td class="text-right">S/. 7500.00</td>
        </tr>
        <tr>
          <td>Andrea</td>
          <td>Loayza Perez</td>
          <td>Medicina Humana</td>
          <td class="text-right">S/. 7500.00</td>
        </tr>
        <tr>
          <td>Elvira</td>
          <td>Gonzales Perez</td>
          <td>Ingeniería de Sistema</td>
          <td class="text-right">S/. 7500.00</td>
        </tr>
        <tr>
          <td>Joseph</td>
          <td>Rodriguez Pacheco</td>
          <td>Ingeniería de Software</td>
          <td class="text-right">S/. 8200.00</td>
        </tr>
        <tr>
          <td>Pedro</td>
          <td>kuczynski</td>
          <td>Economista</td>
          <td class="text-right">S/. 250000.00</td>
        </tr>
        <tr>
          <td>Alan</td>
          <td>García Perez</td>
          <td>Derecho</td>
          <td class="text-right">S/. 120000.00</td>
        </tr>
        <tr>
          <td>Jose</td>
          <td>Villanueva Salvador</td>
          <td>Medicina Humana</td>
          <td class="text-right">S/. 2900.00</td>
        </tr>
        <tr>
          <td>Alberto</td>
          <td>Lozano García</td>
          <td>Medicina Humana</td>
          <td class="text-right">S/. 2900.00</td>
        </tr>
      </tbody>
    </table>
    <!-- TABLA FINALIZA -->
    
    
  </div>
</div>
</div>


<script>

    var busqueda = document.getElementById('buscar');
    var table = document.getElementById("tabla").tBodies[0];

    buscaTabla = function(){
      texto = busqueda.value.toLowerCase();
      var r=0;
      while(row = table.rows[r++])
      {
        if ( row.innerText.toLowerCase().indexOf(texto) !== -1 )
          row.style.display = null;
        else
          row.style.display = 'none';
      }
    }

    busqueda.addEventListener('keyup', buscaTabla);
</script>