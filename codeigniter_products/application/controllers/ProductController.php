<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ProductController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->library('session');

	}
	

	public function index()
	{
		//$data['products'] = $this->Product_model->get_all_products();

		$data['products'] = $this->Product_model->get_all_products_with_images();

		$this->load->view('admin/product/list', $data);

	}


	public function create()
	{

		$this->load->view('admin/product/create');

	}


	private function set_validation_rules()
	{
		$this->form_validation->set_rules('information_title', 'Ürün Başlık', 'required');
		$this->form_validation->set_rules('additional_information_title', 'Ürün Ek Bilgi Başlığı', 'required');
		$this->form_validation->set_rules('explanation', 'Ürün Ek Bilgi Açıklaması', 'required');
		$this->form_validation->set_rules('title', 'Başlık', 'required');
		$this->form_validation->set_rules('keywords', 'Anahtar Kelimeler', 'required');
		$this->form_validation->set_rules('description', 'Açıklama', 'required');
		$this->form_validation->set_rules('address', 'Adres', 'required');
		$this->form_validation->set_rules('product_description', 'Ürün Açıklaması', 'required');
		$this->form_validation->set_rules('video_kody', 'Video Kodu', 'required');
		$this->form_validation->set_rules('product_code', 'Ürün Kodu', 'required');
		$this->form_validation->set_rules('amount', 'Miktar', 'required|numeric');
		$this->form_validation->set_rules('extra_discount', 'Ek İndirim', 'required|numeric');
		$this->form_validation->set_rules('tax_rate', 'Vergi Oranı', 'required|numeric');
		$this->form_validation->set_rules('price_tl', 'TL Fiyatı', 'required');
		$this->form_validation->set_rules('price_usd', 'USD Fiyatı', 'required');
		$this->form_validation->set_rules('price_eur', 'EUR Fiyatı', 'required');
		$this->form_validation->set_rules('second_price_tl', 'İkinci TL Fiyatı', 'required');
		$this->form_validation->set_rules('falloutofstock', 'Stok Dışı', 'required');
		$this->form_validation->set_rules('situation', 'Durum', 'required');
		$this->form_validation->set_rules('feature_status', 'Özellik Durumu', 'required');
		$this->form_validation->set_rules('new_validity_period', 'Yeni Geçerlilik Süresi', 'required');
		$this->form_validation->set_rules('arrangement', 'Düzenleme', 'required');
		$this->form_validation->set_rules('show_on_homepage', 'Anasayfada Göster', 'required');
		$this->form_validation->set_rules('new_product', 'Yeni Ürün', 'required');
		$this->form_validation->set_rules('installment', 'Taksit', 'required');
		$this->form_validation->set_rules('validity_period', 'Geçerlilik Süresi', 'required');
		$this->form_validation->set_message('required', '{field} bu alan doldurması zorunludur.');
	}



	public function store()
	{
		$this->load->library('form_validation');

		$this->set_validation_rules();

		if ($this->form_validation->run() === FALSE) {
			$data['errors'] = $this->form_validation->error_array();
			$this->load->view('admin/product/create');
		} else {
			$product_data = array(
				'information_title' => $this->input->post('information_title'),
				'additional_information_title' => $this->input->post('additional_information_title'),
				'explanation' => $this->input->post('explanation'),
				'title' => $this->input->post('title'),
				'keywords' => $this->input->post('keywords'),
				'description' => $this->input->post('description'),
				'address' => $this->input->post('address'),
				'product_description' => $this->input->post('product_description'),
				'video_kody' => $this->input->post('video_kody'),
				'product_code' => $this->input->post('product_code'),
				'amount' => $this->input->post('amount'),
				'extra_discount' => $this->input->post('extra_discount'),
				'tax_rate' => $this->input->post('tax_rate'),
				'sale_price' => $this->input->post('sale_price'),
				'price_tl' => $this->input->post('price_tl'),
				'price_usd' => $this->input->post('price_usd'),
				'price_eur' => $this->input->post('price_eur'),
				'second_price_tl' => $this->input->post('second_price_tl'),
				'falloutofstock' => $this->input->post('falloutofstock'),
				'situation' => $this->input->post('situation'),
				'feature_status' => $this->input->post('feature_status'),
				'new_validity_period' => $this->input->post('new_validity_period'),
				'arrangement' => $this->input->post('arrangement'),
				'show_on_homepage' => $this->input->post('show_on_homepage'),
				'new_product' => $this->input->post('new_product'),
				'installment' => $this->input->post('installment'),
				'validity_period' => $this->input->post('validity_period')
			);

			$product_data['price_tl'] = is_array($product_data['price_tl']) ? implode(',', $product_data['price_tl']) : $product_data['price_tl'];
			$product_data['price_usd'] = is_array($product_data['price_usd']) ? implode(',', $product_data['price_usd']) : $product_data['price_usd'];
			$product_data['price_eur'] = is_array($product_data['price_eur']) ? implode(',', $product_data['price_eur']) : $product_data['price_eur'];

			if ($this->Product_model->insert_product($product_data)) {
				$product_id = $this->db->insert_id();
			} else {
				log_message('error', 'Ürün eklenemedi: ' . print_r($product_data, true));
				$this->session->set_flashdata('error', 'Ürün eklenirken bir hata oluştu.');
				$this->load->view('admin/product/create');
				return;
			}

			$this->load->library('upload');
			$config['upload_path'] = './uploads/images/products/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = 2048;

			if (!empty($_FILES['product_image']['name'])) {
				$_FILES['file']['name'] = $_FILES['additional_images']['name'];
				$_FILES['file']['type'] = $_FILES['additional_images']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['additional_images']['tmp_name'];
				$_FILES['file']['error'] = $_FILES['additional_images']['error'];
				$_FILES['file']['size'] = $_FILES['additional_images']['size'];

				$config['file_name'] = time() . '_' . $_FILES['file']['name'];
				$this->upload->initialize($config);

				if ($this->upload->do_upload('file')) {
					$upload_data = $this->upload->data();
					$this->Product_model->insert_image($product_id, $upload_data['file_name']);
				} else {
					log_message('error', 'Ürün görseli yükleme işlemi başarısız oldu: ' . $this->upload->display_errors());
				}
			}

			if (!empty($_FILES['additional_images']['name'][0])) {
				$files = $_FILES;
				$cpt = count($_FILES['additional_images']['name']);

				for ($i = 0; $i < $cpt; $i++) {
					$_FILES['file']['name'] = $files['additional_images']['name'][$i];
					$_FILES['file']['type'] = $files['additional_images']['type'][$i];
					$_FILES['file']['tmp_name'] = $files['additional_images']['tmp_name'][$i];
					$_FILES['file']['error'] = $files['additional_images']['error'][$i];
					$_FILES['file']['size'] = $files['additional_images']['size'][$i];

					$config['file_name'] = time() . '_' . $_FILES['file']['name'];
					$this->upload->initialize($config);

					if ($this->upload->do_upload('file')) {
						$upload_data = $this->upload->data();
						$this->Product_model->insert_image($product_id, $upload_data['file_name']);
					} else {
						log_message('error', 'Ek ürün görseli yükleme işlemi başarısız oldu: ' . $this->upload->display_errors());
					}
				}
			}

			$product_discounts = $this->input->post('product_discounts');
			$producId = ['product_id' => $product_id];
			foreach ($product_discounts as $product_discount) {
				$discount_data = array_merge($product_discount, $producId);
				if (!$this->Product_model->insert_discount($discount_data)) {
					log_message('error', 'Ürün indirimi eklenemedi: ' . print_r($discount_data, true));
				}
			}

			$this->session->set_flashdata('success', 'Ürün başarıyla eklendi.');
			redirect('products');
		}
	}



	public function edit($id)
	{
		$data['product'] = $this->Product_model->get_product($id);

		$data['discounts'] = json_decode(json_encode($this->Product_model->get_discounts_by_product_id($id)), true);


		$data['product_images'] = $this->Product_model->get_product_images($id);


		$this->load->view('admin/product/create', $data);
	}


	public function update($id)
	{
		$this->load->library('form_validation');
		$this->set_validation_rules();


		if ($this->form_validation->run() === FALSE) {
			$data['product'] = $this->Product_model->get_product_by_id($id);
			$data['errors'] = $this->form_validation->error_array();
			$this->load->view('admin/product/create', $data);
		} else {
			$product_data = array(
				'information_title' => $this->input->post('information_title'),
				'additional_information_title' => $this->input->post('additional_information_title'),
				'explanation' => $this->input->post('explanation'),
				'title' => $this->input->post('title'),
				'keywords' => $this->input->post('keywords'),
				'description' => $this->input->post('description'),
				'address' => $this->input->post('address'),
				'product_description' => $this->input->post('product_description'),
				'video_kody' => $this->input->post('video_kody'),
				'product_code' => $this->input->post('product_code'),
				'amount' => $this->input->post('amount'),
				'extra_discount' => $this->input->post('extra_discount'),
				'tax_rate' => $this->input->post('tax_rate'),
				'sale_price' => $this->input->post('sale_price'),
				'price_tl' => is_array($this->input->post('price_tl')) ? implode(',', $this->input->post('price_tl')) : $this->input->post('price_tl'),
				'price_usd' => is_array($this->input->post('price_usd')) ? implode(',', $this->input->post('price_usd')) : $this->input->post('price_usd'),
				'price_eur' => is_array($this->input->post('price_eur')) ? implode(',', $this->input->post('price_eur')) : $this->input->post('price_eur'),
				'second_price_tl' => $this->input->post('second_price_tl'),
				'falloutofstock' => $this->input->post('falloutofstock'),
				'situation' => $this->input->post('situation'),
				'feature_status' => $this->input->post('feature_status'),
				'new_validity_period' => $this->input->post('new_validity_period'),
				'arrangement' => $this->input->post('arrangement'),
				'show_on_homepage' => $this->input->post('show_on_homepage'),
				'new_product' => $this->input->post('new_product'),
				'installment' => $this->input->post('installment'),
				'validity_period' => $this->input->post('validity_period'),
			);

			if ($this->Product_model->update_product($id, $product_data)) {
				$this->load->library('upload');
				$config['upload_path'] = './uploads/images/products/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = 2048;

				$existing_images = $this->Product_model->get_image_by_product_id($id);
				$existing_image_paths = array_column($existing_images, 'file_name');

				$form_existing_images = $this->input->post('existing_images') ? $this->input->post('existing_images') : [];

				if (!empty($_FILES['additional_images']['name'][0])) {
					$files = $_FILES;
					$cpt = count($_FILES['additional_images']['name']);

					for ($i = 0; $i < $cpt; $i++) {
						if (!empty($_FILES['additional_images']['name'][$i])) {
							$_FILES['file']['name'] = $files['additional_images']['name'][$i];
							$_FILES['file']['type'] = $files['additional_images']['type'][$i];
							$_FILES['file']['tmp_name'] = $files['additional_images']['tmp_name'][$i];
							$_FILES['file']['error'] = $files['additional_images']['error'][$i];
							$_FILES['file']['size'] = $files['additional_images']['size'][$i];

							$config['file_name'] = time() . '_' . $_FILES['file']['name'];
							$this->upload->initialize($config);

							if ($this->upload->do_upload('file')) {
								$upload_data = $this->upload->data();
								if (isset($form_existing_images[$i])) {
									$file_path = './uploads/images/products/' . $form_existing_images[$i];
									if (file_exists($file_path)) {
										unlink($file_path);
									}
									$this->Product_model->delete_image($id, $form_existing_images[$i]);
								}
								$this->Product_model->insert_image($id, $upload_data['file_name']);
							}
						}
					}
				}
				foreach ($existing_image_paths as $image_path) {
					if (!in_array($image_path, $form_existing_images)) {
						$file_path = './uploads/images/products/' . $image_path;
						if (file_exists($file_path)) {
							unlink($file_path);
						}
						$this->Product_model->delete_image($id, $image_path);
					}
				}
				$product_discounts = $this->input->post('product_discounts');
				if (!empty($product_discounts)) {
					$existing_discounts = $this->Product_model->get_discounts_by_product_id($id);
					$existing_discount_ids = array_column($existing_discounts, 'id');
					$incoming_discount_ids = array_column($product_discounts, 'id');

					foreach ($product_discounts as $product_discount) {
						$discount_data = array_merge($product_discount, ['product_id' => $id]);
						if (isset($product_discount['id']) && in_array($product_discount['id'], $existing_discount_ids)) {

							$this->Product_model->update_discount($product_discount['id'], $discount_data);
						} else {

							$this->Product_model->insert_discount($discount_data);
						}
					}

					foreach ($existing_discount_ids as $discount_id) {
						if (!in_array($discount_id, $incoming_discount_ids)) {
							$this->Product_model->delete_discount($discount_id);
						}
					}
				}

				$this->session->set_flashdata('success', 'Ürün başarıyla güncellendi.');
			} else {
				$this->session->set_flashdata('error', 'Ürün güncellenirken bir hata oluştu.');
			}

			redirect('products');
		}
	}


	public function delete($id)
	{
		$this->load->model('Product_model');
		$result = $this->Product_model->delete($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Ürün başarıyla silindi.');
		} else {
			$this->session->set_flashdata('error', 'Ürün silinirken bir hata oluştu.');
		}

		redirect('products');
	}



}
