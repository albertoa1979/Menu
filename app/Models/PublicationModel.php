<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicationtModel extends Model

{

protected $table = 'publication';
protected $allowedFields = ['content','user'];

public function get($id = false)
{
if ($id === false)
{

    return $this->findAll();

}

    return $this->asArray()
    ->where(['id'= $id])
    ->first();

}

}

public function show()
{

    $db = \Config\Database::connect();
    $builder = $db->table('post');
    $builder->select('post.*, user.name');
    $builder->join('user', 'user.id = id_user');
    $builder->orderBy('id', 'DESC');
    return $builder->get()->getResultArray();

}



?>