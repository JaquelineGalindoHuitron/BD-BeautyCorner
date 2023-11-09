<?php
require_once 'Model/ventas.php';

class VentasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Ventas();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/ventas.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Ventas();
        
        if(isset($_REQUEST['idcliente'])){
            $alm = $this->model->getting($_REQUEST['idcliente']);
        }
        
        require_once 'View/header.php';
        require_once 'View/ventas-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Ventas();
        
        $alm->idcliente = $_REQUEST['idcliente'];
        $alm->idservicio = $_REQUEST['idservicio'];
        $alm->idempleado = $_REQUEST['idempleado'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->fecha = $_REQUEST['fecha'];
        $alm->precio = $_REQUEST['precio'];
        $alm->iva = $_REQUEST['iva'];
        $alm->total = $_REQUEST['total'];

        // SI ID Ventas ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Ventas, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idcliente > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idcliente > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcliente']);
        header('Location: index.php');
    }
}
