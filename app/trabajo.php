<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajo extends Model
{
    protected $fillable=['nombre_usuer','tipo_vehiculos','fecha_lavado','empleado', 'valor'];
}
