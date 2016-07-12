<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content'
    ];
}
