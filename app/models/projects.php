<?php
namespace Formacom\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    // Define la relación: Un proyecto pertenece a un usuario
    public function user()
    {
        return $this->belongsTo('Formacom\Models\User', 'user_id', 'id');
    }
}

    

?>