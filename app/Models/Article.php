<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable;
    use HasFactory;
    
    protected $fillable = ['title','price','body','user_id','category_id','condition','status','image','country','city'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function setAccepted($value)
    {
        $this->status = $value;
        $this->save();
        return true;
    }
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'country' => $this->country,
            'category' => $this->category->name,
        ];
    }
    public function wishlists()
{
    return $this->hasMany(WishlistUser::class);
}

}
