<?php //include("views/global/header.view.php") ?>
<!---->
<?php //include('views/global/title.view.php') ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="estilos/js/jquery.min.js"></script>
    <link rel="stylesheet" href="estilos/css/reporte.css" >

    <script language="Javascript">
        function imprSelec(nombre) {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'popimpr');
            ventimp.document.write( ficha.innerHTML );
            ventimp.document.close();
            ventimp.print( );
            ventimp.close();
        }
    </script>
    <input type="button" value="Imprimir" onclick="javascript:imprSelec('seleccion')" />
    <button type="button" onClick="location.href='reporteDocente.php'" class="btn btn-danger btn-sm">Salir</button>
<!--    <a href="javascript:imprSelec('seleccion')" >Imprimir texto</a>-->

    <!--    <script type="text/javascript">-->
<!--        function imprSelec(muestra)-->
<!--        {var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}-->
<!--    </script>-->
<!--    <a href="javascript:imprSelec('muestra')">Imprimir</a>-->
<!--    <input type="button" value="Imprimir" onclick="javascript:window.print()" />-->

</head>
<body>






<!--<input type="button" value="Imprimir" onclick="javascript:window.print()" />-->



<!--<script>-->
<!---->
<!---->
<!--    function imprSelec(areaImpresion) {-->
<!--        //$('#' + areaImpresion).printThis();-->
<!---->
<!--        $('.cls-ocultar').hide();-->
<!--        var estilos = '';-->
<!--        $("link[rel=stylesheet]").each(function () {-->
<!--            var href = $(this).attr("href");-->
<!--            if (href) {-->
<!--                var media = $(this).attr("media") || "all";-->
<!--                estilos = estilos + '<link type="text/css" rel="stylesheet" href="' + href + '" media="' + media + '">';-->
<!--            }-->
<!--        });-->
<!---->
<!--        var ficha = $('#' + areaImpresion);-->
<!--        var ventimp = window.open(' ', 'popimpr');-->
<!---->
<!--        ventimp.document.write('');-->
<!--        ventimp.document.write('<html><head>' + estilos + '</head><body>');-->
<!--        ventimp.document.write(ficha.html());-->
<!--        ventimp.document.write('</body>');-->
<!--        ventimp.document.write('</html>');-->
<!--        ventimp.document.close();-->
<!--        ventimp.print();-->
<!--        ventimp.close();-->
<!--        $('.cls-ocultar').show();-->
<!--    }-->
<!--</script>-->
<!--<div class="main">-->
    <div id='seleccion'>

        <style type="text/css">
            td {
                font-size: 10px;
            }

            body {
                text-align: left;
            }


            #contenido {
                width: 1200px;
                margin: 0 auto 0 auto;
                text-align: left;
            }

            .tableHorario {
                border: 1px solid #000;
            }

            .tableHorario tr, .tableHorario td {
                border: 1px solid #000;
            }

            imprSelec() {
                display:none;

            }

            /*div{*/
            /*width: 200px;*/
            /*padding: 25px 0;*/
            /*margin: 0;*/
            /*}*/

        </style>

    <div class="container">
<!--    <div class="main">-->

