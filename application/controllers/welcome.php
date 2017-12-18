<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function home()
	{
		$this->load->model('Queries');
		$posts = $this->Queries->getPosts();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}
	public function create()
	{
		$this->load->view('create');
	}
	public function update($numevento)
	{
		$this->load->model('Queries');
		$post = $this->Queries->getSinglePosts($numevento);
		$this->load->view('update',['post'=>$post]);

	}
	public function save()
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('nombre', 'Objetivo', 'required');
		$this->form_validation->set_rules('nombre', 'Hora', 'required');
		$this->form_validation->set_rules('nombre', 'date_created', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required',array('required' => 'You must provide a %s.'));
        if ($this->form_validation->run())//Si el formulario es correcto envia los parametos
        {
        	$data = $this->input->post();//envia los datos
        	unset($data['submit']);
        	$this->load->model('Queries');//carga el modelo y traeme la funcion
        	if($this->Queries->addPost($data)) //enviale los parametros optenidos
        	{
        	$this->session->set_flashdata('msg', 'Enviado Satisfactoriamente');
        	}else
        	{
        	$this->session->set_flashdata('msg', 'Error al enviar');
        	}
        	return redirect('welcome/home');
        }
        else
        {
			$this->load->view('create');
        }
	}
	public function change($numevento)
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('nombre', 'Objetivo', 'required');
		$this->form_validation->set_rules('nombre', 'Hora', 'required');
		$this->form_validation->set_rules('nombre', 'date_created', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required',array('required' => 'You must provide a %s.'));
        if ($this->form_validation->run())//Si el formulario es correcto envia los parametos
        {
        	$data = $this->input->post();//envia los datos
        	unset($data['submit']);
        	$this->load->model('Queries');//carga el modelo y traeme la funcion
        	if($this->Queries->updatePost($data,$numevento))
        	{
        	$this->session->set_flashdata('msg', 'Actualizado correctamente ');
        	}else
        	{
        	$this->session->set_flashdata('msg', 'ERROR AL ACTUALIZAR ');
        	}
        	return redirect('welcome/home');
        }
        else
        {
			$this->load->view('create');
        }
	}
	public function view($numevento)
	{
$this->load->model('Queries');
		$post = $this->Queries->getSinglePosts($numevento);
		$this->load->view('view',['post'=>$post]);
	}
	public function delete($numevento)
	{
$this->load->model('Queries');
	if($this->Queries->deletePosts($numevento))
	{
		$this->session->set_flashdata('msg', 'eliminado correctamente');
	}else
	{
		$this->session->set_flashdata('msg', 'error al eliminar');
	}
	        	return redirect('welcome/home');

	}
}
