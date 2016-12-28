<style type="text/css">
    body{text-align: left;}
    #contenido{width: 800px; margin: 0 auto 0 auto; text-align: left; }

</style>


<style>
    p {
        font-size: 12px;
    }

    div {
        border-color:
    }


</style>

<script>

    function imprSelec(areaImpresion) {
        //$('#' + areaImpresion).printThis();

        $('.cls-ocultar').hide();
        var estilos = '';
        $("link[rel=stylesheet]").each(function () {
            var href = $(this).attr("href");
            if (href) {
                var media = $(this).attr("media") || "all";
                estilos = estilos + '<link type="text/css" rel="stylesheet" href="' + href + '" media="' + media + '">';
            }
        });

        var ficha = $('#' + areaImpresion);
        var ventimp = window.open(' ', 'popimpr');
        ventimp.document.write('<html><head>' + estilos + '</head><body>');
        ventimp.document.write(ficha.html());
        ventimp.document.write('</body>');
        ventimp.document.write('</html>');
        ventimp.document.close();
        ventimp.print();
        ventimp.close();
        $('.cls-ocultar').show();
    }
</script>


<div class="main">
    <div class=container >

        <button type="button" onclick="imprSelec('contenido');" class="btn-primary">Imprimir</button>
        <fieldset>

            <script src="estilos/js/jQuery.print.js"></script>



        <div id="contenido">
            <div class="row">
                <div align="right">
                    <h6>FOR DPA </h6>
                </div>
                <div align="left">

                    <h6>UNIVERSIDAD MAYOR DE SAN SIMON <br/>
                    DEPARTAMENTO DE PLANIFICACION ACADEMICA<br/>
                    COCHABAMBA-BOLIVIA</h6>

                </div>

            </div>

            <div align="center">
                <h4>FORMULARIO DE SOLICITUD DE NOMBRAMIENTO  <!--&nbsp;I-2015-->
                    <br>PARA DOCENCIA EXTRAORDINARIA(PROVISIONAL)</h4>

            </div>

            <div class="row">
                <tbody>
                <p>1.- Nombre del Profesional para quien se solicita Nombramiento como Docente Extraordinario en la
                    Universidad Mayor de San Simón</p>
                <table>
                    <tbody>

                    </tbody>
                </table>
                <p>2.-CARRERA QUE SOLICITA LA NOMINACION:</p>
                <p></p>
                <p>3.-DEPARTAMENTO:</p>
                <p></p>
                <p>4.-FACULTAD:</p>
<!--                --><?php
//                foreach ($arregloFacultad as $Facultad) {
//                ?>
<!--                <p>--><?//= $Facultad['NOMBRE_FACULTAD'] ?><!--</p>-->
                <p>5.-DIPLOMA ACADEMICO:</p>
                <p>6.-TITULO PROFESIONAL EN PROVISION NACIONAL:</p>
                <p>7.-CATEGORIA DEL NOMBRAMIENTO SOLICITADO:</p>
                <div class="row">
                    <table>
                        <tbody>
                        <tr>
                            <td width="300" class="text-center"><p>INTERINO:</p></td>
                            <td width="300" class="text-center"><p>ASISTENTE(A):</p></td>
                        </tr>
                        <tr>
                            <td width="300" class="text-center"><p>INVITADO:</p></td>
                            <td width="300" class="text-center"><p>ADJUNTO(B):</p></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td width="300" class="text-center"><p>CATEDRATICO(C)</p>:</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <p>8.-Asignaturas(s)(materias, módulos, seminario)que dictará:</p>
                    <p>HRS.SEMANA:0 &nbsp; HRS.MES:0</p>
                </div>

                <div>
                    <table>
                        <tbody>
                        <tr>
                            <td width="10" class="text-center"><p>A)</p></td>
                            <td width="200" class="text-center"><p>materia</p></td>
                            <td width="200" class="text-center"><p>cod_materia</p></td>
                            <td width="200" class="text-center"><p>grupo</p></td>
                        </tr>
                        </tbody>

                    </table>
                </div>


                <p>9.-TIEMPO DE DEDICACION:</p>
                <div class="row">
                    <table>
                        <tbody>
                        <tr>
                            <td width="200" class="text-center"><p>TIEMPO PARCIAL</p></td>
                            <td width="200" class="text-center"><p>TIEMPO EXCLUSIVO</p></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <p>10.-NOMBRAMIENTO APARTIR DE:</p>
                <p>11.-TIEMPO DE DURACION DEL NOMBRAMIENTO:</p>
                <p>12.-FECHA DE SOLICITUD:</p>

            </div>

            <div class="row">
                <table>
                    <tbody>
                    <tr>
                        <td></td>
                        <td class="text-center"><h5><hr/>JEFE DE DEPARTAMENTO</h5></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-center" width="200px">
                            <hr/>
                            <p>DIRECTOR ACADEMICO F.C.y.T.</p></td>
                        <td class="text-center" width="200px"></td>
                        <td class="text-center" width="200px">
                            <hr/>
                            <p>Vo.Bo.DECANO</p></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include('views/global/footer.view.php') ?>