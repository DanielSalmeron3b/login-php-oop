<?php 
class User {
    // Properties declaration
    private $_id;
    private $_name;
    private $_pass;
    private $_email;

    // Construct with two optionap parameters
    function __construct($name = '', $pass = ''){
        $this->_name = $name;
        $this->_pass = $pass;
    }

    // -- Methods to set/obtain info from the user --

    // ID
    public function setId($id){
        $this->_id = $id;
    }

    public function getId(){
        return $this->_id;
    }

    //Name
    public function setName($name){
        $this->_name = $name;
    }

    public function getName(){
        return $this->_name;
    }

    //Password
    public function setPass($pass){
        $this->_pass = $pass;
    }

    public function getPass(){
        return $this->_pass;
    }

    //Email
    public function setEmail($email){
        $this->_email = $email;
    }

    public function getEmail(){
        return $this->_email;
    }

    // Getting Data
    public function get_data(){
        $data["username"] = $this->_name;
        $data["pass"] = $this->_pass;
        return $data;
    }

    // Encrypt password with SHA254
    private function encryptPass($pass){
        $this->_pass = hash('sha256', $pass);
        return $this->_pass;
    }
}
