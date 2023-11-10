<?php
require_once 'Model/pedidos.php';

class pedidosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new pedidos();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/pedidos.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new pedidos();
        
        if(isset($_REQUEST['idPedido'])){
            $alm = $this->model->getting($_REQUEST['idPedido']);
        }
        
        require_once 'View/header.php';
        require_once 'View/pedidos-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new pedidos();
        
        $alm->idPedido = $_REQUEST['idPedido'];
        $alm->idProducto = $_REQUEST['idProducto'];
        $alm->NoArticulos = $_REQUEST['NoArticulos'];
        $alm->Precio = $_REQUEST['Precio'];
        $alm->FechaPedido = $_REQUEST['FechaPedido'];
        $alm->idCliente= $_REQUEST['idCliente'];
        $alm->DireccionEnvio = $_REQUEST['DireccionEnvio'];
        $alm->FechaEntrega = $_REQUEST['FechaEntrega'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idPedido > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idPedido']);
        header('Location: index.php');
    }
}
