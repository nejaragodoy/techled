<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class spot_model extends CI_Model  {


       function __construct(){
             parent::__construct();
             $this->load->library('email');
       }

       public function enviar_mail($datos){


            $subject  = 'Nueva consulta Spot Service';
            $template = $this->load->view('email_template',$datos,TRUE);



            $this->email->from('info@spotservice.com', 'Spot Service');
            $this->email->to('horacio@abm.la,agustina@abm.la,reservas@spotservice.com.ar,webmaster@abmo.com.ar'); 
         

            $this->email->subject($subject);
            $this->email->message( $template);  
            if(!empty($datos['ruta'])){

                $this->email->attach($datos['ruta']);
            }
            $this->email->send();

            return true;
         
           
           
          
       }
}
?>