<?php
class Template {
	protected $_ci;
	
	function __construct()
	{
		$this->_ci =&get_instance();
	}

	function display($template,$data=null)
	{
		$data['contents']=$this->_ci->load->view($template,$data, true);
		$this->_ci->load->view('index',$data);
	}
}