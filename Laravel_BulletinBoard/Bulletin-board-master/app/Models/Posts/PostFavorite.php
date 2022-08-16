<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;
use App\Models\Posts\PostComment;
use App\Models\Posts\Post;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\Posts\PostCommentsController;

class PostFavorite extends Model
{
    protected $table = 'post_favorites';

    protected $fillable = [
        'user_id',
        'post_id',
    ];

    // UserModelsとのリレーション
        public function user()
    {
        return $this->belongsTo('App\Models\Users\User');
    }

     // Postとのリレーション
    public function Post()
    {
        return $this->belongsTo('App\Models\Posts\Post');
    }












}
