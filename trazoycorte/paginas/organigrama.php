

<div class="card">
  <div class="card-header" style="background-color: #00838f ;">
    <div class="row">
      <div class="col-md-6">
        <h4 class="title"> ORGANIGRAMA DEL DEPARTAMENTO DE CORTE </h4> 
   <p class="category" id="seguridad" data-toggle="tooltip" data-placement="top" title="click para ver normas de seguridad">ver normas de seguridad en corte</p>
      </div>
      <div class="col-md-6">
        <img src="assets/img/sena.png" style="width: 45px;height: 45px;">
      </div>
    </div>
    
    
  </div>
  <div class="card-content">

<div class="row">

  <div class="col-md-6" data-toggle="tooltip" data-placement="top" title="click para ver funciones de cada perfil">
    <ol class="organizational-chart">
      <li>
        <div id="jefe">
          <h3>Jefe de Corte</h3>
        </div>

        <ol>
          <li>
            <div id="auxiliar">
              <h3>Auxiliar Jefe de Corte</h3>
            </div>
            <ol>
              <li>
                <div id="trazo">
                  <h3>Trazo</h3>
                </div>
              </li>
              <li>
                <div id="extendido">
                  <h3>Extendido</h3>
                </div>

              </li>
              <li>
                <div id="corte">
                  <h3>Corte</h3>
                </div>
              </li>
              <li>
                <div id="oper">
                  <h3>Operaciones Auxiliares</h3>
                </div>
              </li>
              <li>
                <div id="revision">
                  <h3>Revisión</h3>
                </div>
              </li>
              <li>
                <div id="empaque">
                  <h3>Empaque</h3>
                </div>
              </li>
            </ol>
          </li>

        </ol>
      </li>

    </ol>
  </div>
  <div class="col-md-6">
    <div id="diagram" class="organizational-chart" style="color: black;">

    </div>
  </div>
</div>


<script type="text/javascript">

  $('#diagram').load('paginas/organigram_concept/seguridad.php').slideDown(560);

  $('#jefe').click(function(){

    $('#diagram').load('paginas/organigram_concept/jefe.php').slideDown(560);
  })


  $('#auxiliar').click(function(){

    $('#diagram').load('paginas/organigram_concept/auxiliar.php').slideDown(560);
  })


  $('#trazo').click(function(){

    $('#diagram').load('paginas/organigram_concept/trazo.php').slideDown(560);
  })


  $('#extendido').click(function(){

    $('#diagram').load('paginas/organigram_concept/extendido.php').slideDown(560);
  })

  $('#corte').click(function(){

    $('#diagram').load('paginas/organigram_concept/corte.php').slideDown(560);
  })

  $('#oper').click(function(){

    $('#diagram').load('paginas/organigram_concept/oper.php').slideDown(560);
  })


  $('#revision').click(function(){

    $('#diagram').load('paginas/organigram_concept/revision.php').slideDown(560);
  })
  

  $('#empaque').click(function(){

    $('#diagram').load('paginas/organigram_concept/empaque.php').slideDown(560);
  })

  $('#seguridad').click(function(){

    $('#diagram').load('paginas/organigram_concept/seguridad.php').slideDown(560);
  })

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
</script>





  </div>
</div>




