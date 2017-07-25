<?php
class Functionsmodel extends CI_Model{

	//getting category vise title and id
	public function get_cats()
	{
		$query = $this->db->get('categories');
		   return $query->result();
		  

	}
	//getting brand vise title and id
	public function get_brands()
	{
		$query = $this->db->get('brands');
		   return $query->result();
		 

	}
	//getting all products with their details
	public function get_pro()
	{
		$query = $this->db
							->select('*')
							->from('products')
							//->limit(0,6)
							->get();
		return $query->result_array();
	}
	//getting all products belonging to a particular category
	public function get_cat_pro($id)
	{
		$query = $this->db
							->select('*')
							->from('products')
							->where('product_cat',$id)
							->get();
		return $query->result_array();
	}
	//getting all the products belonging to a particular brand
	public function get_brand_pro($id)
	{
		$query = $this->db
							->select('*')
							->from('products')
							->where('product_brand',$id)
							->get();
		return $query->result_array();
	}
	//getting details of each product by clicking detail button.
	public function get_detail_pro($id)
	{
		$query = $this->db
							->select('*')
							->from('products')
							->where('product_id',$id)
							->get();
		return $query->result_array();

	}
	//getting search results.
	public function results($search)
	{
		$query = $this->db
							->select('*')
							->from('products')
							->like('product_keywords',$search)
							->get();
		return $query->result_array();
	}

}
?>