<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frota extends Model
{
    protected $fillable = ['modelo', 'marca', 'placa', 'ano', 'ativo'];

}

