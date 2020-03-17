<?php 
 class Model_barang extends CI_Model {     
     public function __construct() { 
     parent::__construct();     
   } 
 
  
   function getkodeunik($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(kode_produk,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "KD"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
    function getkodetranspoint($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(kode_transaksi,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "KPONT"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
   
   function getkodeinvoice($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(invoice,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "INC"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
   function getkodepoint($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(kode_point,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "PNT."; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
    function getkodebatik($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(kode_jenis,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "BTK."; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 


   function get_photo($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        
        $query = $getData = $this->db->get('tbl_barang', $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }


   function get_photolaki($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        $data['kategori']   = 'laki-laki';
        $query = $getData = $this->db->get_where('tbl_barang',$data, $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }



    function get_photoperempuan($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        $data['kategori']   = 'perempuan';
        $query = $getData = $this->db->get_where('tbl_barang',$data, $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }



     function get_katun_prisma($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        $data['kode_jenis']   = 'BTK.0003';
        $query = $getData = $this->db->get_where('tbl_barang',$data, $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }


   function get_motif_jambi($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        $data['kode_jenis']   = 'BTK.0004';
        $query = $getData = $this->db->get_where('tbl_barang',$data, $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }
  function get_setelan_wanita($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        $data['kode_jenis']   = 'BTK.0006';
        $query = $getData = $this->db->get_where('tbl_barang',$data, $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }

  function link_photo($kode_barang){
    
      $this->db->where('kode_barang',$kode_barang);
        $query = $getData = $this->db->get('tbl_barang');

      if($getData->num_rows() > 0)
      return $query;
      else
      return null;
    
  }
 } 