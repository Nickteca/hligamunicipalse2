<?php

namespace App\Models;

use CodeIgniter\Model;

class MUsuario extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['id_tipo_usuario', 'email', 'password'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getUserBy(string $column, string $value) {
        $usuario = $this->where($column, $value)->first();
        $tipo = $this->db->table('tipo_usuario')->where('id_tipo_usuario', $usuario['id_tipo_usuario'])->get()->getFirstRow();
        $usuario['type'] = $tipo->nombre_tipo_usuario;
        return $usuario;
    }
}
