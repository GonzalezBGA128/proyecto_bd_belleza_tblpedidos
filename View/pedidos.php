<h1 class="page-header">Pedidos</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=pedidos&a=Crud">Agregar pedidos</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >idProducto</th>
            <th>NoArticulos</th>
            <th>Precio</th>
            <th >FechaPedido</th>
            <th >idCliente</th>
            <th >DireccionEnvio</th>
            <th >FechaEntrega</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->NoArticulos; ?></td>
            <td><?php echo $r->Precio; ?></td>
            <td><?php echo $r->FechaPedido; ?></td>
            <td><?php echo $r->idCliente; ?></td>
            <td><?php echo $r->DireccionEnvio; ?></td>
            <td><?php echo $r->FechaEntrega; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=pedidos&a=Crud&idPedido=<?php echo $r->idPedido; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=pedidos&a=Eliminar&idPedido=<?php echo $r->idPedido; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
