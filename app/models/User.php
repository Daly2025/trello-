<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    protected $table="users";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function proyects(){
        return $this->hasMany('Formacom\Models\Proyect','user_id','id');
    }

}

?>