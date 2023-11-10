<h1 class="page-header">
    <?php echo $alm->idPedido != null ? $alm->idProducto : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Pedidos">Pedidos</a></li>
  <li class="active"><?php echo $alm->idPedido != null ? $alm->idProducto : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=pedidos&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idPedido" value="<?php echo $alm->idPedido; ?>" />
    
    <div class="form-group">
        <label>idProducto</label>
        <input type="text" name="idProducto" value="<?php echo $alm->idProducto; ?>" class="form-control" placeholder="Ingrese su idProducto" data-validacion-tipo="requerido|idProducto" />
    </div>
    
    <div class="form-group">
        <label>NoArticulos</label>
        <input type="text" name="NoArticulos" value="<?php echo $alm->NoArticulos; ?>" class="form-control" placeholder="Ingrese el nombre de la Empresa" data-validacion-tipo="requerido|NoArticulos" />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="Precio" value="<?php echo $alm->Precio; ?>" class="form-control" placeholder="Ingrese su Precio" data-validacion-tipo="requerido|Precio" />
    </div>
    
    <div class="form-group">
        <label>FechaPedido</label>
        <input type="text" name="FechaPedido" value="<?php echo $alm->FechaPedido; ?>" class="form-control" placeholder="Ingrese su FechaPedido" data-validacion-tipo="requerido|FechaPedido" />
    </div>
    
    <div class="form-group">
        <label>idCliente</label>
        <input type="text" name="idCliente" value="<?php echo $alm->idCliente; ?>" class="form-control" placeholder="Ingrese su idCliente" data-validacion-tipo="requerido|idCliente" />
    </div>

    <div class="form-group">
        <label>DireccionEnvio</label>
        <input type="text" name="DireccionEnvio" value="<?php echo $alm->DireccionEnvio; ?>" class="form-control" placeholder="Ingrese su fecha de llegada" data-validacion-tipo="requerido|DireccionEnvio" />
    </div>

    <div class="form-group">
        <label>FechaEntrega</label>
        <input type="text" name="FechaEntrega" value="<?php echo $alm->FechaEntrega; ?>" class="form-control" placeholder="Ingrese su FechaEntrega" data-validacion-tipo="requerido|FechaEntrega" />
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
