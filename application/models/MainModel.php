<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

/*
* @author Indra Kusuma
* @version 1
* @licence MIT
*/
  /*
  * --------------------------------------------
  * FUNGSI GLOBAL
  * --------------------------------------------
  */
  public function insertData($tabel,$data){
		$this->db->insert($tabel,$data);
	}

  function updateData($table, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function getListData($table, $where, $limit, $offset)
  {
    $query = $this->db->get_where($table, $where, $limit, $offset);
    return $query->result_array();
  }

  function getJoinListData($table, $join, $select, $where)
  {
    $this->db->select($select);
    $this->db->from($table);
    $this->db->join($join, $where);
    return $this->db->get()->result_array();
  }

  function getRowDataWhere($table, $select, $where)
  {
    $this->db->select($select);
    $this->db->from($table);
    $this->db->where($where);
    return $this->db->get()->row_array();
  }

  function getRowData($table, $select)
  {
    $this->db->select($select);
    $this->db->from($table);
    return $this->db->get()->row_array();
  }

  // model for specific
  function countObject($table, $object, $where)
  {
    $this->db->select('count('.$object.') as jumlah');
    $this->db->from($table);
    $this->db->where($where);

    return $this->db->get()->row_array();
  }

  // for list komunitas
  function getListKomunitas()
  {
    $query = $this->db->query('SELECT count(a.id) as jumlah, a.id_komunitas, b.nama_komunitas, b.gambar_logo, b.deskripsi
                                FROM users as a, komunitas as b
                                WHERE a.id_komunitas = b.id_komunitas
                                GROUP BY b.nama_komunitas
                                ORDER BY jumlah DESC');
    return $query->result_array();
  }
}

/* End of file MainModel.php */
/* Location: ./application/models/MainModel.php */
