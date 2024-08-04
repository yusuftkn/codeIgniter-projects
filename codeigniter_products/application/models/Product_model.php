<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_products() {
		$query = $this->db->get('products');
		return $query->result();
	}


	public function insert_product($product_data) {
		$this->db->insert('products', $product_data);
		return $this->db->insert_id();
	}


	public function update_product($product_id, $product_data) {
		$this->db->where('id', $product_id);
		return $this->db->update('products', $product_data);
	}

	public function get_product_by_id($product_id) {
		$this->db->where('id', $product_id);
		return $this->db->get('products')->row_array();
	}

	public function get_product($product_id) {
		$this->db->where('id', $product_id);
		return $this->db->get('products')->row();
	}

	public function delete_product($product_id)
	{

		$this->db->where('id', $product_id);
		$this->db->delete('products');
		$product_deleted = ($this->db->affected_rows() > 0);


		$this->db->where('product_id', $product_id);
		$this->db->delete('product_images');
		$images_deleted = ($this->db->affected_rows() > 0);

		$this->db->where('product_id', $product_id);
		$this->db->delete('product_discounts');
		$discounts_deleted = ($this->db->affected_rows() > 0);

		return $product_deleted || $images_deleted || $discounts_deleted;
	}

	public function delete($id)
	{
		$this->load->model('Product_model');

		if ($this->Product_model->delete_product($id)) {
			$this->session->set_flashdata('success', 'Ürün başarıyla silindi.');
		} else {
			$this->session->set_flashdata('error', 'Ürün silinirken bir hata oluştu.');
		}

		redirect('products');
	}


	public function insert_discount($discount_data) {
		return $this->db->insert('product_discounts', $discount_data);
	}


	public function update_discount($discount_id, $discount_data)
	{
		$this->db->where('id', $discount_id);
		return $this->db->update('product_discounts', $discount_data);
	}


	public function delete_discounts_by_product_id($product_id) {
		$this->db->delete('product_discounts', array('product_id' => $product_id));
	}

	public function delete_discount($discount_id) {
		$this->db->where('id', $discount_id);
		return $this->db->delete('product_discounts');
	}


	public function get_discounts_by_product_id($product_id)
	{
		$this->db->where('product_id', $product_id);
		$query = $this->db->get('product_discounts');
		return $query->result_array();
	}



	public function get_all_products_with_images() {
		$this->db->select('products.*, GROUP_CONCAT(product_images.file_name) as images');
		$this->db->from('products');
		$this->db->join('product_images', 'products.id = product_images.product_id', 'left');
		$this->db->group_by('products.id');
		$query = $this->db->get();
		return $query->result();
	}


	public function get_product_images($id)
	{
		$this->db->select('file_name');
		$this->db->from('product_images');
		$this->db->where('product_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_image_by_product_id($id)
	{
		$this->db->select('file_name');
		$this->db->from('product_images');
		$this->db->where('product_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert_image($product_id, $file_name) {
		$image_data = array(
			'product_id' => $product_id,
			'file_name' => $file_name,
		);
		return $this->db->insert('product_images', $image_data);
	}

	public function update_image($product_id, $file_name) {
		$data = array(
			'product_id' => $product_id,
			'file_name' => $file_name,
		);
		return $this->db->insert('product_images', $data);
	}


	public function delete_image($product_id, $file_name)
	{
		$this->db->where('product_id', $product_id);
		$this->db->where('file_name', $file_name);
		return $this->db->delete('product_images');
	}













}
