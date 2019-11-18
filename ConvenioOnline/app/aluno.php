<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquente\Model as Eloquent;

class aluno extends Eloquent
{
    protected $conection = mongodb;
    protected $collection = alunos;
    protected $keytype = 'string';
    protected $incrementing = false;
    
}
