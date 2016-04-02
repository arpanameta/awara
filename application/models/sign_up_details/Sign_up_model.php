
<?php
class Sign_up_model extends CI_Model {
    public function add_new_user($data) 
    {
        $response=array();
        $type=1;
        $status="active";
        if($this->db->query("INSERT INTO `user_login` (fname, lname, email, password, gender, month, day, year, type, status) VALUES ('$data[fname]','$data[lname]','$data[email]','$data[password]','$data[gender]','$data[month]','$data[day]','$data[year]', '$type','$status')"))
        {
            $response['status']=200;
            $response['msg']="Registration Successfull plz login to continue";
            return $response;
        }
        else
        {
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }
    }
}