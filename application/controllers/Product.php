<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('MF_product', 'product');
	}
	public $perPage = 3;


	public function index()
	{
		$data['category'] = $this->product->getPrductCategories();
		$this->template->load('front/_templates/master', 'front/product', $data);
	}
	public function detail($slug = null)
	{
		$data['detailP'] = $this->product->getProductBySlug($slug);
		$this->template->load('front/_templates/master', 'front/detail_product', $data);
	}

	function fetchProduct()
	{
		$output = '';
		$data = $this->product->getProducts($this->input->post('limit'), $this->input->post('start'));
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				if ($row->discount > 0) {
					$discount = '<span class="badge badge-danger" style="font-size:14px !important">' . $row->discount . '% </span>';
					$price = '<span class="price">' . rupiah($row->last_price) . '</span>
                    <del class="price-old">' . rupiah($row->first_price) . '</del>';
				} else {
					$discount = '';
					$price = '<span class="price">' . rupiah($row->last_price) . '</span>';
				}
				$output .= '
                <div class=".col-xl-3 col-md-4 col-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">'
					. $discount .
					'<img src="' . base_url("assets/img/" . $row->img_product) . '">
                            <a class="btn-overlay" href="' . site_url('product/detail/' . $row->slug_product) . '"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <div class="fix-height">
                                <a href="' . site_url('product/detail/' . $row->slug_product) . '" class="title">' . $row->name_product . '</a>
                                <div class="price-wrap mt-2">
                                    ' . $price . '
                                </div> <!-- price-wrap.// -->
                            </div>
                            <a href="#" class="btn btn-block btn-maou">Beli </a>
                        </figcaption>
                    </figure>
                </div>
                ';
			}
		}
		echo $output;
	}
}

/* End of file Product.php */