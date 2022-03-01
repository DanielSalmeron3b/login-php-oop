<?php
class Login
{
    private $_id;
    private $_name;
    private $_pass;
    private $_satus = false;

    // Construct with two optionap parameters
    function __construct($name = '', $pass = '')
    {
        $this->_name = $name;
        $this->_pass = $pass;
    }

    // -- Methods to set/obtain info from the user --

    // ID
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }

    //Name
    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    //Password
    public function setPass($pass)
    {
        $this->_pass = $pass;
    }

    public function getPass()
    {
        return $this->_pass;
    }

    // Check if the password is OK and return true or false
    public function checkUser($row_data)
    {
        $username = array('teacher', 'student', 'nestor', 'daniel');
        $password = array('collegeFAC', 'FACcollege', 'nestor', 'P@$$w0rD');

        if (in_array($row_data["pass"], $password) && in_array($row_data["username"], $username)) {
            $this->_status = true;
        } else {
            $this->_status = false;
        }
        return $this->_status;
    }

    // Checks the status of the session
    public function getStatus(){
        return $this->_satus;
    }

    // Closes the session and deletes the variables
    public function closeSession(){
        $this->_name = '';
        $this->_pass = '';
        $this->_status = false;
    }
}
?>