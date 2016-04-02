<?php
class Admin_page_details extends CI_Model 
{
    public function admin_page_users_details() 
    {
        $response=array();
        $sql="select * from user_login";
        $query=$this->db->query($sql);
        foreach($query->result() as $row)
        {
            $temp['id']=$row->id;
            $temp['fname']=$row->fname;
            $temp['lname']=$row->lname;
            $temp['email']=$row->email;            
            $temp['status']=$row->status;
            $response[]=$temp;
        }
        return $response;        
    }
    
}

