<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'thumbnail', 'length', 'url', 'category_id'];

    // ---- video time accessor ------
    public function getLengthInHumanAttribute()
    {
        return gmdate("H:i:s", $this->value);
    }
    // ----- video created time accessor ---------
    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference();
    }
    // ----- related video component --------
    public function relatedVideos(int $count = 6)
    {
        // !same category vidoe must get fix 
        // return $this->category->getRandomVideos($count);
        return Video::all()->take($count);
    }
    // ------- add slug to url--------- 
    public function getRouteKeyName()
    {

        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }

    public function getCategorySlugAttribute()
    {
        return $this->category?->slug;
    }
}
