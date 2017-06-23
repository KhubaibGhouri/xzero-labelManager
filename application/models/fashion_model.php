<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @Muhammad khalid developer weserves.com
 */
class fashion_model extends CI_Model {

     public function men_arrivals() {
       $query = "select * from products,product_pictures where products.id=product_pictures.productid  and products.status='on' and products.color='MEN'  Group by products.id ORDER BY RAND()  ";
        return $this->db->query($query)->result();
    }
    //
    public function women_arrivals() {
       $query = "select * from women,product_pictures where women.id=product_pictures.productid  and women.status='on' and women.color='WOMEN'  Group by women.id ORDER BY RAND()  ";
        return $this->db->query($query)->result();
    }
    //
    public function pics_detail($id) {
        $query = "select * from product_pictures where productid='" . $id . "' ";
        return $this->db->query($query)->result();
    }
    //
    public function product_pics_detail($id) {
        $query = "select * from products,product_pictures where products.id=product_pictures.productid  and products. id='$id' Group by products.id ";
        //$query = "select * from products where id='$id'";
        return $this->db->query($query)->result();
    }
    //
     public function wo_pics_detail($id) {
        $query = "select * from women,product_pictures where women.id=product_pictures.productid  and women. id='$id' Group by women.id ";
        //$query = "select * from products where id='$id'";
        return $this->db->query($query)->result();
    }
    //
    

 
//model close here
}
