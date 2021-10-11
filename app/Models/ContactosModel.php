<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class ContactosModel extends Model
    {
        protected $table      = 'contactos';
        protected $primaryKey = 'idcontacto';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['nombre','apellidos','dni','email','celular'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
    }