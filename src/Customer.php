<?php 
namespace SOURCE;
USE SOURCE\Config;


class Customer{
    public $id = null;
    public $name = null;
    public $phone = null;
    public $email = null;
    public $age = null;
    public $address = null;
    public $img = null;
    public $passwoard = null;
    public $username = null;

    private $data;
    

    public function __construct()
    {
        $jsonData = file_get_contents(Config::datasource().'customers.json');
        // dd()
        $this->data = json_decode($jsonData);
        // dd($this->data);
    }
    public function create($data)
    {
        $CustomerData = $this->prepare($data);
        // dd($CustomerData);
        $this->data[] = (object)(array)$CustomerData;
        return $this->insert();

    }
    public function highestId()
    {
        if(count($this->data)>0){
            $id = [];
            foreach($this->data as $customer){
                $id[] = $customer->id;
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
        if(file_exists(Config::datasource().'customers.json')){
            file_put_contents(Config::datasource().'customers.json',json_encode($this->data));
            return true;
        }else{
         echo "File Not Found";
         return false;
        }
    }
    public function edit($id)
    {
        $customerEdit = null;
        foreach($this->data as $customer ){
            if($customer->id == $id){
                $customerEdit = $customer;
            }
        }
        return $customerEdit;
    }
    public function update($data)
    {
        foreach($this->data as $key=>$customer){
            if($customer->id == $data->id){
                break;
            }
        }
        $this->data[$key] = $data;
        return $this->insert();
    }
    public function view($id)
    {
        $customerView = null;
        foreach($this->data as $customer){
            if($customer->id == $id){
                $customerView = $customer;
            }
        }
        return $customerView;
    }
    public function find($id)
    {
        if(empty($id)){
            return false;
        }
        $CustomerData = null;
        foreach($this->data as $customer){
            if($customer->id == $id){
                $CustomerData = $customer;
            }
        }
        return $CustomerData;
    }
}