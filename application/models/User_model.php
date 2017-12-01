<?php

class User_model extends CI_Model {

    function authenticate($user, $pass) {
        $query = $this->db->get_where('usuario', array('usuario' => $user, 'contrasena' => $pass));
        return $query->result_object();
    }

    function save($user, $instruments, $garders) {
        $this->db->set($user);
        $this->db->insert($this->db->dbprefix . 'usuario');
        $insert_id = $this->db->insert_id();
        for ($i = 0; $i < count($instruments['instruments']); $i++) {
            $data = array(
                'fk_usuario' => $insert_id,
                'fk_instrumento' => $instruments['instruments'][$i]
            );
            if (!$this->db->insert('usuario_instrumento', $data)) {
                return FALSE;
            }
        }
        for ($j = 0; $j < count($garders['genders']); $j++) {
            $data = array(
                'fk_usuario' => $insert_id,
                'fk_genero' => $garders['genders'][$j]
            );
            if (!$this->db->insert('usuario_genero', $data)) {
                return FALSE;
            }
        }
        return true;
    }

    function all() {
        $query = $this->db->get('usuario');
        return $query->result_object();
    }

    function search($valor) {
        $sql = "SELECT DISTINCT  u.id_usuario, u.foto, u.nombre, u.apellidos, u.email, u.direccion, u.usuario, u.contrasena FROM usuario u, genero g, usuario_genero ug, usuario_instrumento ui, intrumento i WHERE (ug.fk_usuario = u.id_usuario AND ug.fk_genero = g.id_genero AND g.genero LIKE '$valor') OR (ui.fk_instrumento = i.id_intrumento AND ui.fk_usuario = u.id_usuario AND i.intrumento LIKE '$valor')";        
      
        $query = $this->db->query($sql);
        return $query->result_object();
    }

    function loadGender() {
        $query = $this->db->get('genero');
        return $query->result_object();
    }

    function loadInstrument() {
        $query = $this->db->get('intrumento');
        return $query->result_object();
    }

    function delete($id) {
        $this->db->where('id_user', $id);
        $r = $this->db->delete('users');
        return $r;
    }

    function UsuarioCargado($id) {
        $query = $this->db->select("*")->from("usuario")->where("id_usuario", $id)->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    function editUser($id, $user) {
        $this->db->where('id_user', $id);
        $r = $this->db->update('users', $user);
        return $r;
    }

}
