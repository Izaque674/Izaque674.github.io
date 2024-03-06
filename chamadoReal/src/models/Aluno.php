<?php

class Aluno {
    private $id;
    private $nome;

    private $matricula;

    private $curso;


    public function __construct($id, $nome, $matricula, $curso){
        $this->id = $id;
        $this->nome = $nome;  
        $this->matricula = $matricula;    
        $this->curso = $curso;
    }

}
?>