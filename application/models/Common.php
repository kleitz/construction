<?php
/**
 *
 */
class Common extends CI_Model
{
  function insert_projectsite($data)
  {
    $this->db->insert('project',$data);
  }
  function select_project()
  {
    return $this->db->get('project')->result_array();
  }
  function insert_add_scopework($data)
  {
    $this->db->insert('scopework',$data);
  }
  function select_scopework()
  {
    return $this->db->get('scopework')->result_array();
  }
  function insert_add_material($data)
  {
    $this->db->insert('material',$data);
  }
  function select_userpass($data)
  {
      return $this->db->get('account')->result_array();

  }
  function insert_visual_monitoring($data)
  {
      $this->db->insert('visual_monitoring',$data);
  }
  function select_visual_monitoring()
  {
    return $this->db->get('visual_monitoring')->result_array();
  }
  function insert_independent_monitoring($data)
  {
    $this->db->insert('independent_monitoring',$data);
  }
  function select_independent_monitoring()
  {
    return $this->db->get('independent_monitoring')->result_array();
  }
  function del_independent_monitoring($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('independent_monitoring');
  }
  function del_visual_monitoring($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('visual_monitoring');
  }
  function del_scope_work($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('scopework');
  }
  function del_project_site($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('scopework');
  }

  function select_all_scope_of_work($id)
  {
    $this->db->get_where('material', array('scope_id' => $scope_id));
  }
  function get_file($id)
  {
    $this->db->where('id', $id);
    $x = $this->db->get('project')->row_array();
    return $x['files'];
  }
}


 ?>
