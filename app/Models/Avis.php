<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_client
 * @property integer $id_livraison
 * @property string $description
 * @property int $note
 * @property string $created_at
 * @property string $updated_at
 */

class Avis extends Model
{
    use HasFactory;
    protected $fillable = ['id_client', 'id_livraison','description','note','created_at', 'updated_at'];
    public function client()
    {
        return $this->belongsTo(User::class);
    }
    public function livraison()
    {
        return $this->belongsTo(Livraison::class);
    }
}
