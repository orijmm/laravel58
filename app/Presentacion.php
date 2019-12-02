<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'presentaciones';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the user that owns the post.
     */
    public function sliders()
    {
        return $this->hasMany('App\Slider','presentacion_id');
    }
}
