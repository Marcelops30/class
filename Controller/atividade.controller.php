<?php
require_once 'model/atividade.php';

class AtividadeController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new atividade();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/atividade/atividade.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $ativ = new atividade();

        if(isset($_REQUEST['id_asm'])){
            $ativ = $this->model->Obter($_REQUEST['id_asm']);
        }

        require_once 'view/header.php';
        require_once 'view/atividade/atividade-editar.php';
        require_once 'view/footer.php';
    }

    public function Novo(){
        $ativ = new atividade();

        require_once 'view/header.php';
        require_once 'view/atividade/atividade-nova.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $ativ = new atividade();

        $ativ->id_asm = $_REQUEST['id_asm'];
        $ativ->nome_asm = $_REQUEST['nome_asm'];
        $ativ->tempo_asm = $_REQUEST['tempo_asm'];
        $ativ->pontuacao_asm = $_REQUEST['pontuacao_asm'];
		$ativ->imagem_asm = $_REQUEST['imagem_asm'];

        $this->model->Registrar($ativ);

        header('Location: index.php?c=atividade');
    }

    public function Editar(){
        $ativ = new atividade();

        $ativ->id_asm = $_REQUEST['id_asm'];
        $ativ->nome_asm = $_REQUEST['nome_asm'];
        $ativ->tempo_asm = $_REQUEST['tempo_asm'];
        $ativ->pontuacao_asm = $_REQUEST['pontuacao_asm'];
		$ativ->imagem_asm = $_REQUEST['imagem_asm'];

        $this->model->Atualizar($ativ);

        header('Location: index.php?c=atividade');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_asm']);
        header('Location: index.php');
    }
}
