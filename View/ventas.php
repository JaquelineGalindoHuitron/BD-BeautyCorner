<h1 class="page-header">Tabla Ventas - Beauty Corner</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Ventas&a=Crud">Agregar Ventas</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Id Cliente</th>
            <th>Id Servicio</th>
            <th>Id Empleado</th>
            <th >Direccion</th>
            <th>Fecha</th>
            <th >Precio</th>
            <th >Iva</th>
            <th >Total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idcliente; ?></td>
            <td><?php echo $r->idservicio; ?></td>
            <td><?php echo $r->idempleado; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->iva; ?></td>
            <td><?php echo $r->total; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Ventas&a=Crud&idcliente=<?php echo $r->idcliente; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Ventas&a=Eliminar&idcliente=<?php echo $r->idcliente; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
