<?php
    class Pedido{
	private $descricao;
	private $quantidade;
	private $avaliacao;
	private $vendedor;
	private $comprador;
    private $preca;
        
        public function __construct($descricao,$quantidade,$avaliacao,$peca,$vendedor,$comprador){
            $this->setDescricao($descricao);
            $this->setQuantidade($quantidade);
            $this->setAvaliacao($avaliacao);
            $this->setPreca($peca);
            $this->setVendedor($vendedor);
            $this->setComprador($comprador);
        }
        
        
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setAvaliacao($avaliacao){
            $this->avaliacao = $avaliacao;
        }
        public function getAvaliacao(){
            return $this->avaliacao;
        }
	    public function setVendedor($vendedor){
            $this->vendedor = $vendedor;
        }
        public function getVendedor(){
            return $this->vendedor;
        }	
        public function setComprador($comprador){
            $this->comprador = $comprador;
        }
        public function getComprador(){
            return $this->comprador;
        }
        public function setPreca($preca){
            $this->preca = $preca;
        }
        public function getPreca(){
            return $this->preca;
        }
    }

?>