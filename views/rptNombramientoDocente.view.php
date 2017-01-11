<style type="text/css">

    body {
        text-align: left;
    }

    #contenido {
        width: 800px;
        margin: 0 auto 0 auto;
        text-align: left;
    }

</style>


<style>
    td {
        font-size: 12px;
    }

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
    <div class=container>

        <button type="button" onclick="imprSelec('contenido');" class="btn-primary">Imprimir</button>
        <button type="button" onClick="location.href='reporteDocente.php'">Salir</button>
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
                    <table align="center">
                        <tbody>
                        <?php
                        foreach ($arregloDocentes as $Docente) {
                            ?>

                            <tr>

                                <td><b><?= strtoupper($Docente['NOMBRE_DOC']) ?></b></td>
                                <td><b><?= strtoupper($Docente['APELLPATERNO_DOC']) ?></b></td>
                                <td><b><?= strtoupper($Docente['APELLMATERNO_DOC']) ?></b></td>


                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>


                    <?php
                    foreach ($arregloFacultades as $facultad) { ?>

                    <?php } ?>
                    <p>2.-Carrera que solicita la Nominación:
                        &nbsp;&nbsp;<b><?= strtoupper($facultad->NOMBRE_CARRERA) ?></b></p>
                    <p>3.-Departamento: &nbsp; &nbsp; <b><?= strtoupper($facultad->NOMBRE_DPTO) ?></b></p>
                    <p>4.-Facultad: &nbsp; &nbsp; <b><?= strtoupper($facultad->NOMBRE_FACULTAD) ?></b></p>
                    <?php
                    foreach ($arregloDocentes as $Docente) { ?>
                        <p>5.-Diploma Académico: <b><?= strtoupper($Docente['DIPLOMA_ACAD']) ?></b></p>
                        <p>6.-Titulo Profesional en Provisión Nacional:
                            <b><?= strtoupper($Docente['PROFESION_DOC']) ?></b></p>
                    <?php } ?>
                    <p>7.-Categoría del Nombramiento Solicitado:</p>
                    <div class="row">
                        <table>
                            <tbody>
                            <?php
                            foreach ($arregloNombramientoS as $nombramientos) { ?>

                                <tr>
                                    <td width="300" class="text-center"><p>INTERINO:
                                            <b><?= ($nombramientos['INTERINO_NOM']) ?></b></p></td>
                                    <td width="300" class="text-center"><p>ASISTENTE(A):
                                            <b><?= ($nombramientos['ASISTENTE_NOM']) ?></b></p></td>
                                </tr>
                                <tr>
                                    <td width="300" class="text-center"><p>INVITADO:
                                            <b><?= ($nombramientos['INVITADO_NOM']) ?></b></p></td>
                                    <td width="300" class="text-center"><p>ADJUNTO(B):
                                            <b><?= ($nombramientos['ADJUNTO_NOM']) ?></b></p></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td width="300" class="text-center"><p>CATEDRATICO(C):
                                            <b><?= ($nombramientos['CATEDRATICO_NOM']) ?></b></p>:
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <?php
                        foreach ($arregloHorasTotalesSem as $HorasTotalSem) { ?>
                        <p>8.-Asignaturas(s)(materias, módulos, seminario)que dictará: &nbsp;
                        HRS.SEMANA: <b><?= strtoupper($HorasTotalSem['TOTALHORA']) ?></b> <?php } ?>&nbsp;
                            <?php
                            foreach ($arregloHorasTotalesMes as $HorasTotalMes) { ?>
                            HRS.MES:<b><?= strtoupper($HorasTotalMes['TOTALHORA']) ?></b> </p>
                    <?php } ?>

                    </div>

                    <div align="center">
                        <table>
                            <tbody>
                            <?php
                            foreach ($arregloFacultades as $facultad) { ?>


                                <tr>
                                    <td width="5%" class="counterCell"></td>
                                    <td width="20%"><b><?= strtoupper($facultad->NOMBRE_MATERIA) ?></b></td>
                                    <td width="20%"><b><?= strtoupper($facultad->SIGLA_MATERIA) ?></b></td>
                                    <!--                                <td width="20%" class="text-center"><p>grupo</p></td>-->
                                </tr>
                            <?php } ?>
                            </tbody>

                        </table>
                    </div>


                    <p>9.-Tiempo de Dedicación:</p>
                    <div class="row">
                        <table>
                            <tbody>
                            <?php
                            foreach ($arregloNombramientoS as $nombramientos) { ?>

                                <tr>
                                    <td width="200" class="text-center"><p>TIEMPO PARCIAL:
                                            <b><?= ($nombramientos['TIEMPO_PARCIAL_NOM']) ?></b></p></td>
                                    <td width="200" class="text-center"><p>TIEMPO EXCLUSIVO:
                                            <b><?= ($nombramientos['TIEMPO_EXCLUSIVO_NOM']) ?></b></p></td>

                                </tr>
                            <?php } ?>
                            </tbody>

                        </table>
                    </div>
                    <?php
                    foreach ($arregloNombramientoS as $nombramientos) { ?>
                        <p>10.-Nombramiento apartir de: &nbsp; <b><?= ($nombramientos['FECHA_SOLICITUD']) ?></b></p>
                        <p>11.-Tiempo de Duración del Nombramiento: &nbsp;
                            <b><?= strtoupper($nombramientos['TIEMPO_DURACION']) ?></b></p>
                        <p>12.-Fecha de Solicitud: &nbsp; <b><?= ($nombramientos['FECHA_SOLICITUD']) ?></b></p>
                    <?php } ?>

                </div>

                <div class="row">
                    <table>
                        <tbody>
                        <tr>
                            <td></td>
                            <td class="text-center">
                                <p>
                                <hr/>
                                JEFE DE DEPARTAMENTO
                                </p>
                            </td>
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
