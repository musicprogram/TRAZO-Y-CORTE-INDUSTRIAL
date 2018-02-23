




<div class="card">
	<div class="card-header" style="background-color: #00838f ;">
		<div class="row">
			<div class="col-md-6">
				<h4 class="title">Introducción a los tejidos</h4>
				
			</div>
			<div class="col-md-6">
				<img src="assets/img/sena.png" style="width: 45px;height: 45px;">
			</div>
		</div>
		
		
	</div>
	<div class="card-content" data-toggle="tooltip" data-placement="top" title="click en cada item para ver información de los tejidos">

<div class="row">
	<div class="col-md-6">
		
	<table class="table table-hover">
  
  <tbody>
  <tr id="defi">
      
      <td>2.1 Definición de telas</td>
      
    </tr>
    <tr id="clasificacion" >
      
      <td>2.2 Clasificación de telas</td>
      
    </tr>
    <tr id="ligamentos">
     
      <td>2.3 ligamentos básicos o fundamentales</td>
      
    </tr>
    <tr id="comerciales">
     
      <td>2.4 Tejidos comerciales</td>
     
    </tr>
    <tr id="acabados">
     
      <td>2.5 Acabados textiles</td>
     
    </tr>
    <tr id="procesos_tela">
     
      <td>2.6 Procesos a las telas para darles estabilidad dimensional al lavado</td>
     
    </tr>
    <tr id="defectos">
     
      <td>2.7 Defectos mas comúnes en las telas</td>
     
    </tr>
    <tr id="almacenaje">
     
      <td>2.8 Almacenaje de telas</td>
     
    </tr>
    <tr id="transporte">
     
      <td>2.9 Transporte de tejidos</td>
     
    </tr>
  </tbody>
</table>


	</div>
	<div class="col-md-6">
		<div id="teji_desc" class="organizational-chart" style="color: black"></div>
	</div>
</div>



	</div>
</div>





<script type="text/javascript">
	  $('#defi').click(function(){
    	$('#teji_desc').load('paginas/tejidos/defi.php').slideDown(560);
  	})
  	$('#clasificacion').click(function(){
    	$('#teji_desc').load('paginas/tejidos/clasificacion.php').slideDown(560);
  	})

  	$('#ligamentos').click(function(){
    	$('#teji_desc').load('paginas/ligamentos/basicos.php').slideDown(560);
  	})
    $('#comerciales').click(function(){
      $('#teji_desc').load('paginas/comerciales/tejidos_comerciales.php').slideDown(560);
    })
    $('#acabados').click(function(){
      $('#teji_desc').load('paginas/acabados/acabados.php').slideDown(560);
    })
    $('#procesos_tela').click(function(){
      $('#teji_desc').load('paginas/procesos_tela/procesos_tela.php').slideDown(560);
    })

    $('#defectos').click(function(){
      $('#teji_desc').load('paginas/defectos/defectos.php').slideDown(560);
    })

    $('#almacenaje').click(function(){
      $('#teji_desc').load('paginas/almacenaje/almacenaje.php').slideDown(560);
    })

    $('#transporte').click(function(){
      $('#teji_desc').load('paginas/transporte/transporte.php').slideDown(560);
    })
</script>