<?php

namespace App\Models;

use CodeIgniter\Model;

class KueModel extends Model
{
    protected $table = "kue";
    protected $useTimestamps = true;

    public function getKue($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
