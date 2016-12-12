<script src="estilos/js/buscarDocente/funciones.js"></script>
<script src="estilos/js/buscarDocente/capturar.js"></script>
<script src="estilos/js/buscarDocente/obtener.js"></script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">BUSQUEDA DOCENTE</h4>
            </div>

            <div class="modal-body">
                <div class="form-group col-sm-6">
                    <label>Buscar docente:</label>
                    <input class="form-control input-global" type="text" name="buscar" id="busqueda">
                    <div id="resultado" style="border: 1px solid rosybrown"></div>
                    <div id='response'></div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-global" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

