<?php

use App\Post;
use App\Services\PostService;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostServiceTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function 有資料取title欄位資料()
    {
        /** arrange */
        collect(range(1, 3))->each(function ($value) {
            factory(Post::class)->create([
                'title' => 'title' . $value
            ]);
        });

        /** act */
        $id = 1;
        $default = 'no title';
        $actual = app(PostService::class)->showTitle($id, $default);

        /** assert */
        $expected = 'title1';
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function 無資料的title欄位資料()
    {
        /** arrange */
        collect(range(1, 3))->each(function ($value) {
            factory(Post::class)->create([
                'title' => 'title' . $value
            ]);
        });

        /** act */
        $id = 4;
        $default = 'no title';
        $actual = app(PostService::class)->showTitle($id, $default);

        /** assert */
        $expected = 'no title';
        $this->assertEquals($expected, $actual);
    }
}
