<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $aberto;
    private $leitor;

    //Métodos
    public function detalhes(){
        echo "  Livro ".$this->titulo." escrito por ".$this->autor;
        echo "<br>      Páginas: ".$this->totPaginas;
        echo "<br>      Sendo lido por ".$this->leitor->getNome();
    } 

    //Métodos Especiais
    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->totPaginas=$totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor=$leitor;
    }

    function getTitulo(){
        return $this-> titulo;
    }

    function getAutor(){
        return $this->autor;
    }

    function gettotPaginas(){
        return $this-> totPaginas;
    }

    function getLeitor(){
        return $this->leitor;
    }

    function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    function setAutor($autor){
        $this->autor=$autor;
    }

    function settotPaginas($totPaginas){
        $this->totPaginas=$totPaginas;
    }

    function setLeitor($leitor){
        $this->leitor=$leitor;
    }

    public function abrir(){
        $this->aberto = true;
    }

    public function avancarPag(){
        $this->pagAtual++;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function folhear($p){
        if($p > $this-> totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPag(){
        $this->pagAtual--;
    }
        
    

}