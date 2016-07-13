<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{

    /**
     * 回傳 post.title
     * @param int $id
     * @param string $default
     * @return Post
     */
    public function getTitle(int $id, string $default = '')
    {
        return Post::whereId($id)
            ->get()
            ->first(null, new Post([
                    'title' => $default
                ]
            ));
    }
}