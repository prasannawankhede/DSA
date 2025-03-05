<?php
namespace App\Trees;

class Node{

    public function __construct($value)
    {
        $this->value = $value;
        $this->left  = null;
        $this->right = null;
    }
}

class BinarySearchTreeImplementation{


    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    public function insert($value)
    {

        $newNode = new Node($value);

        if ($this->isEmpty()) {
            $this->root = $newNode;
        }else{
            $this->insertNode($this->root,$newNode);
        }

    }

    public function insertNode($root,$newNode){

        if($newNode->value < $root->value){

            if($root->left === null){
                $root->left = $newNode;
            }else{
                $this->insertNode($root->left,$newNode);
            }

        }else{
            if($root->right === null){
                $root->right = $newNode;
            }else{
                $this->insertNode($root->right,$newNode);
            }
        }

    }

    public function search($root,$value){
        if($root === null){
            return false;
        }
        if($value === $root->value){
            return true;
        }
        if($value < $root->value){
            return $this->search($root->left,$value);
        }else{
            return $this->search($root->right,$value);
        }
    }
}
