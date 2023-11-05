<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acarreo extends Model
{
    use HasFactory;
    protected $fillable = [
        'TransactionId',
        'CompletionDate',
        'AccountName',
        'VehicleName',
        'MaterialName',
        'GrossWeight',
        'NetWeight',
        'TareWeight',
        'Origen',
        'Sistema',
        'Persona',
        'Estado',
        'descripcion',
    ];
}
