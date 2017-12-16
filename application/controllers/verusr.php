 <?php
/**
* 
*/
class verusr extends CI_Controller
{

        function __construct()
        {
            parent::__construct();
            $this->load->model('muser');

        }

    public function listauser(){
        $datos['persona'] = $this->muser->getestaciona();
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view('veruser',$datos); 
            $this->load->view('layout/footer');  
    }   
    
    function editestacion($id){
        $datos['persona'] = $this->muser->getestacion($id);
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view('editar',$datos); 
            $this->load->view('layout/footer'); 
      
    }   

    function actualizaestacion(){
            $id = $this->input->post("idPersona"); 
            $datos['nombre']=$this->input->post("nom");
            $datos['appaterno']=$this->input->post("appaterno");
            $datos['email']=$this->input->post("email");
            $datos['tipo_usuario']=$this->input->post("fecnac");

            $this->muser->updateestacion($datos,$id);       
            $this->listauser();
    }
    
    function deleteestacion($id){
        $this->muser->delestacion($id); 
        $this->listauser();      
    }


}



