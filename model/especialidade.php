<?php
class Especialidade{
    public $id_especialidade;
    public $especialidade;
    public $valor_dia;
    
    //especialidade------------------
    public function getId(){
        return $this->id_especialidade;
    }

    function setId($id){
        $this->id_especialidade = $id;
    }
    
    //valor
    public function getValor_dia(){
        return $this->valor_dia;
    }

    function setValor_dia($valor_dia){
        $this->valor_dia = $valor_dia;
    }

    function listAll(){
        try {
            $sql = "select * from especialidade";
            require_once("dao.php");
            $dao = new Dao;
            $stman = $dao->conecta()->prepare($sql);
            $stman->execute();
            $result = $stman->fetchAll(PDO::FETCH_OBJ);
            aviso("Cadastrado!");
        }catch(Exception $e){
            erro("Erro ao Cadastrar! " . $e->getMessage());
        }
        return $result;
    }
}
}

