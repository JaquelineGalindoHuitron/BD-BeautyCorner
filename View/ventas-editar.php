<h1 class="page-header">
    <?php echo $alm->idcliente != null ? $alm->idservicio : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Ventas">Tabla Ventas - Beauty Corner</a></li>
  <li class="active"><?php echo $alm->idcliente != null ? $alm->idservicio : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Ventas&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcliente" value="<?php echo $alm->idcliente; ?>" />
    

    <div class="form-group">
        <label>Id Servicio</label>
        <input type="text" name="idservicio" value="<?php echo $alm->idservicio; ?>" class="form-control" placeholder="Ingrese el Id Servicio" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Id Empleado</label>
        <input type="text" name="idempleado" value="<?php echo $alm->idempleado; ?>" class="form-control" placeholder="Ingrese el Id Empleado" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese la Dirección" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control" placeholder="Ingrese la Fecha" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese el Precio" data-validacion-tipo="requerido|min:7" />
    </div>

    <div class="form-group">
        <label>Iva</label>
        <input type="text" name="iva" value="<?php echo $alm->iva; ?>" class="form-control" placeholder="Ingrese el Iva" data-validacion-tipo="requerido|min:7" />
    </div>

    <div class="form-group">
        <label>Total</label>
        <input type="text" name="total" value="<?php echo $alm->total; ?>" class="form-control" placeholder="Ingrese el Total" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
