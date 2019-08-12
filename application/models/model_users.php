<?php
	class Model_users extends CI_Model{
	   
    public function add_users(){
            $arr=array(
            'id'=>'',
            'login'=>$this->input->post('login'),
            'password'=>$this->input->post('password1'));
            $g=$this->db->insert('users', $arr);
            if ($g){
                return true;
            }
            else {
                return false;
            }
       }
       
    public function get_users(){
        
        $this->db->where('login', $this->input->post('login'));
        $this->db->where('password', $this->input->post('password1'));
        $a=$this->db->get('users');
        if ($a->num_rows()==1){
            return true;
        }
        else{
            return false;
        } 
        
       }
       
       
    public function load_news($num,$count){
                $this->db->order_by('date','asc');
                $g=$this->db->get('news', $num,$count);
                return $g;
            }
            
    public function load_full_news($id){
                $this->db->where('id',$id);
                $g=$this->db->get('news');
                return $g;
            }
                public function load_full_news_photo($id){
                $this->db->where('news',$id);
                $g=$this->db->get('photo');
                return $g;
            }
    public function add_news_in_bd(){
               $arr=array(
            'id'=>'',
            'title'=>$this->input->post('title'),
            'min_text'=>$this->input->post('min_text'),'full_text'=>$this->input->post('text'),'photo'=>$this->input->post('photo'),'date'=>$this->input->post('data'));
            $g=$this->db->insert('news', $arr);
            if ($g){
                return true;
            }
            else {
                return false; 
            }
       }
       
       
       
	
}