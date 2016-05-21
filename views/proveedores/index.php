<?php
/**
 * Created by PhpStorm.
 * User: alexj
 * Date: 03-04-2016
 * Time: 23:50
 */

//Inicio de variables de sesión
if (!isset($_SESSION)) {
    @session_start();
}

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Proveedores
        <!--<small>Optional description</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Datos Comerciales</a></li>
        <li class="active">Proveedores</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Buscar Proveedores</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Código de proveedor</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Código de proveedor">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Nombre</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Rut</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Rut">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Region</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Region">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Dirección</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Dirección">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Teléfono</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Teléfono">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Limpiar</button>
                <button class="btn btn-info pull-right" type="submit">Buscar</button>
            </div><!-- /.box-footer -->
        </form>
    </div>

    <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Relación de Proveedores</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="tablaProveedores" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Item</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>NIF/CIF</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Ver</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th>Item</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>NIF/CIF</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Ver</th>
                    <th>Eliminar</th>
                </tr>
                </tfoot>
            </table>
            <!--<button class="btn btn-primary" id="save" style="float:right;">Guardar</button> -->
        </div><!-- /.box-body -->
    </div><!-- /.box -->


</section><!-- /.content -->


<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
        var table = $("#tablaInscritos").dataTable({
            "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
    };
</script>