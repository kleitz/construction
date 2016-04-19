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
  function get_scopes($id)
  {
    return $this->db->query("SELECT a.scope_of_work, b.scopework sc FROM material a, scopework b
                              WHERE a.project = '$id' AND a.scope_of_work = b.id
                              GROUP BY a.scope_of_work")->result_array();
  }
  function get_type($scopeofwork, $id)
  {
    return $this->db->query("SELECT type FROM material
                            WHERE scope_of_work = '$scopeofwork'
                            AND project = '$id'
                            GROUP by type")->result_array();
  }
  function get_all_mat($type, $id, $scopework)
  {
    return $this->db->query("SELECT tquantity,unit, description,unit_cost, quantity  FROM material
                            WHERE type = '$type'
                            AND project = '$id'
                            And scope_of_work = '$scopework'
                            ")->result_array();
  }

  function del_project_sites($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('project') or die("cannot");

    $this->db->where('project',$id);
    $this->db->delete('material') or die("cannot");
  }

function get_allmaterial($id)
{
return  $this->db->query("SELECT *,sum(unit_cost) as unitcost FROM material,scopework WHERE scope_id=$id AND scopework.id = material.scope_of_work")->result_array();

}
function insert_account($data)
{
  $this->db->insert('account',$data);
}
function select_allaccount()
{
    return $this->db->get('account')->result_array();
}
function del_account($id)
{
  $this->db->where('id',$id);
    $this->db->delete('account') or die("cannot");
}
function del_projectsite($id)
{
   $this->db->where('id',$id);
    $this->db->delete('project') or die("cannot");
}
function userpass($username,$password)
{
return  $this->db->query("SELECT * FROM account WHERE username='$username' AND password='$password'")->row_array();

}
function select_project1($id)
{
      $this->db->where('id', $id);
      $this->db->delete('scopework');
}
function checkrebase()
{
    echo "rebase";
}
function trial(){
    echo "tral";
}
function y()
{
    echo "y";
}
}
 ?>
