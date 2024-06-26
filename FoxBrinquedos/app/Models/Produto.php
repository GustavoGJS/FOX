<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";

    public $fillable = ['PRODUTO_NOME','PRODUTO_DESC'];

    public function Imagem(){
        return $this->hasMany(Imagem::class,'PRODUTO_ID','PRODUTO_ID');
    }

}
