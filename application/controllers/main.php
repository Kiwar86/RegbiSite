<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Main extends CI_Controller{
        
        public function index(){
            $this->start();
        }
        public function start(){
             $this->load->model('model_users');
            $arr['base_url']=base_url(). 'index.php/main/news';
            $arr['total_rows']=100;
            $arr['per_page']=5;
            $arr['first_link']='Первая';
            $arr['last_link']='Последняя';
            $this->pagination->initialize($arr);
            $date['query']=$this->model_users->load_news($arr['per_page'],$this->uri->segment(3));
            $this->load->view('index',$date);
        }
        public function login(){
            $this->load->view('login');
        }
        public function reg(){
           $this->load->view('reg');
        }
        public function games(){
           $this->load->view('games');
           } 
         public function trener(){
            $this->load->view('trener');
        } 
        public function kapitan(){
            $this->load->view('kapitan');
        } 
        public function ataka(){
            $this->load->view('ataka');
        }  
        public function zasita(){
            $this->load->view('zasita');
        } 
        public function video(){
            $this->load->view('video');
        }  
        public function komanda(){
            $this->load->view('komanda');
        } 
        public function Gor(){
            $this->load->view('Gor');
        } 
        public function inventar(){
            $this->load->view('inventar');
        }
        public function asessuar(){
            $this->load->view('asessuar');
        }
        public function perchatki(){
            $this->load->view('perchatki');
        }
        public function Sbornai(){
            $this->load->view('Sbornai');
        }
        public function moskva(){
            $this->load->view('moskva');
        }
        public function SP(){
            $this->load->view('SP');
        }
        public function Rostov(){
            $this->load->view('Rostov');
        }
        public function Primore(){
            $this->load->view('Primore');
        }
        public function Preodolenie(){
            $this->load->view('Preodolenie');
        }
        public function MO(){
            $this->load->view('MO');
        }
        public function Legion(){
            $this->load->view('Legion');
        }
        
        public function Vladik(){
            $this->load->view('Vladik');
        }
        public function add_news(){
            $this->load->view('add_news');
            
        }
        public function communication(){
            $this->load->view('communication');
            
        }

        public function milotpr(){
            mail($this->input->post('email'), "Спасибо что связались с нами","Мы ответим вам в ближайщее время!");
            $pho=$this->input->post ('phone');
            $mail=$this->input->post ('email');
            $mess=$this->input->post ('message2');
            $strr="$pho"."\n"."$mail"."\n"."$mess".'  ';
            mail('comarov.b@yandex.ru', $this->input->post('name'),$strr);
            //print_r($_POST);
            redirect();
        }
        
        

         public function login_prover(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('login', 'login','required|callback_errorlogin', array('required'=>'Введите логин'));
            $this->form_validation->set_rules('password1', 'Password1','required',array('required'=>'Введите пароль'));
            if ($this->form_validation->run()){
               $d=array('login' => $this->input->post('login'), 'id_sess'=> 1);
               $this->session->set_userdata($d);
               //$this->load->view('index');
               redirect('main/index');
            }
            else{
                $this->load->view('login');
            }
          }

           public function reg_prover(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login22222','required|trim', array('required'=>'Введите логин'));
        $this->form_validation->set_rules('password1', 'pass1','required',array('required'=>'Введите пароль'));
        $this->form_validation->set_rules('password2', 'pass2','required|matches[password1]',array('required'=>'Введите пароль еще раз', 
                                                                                                    'matches'=>'Пароли не совпадают'));
         //$this->form_validation->set_rules('kap','Капча','required|callback_proverka_capchi', array('reguired'=>'Введите код с картинки'));//проверка капчи
        if ($this->form_validation->run()){
            $this->load->model('model_users');
            if ($this->model_users->add_users()){
              $this->login();
                          }
            else{
               $this->reg();
            }
        }
        else{
            $this->reg();
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
       
       
                public function errorlogin(){
            $this->load->model('model_users');
            if ($this->model_users->get_users()){
                return true;
                
            }
            else {
                $this->form_validation->set_message('errorlogin','Неверный логин/пароль');
                return false;
            }                     
         }
         
         
       public function  vixod(){
            $this->session->sess_destroy();
             unset($_SESSION['login'],$_SESSION['id_sess']);//уничтожения эдементов сессии
           redirect('main/index');
          //echo 'nmbmmn';
         }
         
       public function  news(){
            $this->load->model('model_users');
            $arr['base_url']=base_url(). 'index.php/main/news';
            $arr['total_rows']=100;
            $arr['per_page']=5;
            $arr['first_link']='Первая';
            $arr['last_link']='Последняя';
            $this->pagination->initialize($arr);
            $date['query']=$this->model_users->load_news($arr['per_page'],$this->uri->segment(3));
            $this->load->view('news',$date);
            
         }
       public function  full_news($id){
            $this->load->model('model_users');
            $data['query']=$this->model_users->load_full_news($id);
            $data['query2']=$this->model_users->load_full_news_photo($id);
            $this->load->view('full_news',$data);
          }

          
       public function add_news_db(){
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title','titel','required',array('required'=>'Введите названия статьи'));
            $this->form_validation->set_rules('min_text','min_text','required',array('required'=>'Введите краткое описание'));
            $this->form_validation->set_rules('text','text','required',array('required'=>'Введите Текст статьи'));
            $this->form_validation->set_rules('data','data','required',array('required'=>'Введите Дату'));
            if ($this->form_validation->run()){
            $this->load->model('model_users');
            $this->model_users->add_news_in_bd();
            $this->news();
                        
          }
        else{
            $this->add_news();
        }     

           }
}
?>