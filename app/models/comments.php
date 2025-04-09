<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
class comments extends Model{
    protected $table="comments";
    protected $primaryKey = 'id';
    //category_id
    public function category(){
        return $this->belongsTo('Formacom\Models\Category','category_id');
    }
    //provider_id   
    public function provider(){
        return $this->belongsTo('Formacom\Models\Provider','provider_id');
    }
    
}

?>