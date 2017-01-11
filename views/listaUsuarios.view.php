<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>


<div class="container nt-lista-usu ">
    <LEGEND>Lista Usuarios Del Sistema</LEGEND>
    <div class="col-md-3">
        <label>Ver lista por:</label>
        <select class="form-control ">
            <option>Apellidos y Nombres</option>
            <option>Cargo</option>
            <option>Departamento</option>
            <option>Estado</option>
        </select>
        <br>
    </div>

    <div class="col-md-3 div-usu">
        <br>
        <button type="submit" class="btn btn-success buscar" >Buscar
        </button>
    </div>

    <div class="col-md-3 div-usu">
        <input type="text" class="form-control" id="buscar" placeholder="buscar">
    </div>


    <div class="container table table-hover table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="tb-head-usu">
            <tr>
                <th>Nro</th>
                <th>Apellidos y Nombres</th>
                <th>Cargo</th>
                <th>Departamento</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody class="tb-usuarios">
            <tr>
                <th scope="row">  1 </th>
                <td> Torrico Candia Silvia </td>
                <td> Secretaria </td>
                <td> InfSis </td>
                <td>Inactivo</td>
            </tr>
            <tr>
                <th scope="row">  2 </th>
                <td> Ing. Achá Perez Samuel Roberto</td>
                <td> Jefe de Departamento </td>
                <td> InfSis </td>
                <td>Activo</td>
            </tr>
            <tr>
                <th scope="row">  3 </th>
                <td> Ing. Vargas Peredo  Emir Felix  </td>
                <td> Director de Carrera: </td>
                <td> Ingenieria Industrial </td>
                <td>Activo</td>
            </tr>
            <tr>
                <th scope="row">  4 </th>
                <td>Ing. Rojas Villarroel  Jose Oscar </td>
                <td> Jefe del Departamento
                </td>
                <td> Ingenieria Industrial </td>
                <td>Activo</td>
            </tr>

            <tr>
                <th scope="row">  5 </th>
                <td>Ing. Grover Dante López Loredo Quiroga </td>
                <td> Jefe del Departamento
                </td>
                <td> Ingenieria Civil </td>
                <td>Activo</td>
            </tr>

            <tr>
                <th scope="row">  6 </th>
                <td>Ing. Jose Meruvia Meruvia Vásquez </td>
                <td> Director de Carrera
                </td>
                <td> Ingenieria Civil</td>
                <td>Activo</td>
            </tr>


            </tbody>
        </table>
    </div>
</div>