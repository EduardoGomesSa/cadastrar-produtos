<?php

namespace App\Models;

use App\Models\CadastroModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco'
    ];

    protected $table = 'produtos';
    protected $primaryKey = 'produto_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
