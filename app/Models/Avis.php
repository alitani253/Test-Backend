<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $description
 * @property int $note
 * @property string $created_at
 * @property string $updated_at
 */

class Avis extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'note','created_at', 'updated_at'];
}
