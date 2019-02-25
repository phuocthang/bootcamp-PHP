<?php

namespace Model;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product)
    {
        $sql = "INSERT INTO product(Nameproduct, Priceproduct, Desproduct,Spproducer) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->Nameproduct);
        $statement->bindParam(2, $product->Priceproduct);
        $statement->bindParam(3, $product->Desproduct);
        $statement->bindParam(4, $product->Spproducer);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['Nameproduct'], $row['Priceproduct'],$row['Desproduct'],$row['Spproducer']);
            $product->id = $row['Idproduct'];
            $products[] = $product;
        }
        return $products;
    }

    public function get($id){
        $sql = "SELECT * FROM product WHERE Idproduct = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row['Nameproduct'], $row['Priceproduct'],$row['Desproduct'],$row['Spproducer']);
        $product->id = $row['Idproduct'];
        return $product;
    }


    public function delete($id){
        $sql = "DELETE FROM product WHERE Idproduct = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $product)
    {
        $sql = "UPDATE product SET Nameproduct = ?, Priceproduct = ?, Desproduct = ?, Spproducer = ?  WHERE Idproduct = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->Nameproduct);
        $statement->bindParam(2, $product->Priceproduct );
        $statement->bindParam(3, $product->Desproduct);
        $statement->bindParam(4, $product->Spproducer);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

}