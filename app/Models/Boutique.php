<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *  @property int $id
 *  @property string $nom
 * @property string $email
 * @property string $adresse
 * @property float $tva
 * @property string $longitude
 * @property string $attributes
 * @property string $created_at
 * @property string $updated_at
 */

class Boutique extends Model
{
    use HasFactory;
    protected $fillable = ['nom','email','adresse','tva','longitude','attributes','created_at', 'updated_at'];
}
