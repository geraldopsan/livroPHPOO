<?php
class produto{
  private $description;
  private $stock;
  private $price;

  public function __construct ($descricao, $estoque, $preco){
    if (is_string($descricao) and ! is_numeric($descricao)){
      $this->description = $descricao;
    }
    if (is_numeric($estoque) and $estoque >0){
      $this->stock = $estoque;
    }
    if (is_numeric($preco) and $preco >0){
      $this->price = $preco;
    }
  }
  public function getDescription(){
    return $this->description;
  }
  public function getStock(){
    return $this->stock;
  }
  public function getPrice(){
    return $this->price;
  }
}
$p1 = new produto("10", '10', 5);
print 'Descricao: '. $p1->getDescription() . '<br>' . PHP_EOL;
print 'Estoque: '. $p1->getStock() . '<br>' . PHP_EOL;
print 'Preco: '. $p1->getPrice() . '<br>' . PHP_EOL;
