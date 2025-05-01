<?php
class Tests
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function get_sleep($id) 
    {
        $this->db->query('SELECT * FROM sleep WHERE test_id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        if($row)
        {
            return $row;
        }
        else
        {
            return false;
        }
    }

    public function get_stress($id) 
    {
        $this->db->query('SELECT * FROM stress WHERE test_id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        if($row)
        {
            return $row;
        }
        else
        {
            return false;
        }
    }

}

?>