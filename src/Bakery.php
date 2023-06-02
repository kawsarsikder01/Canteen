<?php 

namespace SOURCE;

use SOURCE\Config;

class Bakery{
    public $id = null;
    public $name = null;
    public $type = null;
    public $description = null;
    public $cost_price = null;
    public $sell_price = null;
    public $img = null;
    public $category = null;
    public $esale = null;
    public $outdoor = null;

    private $data;


    public function __construct()
    {
        $jsonData = file_get_contents(Config::datasource().'bakery_item.json');
        $this->data = json_decode($jsonData);
    }

    public function create($data)
    {
        $getProductData = $this->prepare($data);
        $this->data[] = (object)(array) $getProductData;
        return $this->insert();
    }
    public function highestId()
    {
        $currentId = null;
        if(count($this->data)>0){
            $id = [];
            foreach($this->data as $product){
                $id[]  = $product->id;
            }
            sort($id);
            $lastIndex = count($id)-1;
            $heighestId = $id[$lastIndex];
            $currentId = $heighestId+1;
        }else{
            $currentId = 1;
        }
        return $currentId;
    }
    public function prepare($data)
    {
        if(is_null($data->id) || empty($data->id)){
            $data->id = $this->highestId();
        }
        return $data;
    }
    public function insert()
    {
        if(file_exists(Config::datasource().'bakery_item.json')){
            file_put_contents(Config::datasource().'bakery_item.json',json_encode($this->data));
            return true;
        }else{
            echo "file not found";
            return false;
        }
    }
    public function edit($id)
    {
        $productData = null;
        foreach($this->data as $product){
            if($product->id == $id){
                $productData = $product;
            }
        }
        return $productData;
    }
    public function update($data)
    {
        foreach($this->data as $key=> $product){
            if($product->id == $data->id){
                break;
            }
        }
        $this->data[$key] = $data;
        return $this->insert();
    }
    public function find($id)
    {
        $data = null;
        foreach($this->data as $product){
            if($product->id == $id){
                $data = $product;
                break;
            }
        }
        return $data;
    }
    public function destroy($id)
    {
        foreach($this->data as $key=> $product){
            if($product->id == $id){
                break;
            }
        }
        array_splice($this->data,$key,1);
        return $this->insert();
    }
}