<?php 
namespace SOURCE;
use SOURCE\Config;


class Product{
    public $id ;
    public $name ;
    public $type ;
    public $category;
    public $description;
    public $costPrice ;
    public $sellPrice;
    public $img ;
    public $esale ;
    public $outdoor ;


    //reading all
    public function index()
    {
        $dataProducts = file_get_contents(Config::datasource().'products.json');
        $products = json_decode($dataProducts);
        return $products;
    }

    public function create()
    {

    }
    
    public function store($data)
    {
        $result = false;
        $dataProducts = file_get_contents(Config::datasource().'products.json');
        $products = json_decode($dataProducts);
        $products[] = (object)(array)$data;
        if(file_exists(Config::datasource().'products.json')){
            $result = file_put_contents(Config::datasource().'products.json',json_encode($products));
        }else{
            echo "file not found";
        }
        return $result;

    }

    public function show($id)
    {
        $dataProducts = file_get_contents(Config::datasource().'products.json');
        $products = json_decode($dataProducts);
        $productView = null;
        foreach($products  as $product){
            if($product->id == $id ){
                $productView = $product;
                break;
            }
        }
        return $productView;
    }
    public function highestId()
    {
        $currentId = null;
        $dataProducts = file_get_contents(Config::datasource().'products.json');
        $products = json_decode($dataProducts);
        if(count($products)>0){
            $id = [];
            foreach($products as $product){
                $id[]= $product->id;
            }
            sort($id);
            $lastIndex = count($id)-1;
            $highestId = $id[$lastIndex];
            $currentId = $highestId+1;
           

        }else{
            $currentId = 1;
        }
        return $currentId;
    }
    public function data($name,$type,$description,$cost_price,$sell_price,$img,$e_sale,$outdoor,$category)
    {
        $product = new Product();
        $product->id = $this->highestId();
        $product->name = $name;
        $product->type = $type;
        $product->category = $category;
        $product->description = $description;
        $product->costPrice = $cost_price;
        $product->sellPrice = $sell_price;
        $product->img = $img;
        $product->esale = $e_sale;
        $product->outdoor = $outdoor;
        return $product;
    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function trash()
    {

    }
    public function destroy()
    {

    }
    public function delete()
    {

    }
    
}