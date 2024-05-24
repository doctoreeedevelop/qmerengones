<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    
    protected $fillable = [
        
        'nombre',
        'slug',
        'category_id',
        'cantidad',
        'precio_actual',
        'precio_anterior',
        'porcentaje_descuento',
        'descripcion_corta',
        'descripcion_larga',
        'especificaciones',
        'datos_de_interes',
        'visitas',
        'ventas',
        'estado',
        'activo',
        'sliderprincipal',
        'masvendidos',
        'promociones'
        
    ];



    public function category(){     
        return $this->belongsTo(Category::class);
    }

    protected $appends = ['amount_with_currency'];

    public function getAmountWithCurrencyAttribute()
    {
        return '$'.$this->price;
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
