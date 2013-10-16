<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
		
	public function index()
	{
		$data['page_title'] = "Межевание, технические планы, сметные работы | Региональная Межевая Компания";

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	public function show($page_id)

	{
		switch ($page_id)
		{
			case 'tehplany':
				$data['page_title'] = "Технические планы";
				break;

			case 'megevanie':
				$data['page_title'] = "Межевание и постановка на кадастровый учет";
				break;

			case 'smety':
				$data['page_title'] = "Сметные работы";
				break;

			case 'company':
				$data['page_title'] = "О компании";
				break;

			case 'contacts':
				$data['page_title'] = "Связаться с нами";
				break;

			default:
				$data['page_title'] = "";
				break;
		}

		$data['page_title'] .= " | Региональная Межевая Компания";

		$data['benefits'] = $this->load->view('benefits','',true);

		$this->load->view('header', $data);
		$this->load->view($page_id, $data);
		$this->load->view('footer');
	}

}