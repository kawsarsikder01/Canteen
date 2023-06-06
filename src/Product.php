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
    private $data;
    private $conn;
    private $user = 'root';
    private $password = '';
    private $database = 'campus_canteen';



    public function __construct(){
       
       
            $this->connectdb();
        
        
    }


    //reading all
    public function index()
    {
        // $stme = Config::connectdb();
        $query = "SELECT * FROM products";
        $stmt = $this->conn->prepare($query);
        // dd($this->conn);
        $stmt->execute();
        // $stmt->setFetchMode(\PDO::FETCH_CLASS, "\BITM\SEIP12\Slider");
       $products =  $stmt->fetchAll(\PDO::FETCH_OBJ);
       return $products;
    }

    public function create()
    {

    }
    
    public function store($data)
    {
        $result = false;
        $productData = $this->prepare($data);
        // dd($productData);
        // $dataProducts = file_get_contents(Config::datasource().'products.json');
        // $products = json_decode($dataProducts);
        $this->data[] = (object)(array)$productData;
        // if(file_exists(Config::datasource().'products.json')){
        //     $result = file_put_contents(Config::datasource().'products.json',json_encode($this->data));
        // }else{
        //     echo "file not found";
        // }
        return $this->insert(); //$result;

    }
    public function store2($data){
        $stmt = $this->conn->prepare('INSERT INTO products(uuid,name,type,category,description,costPrice,sellPrice,img,esale,outdoor)VALUES(:uuid,:name,:type,:category,:description,:costPrice,:sellPrice,:img,:esale,:outdoor)');
        $stmt->bindParam(':uuid',$data->uuid,\PDO::PARAM_STR);
        $stmt->bindParam(':name',$data->name,\PDO::PARAM_STR);
        $stmt->bindParam(':type',$data->type,\PDO::PARAM_STR);
        $stmt->bindParam(':category',$data->category,\PDO::PARAM_STR);
        $stmt->bindParam(':description',$data->description,\PDO::PARAM_STR);
        $stmt->bindParam(':costPrice',$data->costPrice,\PDO::PARAM_STR);
        $stmt->bindParam(':sellPrice',$data->sellPrice,\PDO::PARAM_STR);
        $stmt->bindParam(':img',$data->img,\PDO::PARAM_STR);
        $stmt->bindParam(':esale',$data->esale,\PDO::PARAM_STR);
        $stmt->bindParam(':outdoor',$data->outdoor,\PDO::PARAM_STR);

        try{
            $stmt->execute();
            return true;
        }catch( \Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function show($id)
    {
        // $this->data
        // $dataProducts = file_get_contents(Config::datasource().'products.json');
        // $products = json_decode($dataProducts);
        $productView = null;
        foreach($this->data  as $product){
            if($product->id == $id ){
                $productView = $product;
                break;
            }
        }
        return $productView;
    }
    public function show2($id)
    {
        $query = "SELECT * FROM products WHERE id =:id";
        $stmt = $this->conn->prepare($query);
        $data = [
            ":id"=>$id
        ];
        $stmt->execute($data);
      return  $result = $stmt->fetch(\PDO::FETCH_OBJ);
    }
    public function highestId()
    {
        $currentId = null;
        // $dataProducts = file_get_contents(Config::datasource().'products.json');
        // $products= json_decode($dataProducts);
        if(count($this->data)>0){
            $id = [];
            foreach($this->data as $product){
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
    public function prepare($data)
    {
       if(is_null($data->id)  || empty($data->id)){
        $data->id = $this->highestId();
       }
        return $data;
    }
    public function edit($id)
    {
        // $dataProducts = file_get_contents(Config::datasource().'products.json');
        // $products = json_decode($dataProducts);
        $productData;
        foreach($this->data as $product){
            if($product->id == $id){
                $productData = $product;
                break;
            }
        }
        // dd($productData);
        return $productData;
    }
    public function update($data)
    {
        $result = false;

        // $dataProducts = file_get_contents(Config::datasource().'products.json');
        // $products = json_decode($dataProducts);
        foreach($this->data as $key=> $product){
            if($product->id == $data->id){
                break;
            }
        }
        $this->data[$key]= $data;
        // if(file_exists(Config::datasource().'products.json')){
        //     $result = file_put_contents(Config::datasource().'products.json',json_encode($this->data));
        // }else{
        //     echo "File not found";
        // }
        return $this->insert();
    }
    public function update2($data)
    {
        $query = "UPDATE products SET name=:name,type=:type,category=:category,description=:description,costPrice=:costPrice,sellPrice=:sellPrice,img=:img,esale=:esale,outdoor=:outdoor WHERE id=:id ";
        $stmt = $this->conn->prepare($query);
        $data = [
            ":name"=>$data->name,
            ":type"=>$data->type,
            ":category"=>$data->category,
            ":description"=>$data->description,
            ":costPrice"=>$data->costPrice,
            ":sellPrice"=>$data->sellPrice,
            ":img"=>$data->img,
            ":esale"=>$data->esale,
            ":outdoor"=>$data->outdoor,
            ":id"=>$data->id
        ];
        try{
            $stmt->execute($data);
            return true;
        }
        catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
    // public function edit_data($id,$name,$type,$category,$description,$costPrice,$sellPrice,$img,$esale,$outdoor)
    // {
       
    //     $product = new Product();
    //     $product->id = $id;
    //     $product->name = $name;
    //     $product->type = $type;
    //     $product->category = $category;
    //     $product->description = $description;
    //     $product->costPrice = $costPrice;
    //     $product->sellPrice = $sellPrice;
    //     $product->img = $img;
    //     $product->esale = $esale;
    //     $product->outdoor = $outdoor;

    //     return $product;

    // }
    public function find($id = null)
    {
        if(is_null($id) || empty($id) ){
            return false;
        }
        // $dataProducts = file_get_contents(Config::datasource().'products.json');
        // $products = json_decode($dataProducts);
        // var_dump($products);
        // die();
        $productData = null;
        foreach($this->data as  $product){
            if($product->id == $id){
                $productData = $product;
                break;
            }
        }
        return $productData;
    }
    public function trash()
    {

    }
    public function destroy($id = null)
    {
        if(empty($id)){
            return;
        }
        foreach($this->data as $key=>$product){
            if($product->id == $id){
                break;
            }
        }
        unset($this->data[$key]);
        $this->data = array_values($this->data);

       return $this->insert($this->data);
    }
    public function destroy2($id)
    {
        $query = "DELETE FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $data = [
            ":id"=>$id
        ];
        try{
            $stmt->execute($data);
            return true;
        }catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }

    }
    public function delete()
    {

    }
    public function insert()
    {
        if(file_exists(Config::datasource().'products.json')){
             file_put_contents(Config::datasource().'products.json',json_encode($this->data));
             return true;
        }else{
            echo "file not found";
            return false;
        }
    }
    private function connectdb()
    {
        try{
           return $this->conn = new \PDO('mysql:host=localhost; dbname=campus_canteen; charset=utf8mb4;', $this->user, $this->password );
            // if($this->conn){
            //     // dd("success");
            // };
            // return true;
        }catch(\Exception $e){
             echo$e->getMessage();
            //  return false;
        }
    }
    
}