<?php 
namespace SOURCE;
use SOURCE\Config;


class Banner{
    public $id = null;
    public $title = null;
    public $caption = null;
    public $img = null;
    public $active = null;
    private $data = null;

    public function __construct()
    {
        $jsonData = file_get_contents(Config::datasource().'banner.json');
        $this->data = json_decode($jsonData);
    }
    public function create($data)
    {
        $productData = $this->prepare($data);
        $this->data[] = (object)(array)$productData;
        return $this->insert();
    }
    public function highestId()
    {
        $currentId = null;
       if(count($this->data)>0){
        $id = [];
        foreach($this->data as $product){
            $id[] = $product->id;
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
    public function prepare($data)
    {
        if(is_null($data->id) || empty($data->id)){
            $data->id = $this->highestId();
        }
        return $data;
    }
    public function insert()
    {
        if(file_exists(Config::datasource().'banner.json')){
            file_put_contents(Config::datasource().'banner.json',json_encode($this->data));
            return true;
        }else{
            echo "File Not Found";
            return false;
        }
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
    public function find($id)
    {
        $imageData = null;
        foreach($this->data as $images){
            if($images->id == $id){
                $imageData = $images;
            }
        }
        return $imageData;
    }
    public function update($data)
    {
        foreach($this->data as $key=> $banners){
            if($data->id == $banners->id){
                break;
            }
        }
        $this->data[$key]= $data;
        return $this->insert();
    }
    public function data()
    {
        return $this->data;
    }
}