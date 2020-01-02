<?php
	class uploadgambar extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('session');
			
		}

		function showform(){
			$data["scriptaksi"]="uploadgambar/uploadpicture";
			$data["aksi"]="Upload";
			$data["error"]=(isset($data["error"]))?$data["error"]:"";
			$viewfile="uploadgambar_view";
			$this->load->view($viewfile,$data);
		}


		function uploadpicture(){
			$config['upload_path']='./asset/upload';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['overwrite']=false;
			$config['max_size']='2000000';
			$this->load->library('upload',$config);

			if(!$this->upload->do_upload())
			{
				$error=array('error'=>$this->upload->display_errors());
				//$this->showform($error);
				echo '<script language="javascript">';
				echo 'alert($error)';
				echo '</script>';
				echo '<script> window.close(); </script>';
				
			}
			 else
			{
				//$data=array('upload_data'=>$this->upload->data());
				$upload_data=$this->upload->data();
				$nama_gambar=$upload_data['file_name'];
				$this->session->set_flashdata('data_gambar',$nama_gambar);
				echo '<script language="javascript">';
				echo 'alert("Gambar '.$nama_gambar.' berhasil diupload")';
				echo '</script>';
				echo '<script> window.close(); </script>';
			}
		}

	}







/*if ( ! defined ('BASEPATH')) exit(' no direct script access allowed');

class uploadgambar extends CI_Controller {

	public function index ()

		{
			$this-> load -> view ('uploadgambar_view');

		}

		public function upload_file ()

		{

			$status="";
			$msg="";
			$filename='product_pic';

			if(empty($_POST['title']))
			{
				$status="error";
				$msg="Please enter title";

			}

			if($status != "error")
			{
				$config['upload_path'] = './images';
				$config['allowed types'] = 'gif|png|jpg|jpeg';
				$config['overwrite']=false;


				$this-> load -> library ('upload',$config);


				if(!$this-> upload -> do_upload-> ($filename))

				{
					$status = 'error';
					$msg = $this -> upload -> display_errors('','');

				}

				else

				{
					$this-> upload -> model('uploadgambar_model');
					$data = $this -> upload -> data ();
					$file_id =$this -> file_model ->insert_file($data['file_name'],$_POST['title']);
					if($file_id)
					{
						redirect('uploadgambar/index');

					}
					else
					{
						unlink($data['full_path']);
						$status ="error";
						$msg ="please try again";

					}

			
				}

				@unlink($_FILES[$file_name]);

			}

			echo json_encode(array('status'=>$status,'msg'=>$msg));


		}
	
}



*/


 ?>