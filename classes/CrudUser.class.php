<?php

/**
 * Description of CrudUser.class.php
 *
 * @author MARCELO
 */

require_once 'DB.php';

abstract class CrudUser extends DB {
    protected $tabela;
    private $nome;
    private $email;

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}
