<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 17/08/2016
 * Time: 19:58
 */

namespace App\Models;


class BlogPosts
{

    public function getPosts() {
        return [
            0 => [
                'id' => 1,
                'slug' => 'boas-vindas',
                'titulo' => "Boas vindas ao meu blog!",
                'texto' => 'Esse blog ainda vai dar o que falar (se algum dia for ao ar!)'
            ],
            1 => [
                'id' => 2,
                'slug' => 'segundo-post',
                'titulo' => "O segundo post é sempre melhor que o primeiro",
                'texto' => 'Esse é aquele post que mostra que o autor do blog está muito empolgado!'
            ],
            2 => [
                'id' => 3,
                'slug' => 'tres-e-demais',
                'titulo' => "Três é demais!",
                'texto' => 'Foi muito bom fazer parte disso mas o blog chegou ao fim além do que eu nem queria mesmo'
            ]
        ];
    }

    public function getSinglePost($id) {
        $posts = $this->getPosts();

        foreach ($posts as $key => $val) {
            if($val['id'] == $id ) {
                return $val;
            }
        }

        return null;
    }

}