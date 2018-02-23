       <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text ">
            TRAZO Y CORTE INDUSTRIAL
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li >
                <a href="index.php">

                    <p>- Introducción</p>
                </a>
            </li>
            <li>
                <a id="concepto_gral">

                    <p>- Conceptos generales</p>
                </a>
            </li>
            <li>
                <a id="tejidos">

                    <p>- Introducción a los tejidos</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">

                    <p>- Procesos básicos del corte</p>
                </a>
            </li>
            <li>
                <a href="./icons.html">

                    <p>- Maquinas auxiliares en corte</p>
                </a>
            </li>
            <li>
                <a href="./maps.html">

                    <p>- Programación y liquidación del corte</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">

                    <p>- Normas de calidad en el departamento de corte para los tejidos de punto</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">

                    <p>- Normas de calidad en el departamento de corte para los tejidos planos</p>
                </a>
            </li>

<li>
                <a href="./notifications.html">

                    <p>- Recomendaciones</p>
                </a>
            </li>


        </ul>
    </div>
</div>


<script type="text/javascript">
    $('#concepto_gral').click(function(){

        $('#contenido').load('paginas/organigrama.php').slideDown(560);
    })


    $('#tejidos').click(function(){

        $('#contenido').load('paginas/tejidos.php').slideDown(560);
    })
</script>