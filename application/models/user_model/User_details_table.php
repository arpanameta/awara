<?php
class User_details_table extends CI_Model 
{
    public function users_details() 
    {
        $response=array();
        $query = $this->db->get('users');
        return $query->result_array();       
    }

    public function user_status_update_call($data)
    {
    	$response=array();
        $sql= "UPDATE users SET status=? WHERE id=?";
        $values= array($data['status'],$data['user_id']);
        if($this->db->query($sql,$values)) {
            $response['status']=200;
            $response['msg']="Updated Successfully";
            return $response;
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }
    }
    
}
