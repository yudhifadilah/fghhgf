<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'koleksi';

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }

    }

    public function saveUser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editUser($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }

    public function hapusUser($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }

}