<!--        <button type="button" onclick="imprSelec('contenido');" class="btn btn-primary btn-sm">Imprimir</button>-->
<!--        <button type="button" onClick="location.href='reporteDocente.php'" class="btn btn-danger btn-sm">Salir</button>-->
<!--        <fieldset>-->



            <div id="contenido">
                <div class="row">
                    <div align="right">
                        <h6> D.P.A.- D.I.S.U.
                            <br/>Periodo Académico</h6>
                    </div>
                    <div class="col-md-3 text-left">
                        <h5>UNIVERSIDAD MAYOR DE SAN SIMÓN
                            <br/>VICERECTORADO<h5>
                    </div>
                    <div align="center">
                        <h3>SEGUIMIENTO ACADEMICO DOCENTE </h3>  <!--&nbsp;I-2015-->
                    </div>

                </div>
                <div class="row">
                    <table>
                        <tbody>
                        <?php
                        foreach ($arregloDocentes as $Docente) {
                            ?>

                            <tr>
                                <td class="text-center">DOCENTE:</td>
                                <td class="text-center"></td>
                                <td class="text-center"><?= strtoupper($Docente['NOMBRE_DOC']) ?></td>
                                <td class="text-center"><?= strtoupper($Docente['APELLPATERNO_DOC']) ?></td>
                                <td class="text-center"><?= strtoupper($Docente['APELLMATERNO_DOC']) ?></td>
                                <td class="text-center"></td>
                                <td width="3%"><b>CI: </b></td>
                                <td><?= $Docente['CI_DOCENTE'] ?> <?= strtoupper($Docente['CIEXPEDIDO_DOC']) ?></td>
                            </tr>
                        <?php }
                        ?>
                        <tr>
                            <td class="text-center" width="10%"></td>
                            <td class="text-center" width="10%"></td>
                            <td class="text-center" width="18%"><b>NOMBRE(S)</b></td>
                            <td class="text-center" width="18%"><b>AP. PATERNO</b></td>
                            <td class="text-center" width="18%"><b>AP. MATERNO</b></td>
                            <td class="text-center" width="16%"><b>AP. ESPOSO</b></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <table class="bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th width="10%">FACULTAD</th>
                            <th></th>
                            <th width="10%">CARRERA</th>
                            <th></th>
                            <th width="15%">DEPARTAMENTO</th>
                            <th></th>
                            <th width="20%">MATERIAS</th>
                            <th width="10%">SIGLA</th>
                            <th width="10%">H.Teor.</th>
                            <th width="10%">H.Prac.</th>
                            <!--                                <th width="5%">Anual</th>-->
                            <!--                                <th width="5%">Semestral</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($arregloFacultades as $facultad) { ?>
                            <tr>
                                <td></td>
                                <td width="30%" height="5"><?= strtoupper($facultad->NOMBRE_FACULTAD) ?></td>
                                <td></td>
                                <td width="20%" height="5"><?= strtoupper($facultad->NOMBRE_CARRERA) ?></td>
                                <td></td>
                                <td width="20%" height="2"><?= strtoupper($facultad->NOMBRE_DPTO) ?></td>
                                <td class="counterCell">.-</td>
                                <td width="20%" height="2"><?= strtoupper($facultad->NOMBRE_MATERIA) ?></td>
                                <td width="10%" height="2"><?= strtoupper($facultad->SIGLA_MATERIA) ?></td>


                                <?php
                                foreach ($arregloSeguimientoHrs as $hrs) { ?>
                                    <td width="5%" height="2"><?= strtoupper($hrs['HRSTEORIA']) ?></td>
                                    <td width="5%" height="2"><?= strtoupper($hrs['HRSPRACTICA']) ?></td>
                                <?php } ?>
                                <!--                                    <td><input type="checkbox"></td>-->
                                <!--                                    <td><input type="checkbox" checked></td>-->
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>


                <div class="row">
                    <table>
                        <tbody>
                        <?php
                        foreach ($arregloSeguimientoD as $segui) {
                        ?>
                        <tr>
                            <td width="21%"><b>CATEGORIA DOCENTE</b></td>
                            <td>A(Catedrático): <?= ($segui['CAT']) ?></td>
                            <!--                                <td width="3%">--><? //= ($segui['ASIS']) ?><!--</td>-->
                            <td>B(Adjunto): <?= ($segui['ADJ']) ?></td>
                            <!--                                <td width="3%"><input type="checkbox"></td>-->
                            <td>C(Asistente): <?= ($segui['ASIS']) ?></td>
                            <!--                                <td width="3%"><input type="checkbox"></td>-->
                            <td>Auxiliar Docencia:</td>
                            <!--                                <td width="3%"><input type="checkbox"></td>-->
                            <td>Otro cargo UMSS: <?= ($segui['OTROCARGO']) ?></td>
                            <!--                                <td>___________</td>-->
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <table class="tableHorario">
                        <thead>
                        <tr>
                            <th rowspan="2" class="text-center" width="10%">HORAS</th>
                            <th colspan="5" class="text-center" width="10%">LUNES</th>
                            <th colspan="5" class="text-center" width="10%">MARTES</th>
                            <th colspan="5" class="text-center" width="10%">MIERCOLES</th>
                            <th colspan="5" class="text-center" width="10%">JUEVES</th>
                            <th colspan="5" class="text-center" width="10%">VIERNES</th>
                            <th colspan="5" class="text-center" width="10%">SÁBADO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                        </tr>

                        <?php
                        foreach ($arregloHorarios as $Horario) { ?>
                            <tr>
                                <td><?= $Horario['INICIO_HORARIO'] ?>-<?= $Horario['FIN_HORARIO'] ?></td>
                                <?php
                                foreach ($arregloDiasSemana as $DiaSemana) {
                                    foreach ($arregloSeguimientoDocentesHorario as $SeguimientoDocenteHorario) {
                                        ?>
                                        <?php
                                        if ($Horario['INICIO_HORARIO'] == $SeguimientoDocenteHorario['INICIO_HORARIO'] and $DiaSemana['NOM_DIA'] == $SeguimientoDocenteHorario['nom_dia']) {
                                            ?>
                                            <td class="text-center"
                                                width="3%"><?= $SeguimientoDocenteHorario['sigla_materia'] ?></td>
                                            <td class="text-center"
                                                width="3%"><?= $SeguimientoDocenteHorario['grupo'] ?></td>
                                            <td class="text-center" width="3%"></td>
                                            <td class="text-center" width="3%"></td>
                                            <td class="text-center"
                                                width="3%"><?= $SeguimientoDocenteHorario['NOMBRE_AULA'] ?></td>
                                        <?php }
                                        ?>
                                        <?php
                                    } ?>
                                <?php }
                                ?>


                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>

                <div class="row">
                    <table>
                        <tbody>


                        <tr>
                            <td width="3%">Hrs. Teoria: <?= strtoupper($segui['sum(HRSTEORIA)']) ?></td>
                            <td width="3%">Hrs. Práctica: <?= strtoupper($segui['sum(HRSPRACTICA)']) ?></td>
                            <td width="3%">Hrs. Producción: <?= strtoupper($segui['HRSPRODUCCION']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF1']) ?></td>
                            <td width="3%">RESUMEN:</td>
                        </tr>
                        <tr>
                            <td width="3%">Hrs. de Investigación: <?= strtoupper($segui['HRSINVESTIGACION']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF2']) ?></td>
                            <td width="3%">Hrs. de Servicio
                                Acad.: <?= strtoupper($segui['HRSSERVICIOACADEMICO']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF3']) ?></td>
                            <td width="10%">TOTAL HORAS/SEMANA TRABAJADAS: <?= strtoupper($segui['TOTALSEM']) ?></td>
                        </tr>
                        <tr>
                            <td width="3%">Hrs. Extensión: <?= strtoupper($segui['HRSEXTENCION']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF4']) ?></td>
                            <td width="3%">Hrs. de Producc. Acad.: <?= strtoupper($segui['HRSPRODUCACAD']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF5']) ?></td>
                            <td width="10%">TOTAL HORAS/MES TRABAJADAS: <?= strtoupper($segui['TOTALMES']) ?></td>
                        </tr>
                        <tr>
                            <td width="3%">Hrs. Servicio: <?= strtoupper($segui['HRSSERVICIO']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF6']) ?></td>
                            <td width="3%">Hrs.Administ.Acad.: <?= strtoupper($segui['HRSADMINACAD']) ?></td>
                            <td width="3%">R.C.F.Nº: <?= strtoupper($segui['RCF7']) ?></td>
                            <td width="10%">TOTAL HORAS AUTORIZADAS: <?= strtoupper($segui['HRSAUTORIZADAS']) ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="10%">TIEMPO PARCIAL: <?= strtoupper($segui['TIEMPOPARCIAL']) ?></td>
                        </tr>
                        <tr>
                            <td>Observaciones: <?= strtoupper($segui['OBSERVACIONES']) ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="10%">DEDICACION EXCLUSIVA: <?= strtoupper($segui['DEDICACIONEXCLUSIVA']) ?></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div>
                    <h1>&nbsp;</h1>

                </div>

                <div>
                    <table>

                        <tbody>
                        <tr>

                            <td class="text-center" width="300px">
                                <hr/>
                                Firma del Docente
                            </td>
                            <td width="10px"></td>
                            <td class="text-center" width="300px">
                                <hr/>
                                Firma del Jefe de Dpto. o Carrera
                            </td>
                            <td width="10px"></td>
                            <td class="text-center" width="300px">
                                <hr/>
                                Firma Director Académicoa
                            </td>
                            <td width="10px"></td>
                            <td class="text-center" width="300px">
                                <hr/>
                                Firma Decano
                            </td>
                            <td width="10px"></td>
                            <td class="text-center" width="300px">
                                <hr/>
                                Vo.Bo.Dpto.Personal
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>
    </div>
        <style type="text/css">
            table {
                counter-reset: tableCount;
            }

            .counterCell:before {
                content: counter(tableCount);
                counter-increment: tableCount;
            }
        </style>
</div>

</body>
</html>


<?php include('views/global/footer.view.php') ?>
