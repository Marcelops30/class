<?php
//inclui a model que ligara como o controller
require_once 'model/item.php';

class ItemController{

    private $model;

    //Cria o modelo
    public function __CONSTRUCT(){
        $this->model = new item();
    }

    //Chama o modelo principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/item/item.php';
        require_once 'view/footer.php';
    }

    //Chamada para ver item de-edit
    public function Crud(){
        $it = new item();

        //obtem os dados 
        if(isset($_REQUEST['id_ias'])){
            $it = $this->model->Obtener($_REQUEST['id_ias']);
        }

        //chama as views.
        require_once 'view/header.php';
        require_once 'view/item/item-editar.php';
        require_once 'view/footer.php';
  }

   
    public function Novo(){
        $it = new item();

        require_once 'view/header.php';
        require_once 'view/item/item-novo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $it = new item();

        $it->id_ias = $_REQUEST['id_ias'];
        $it->nome_ias = $_REQUEST['nome_ias'];
        $it->seguencia_ias = $_REQUEST['seguencia_ias'];

        
        $this->model->Registrar($it);

        header('Location: index.php');
    }

    public function Editar(){
        $it = new item();

        $it->id_ias = $_REQUEST['id_ias'];
        $it->nome_ias = $_REQUEST['nome_ias'];
        $it->seguencia_ias = $_REQUEST['seguencia_ias'];
       

        $this->model->Atualizar($it);

        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_ias']);
        header('Location: index.php');
    }
}
