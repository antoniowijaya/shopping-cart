<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('model_customer');
	}

	public function index()
	{
		//nothing on index (yet)
	}

	public function payment_confirmation($invoice_id = 0)
	{
		$this->form_validation->set_rules('invoice_id', 'Invoice ID', 'required|integer');
		$this->form_validation->set_rules('amount', 'Amount Transfered', 'required|integer');

		if ($this->form_validation->run() == FALSE)
		{
			if($this->input->post('invoice_id')){
				$data['invoice_id'] = set_value('invoice_id');
			} else {
				$data['invoice_id'] = $invoice_id;
			}
			$this->load->view('customer/form_payment_confirmation', $data);
		}else{
			//proceed to mark the record on database table
		}	
	}

	public function shopping_history()
	{	
		$user = $this->session->userdata('username');
		$data['history'] = $this->model_customer->get_shopping_history($user);
		$this->load->view('customer/shopping_history_list', $data);
	}

}

/* End of file customer.php */
/* Location: ./application/controllers/customer.php */