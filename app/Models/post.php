<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class post
{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug'=> 'judul-artikel-1',
                'title'=>'artikel 1',
                'pembuat'=>'Ade Nuryana 1',
                'tanggal'=>'05 september 2024',
                'tulisan'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At quibusdam saepe consequuntur corporis dignissimos cumque minima reprehenderit sequi, voluptatem tempora veritatis quis quo. Suscipit, sapiente rerum. Quasi consectetur itaque placeat.'
            ],
            [
                'id' => 2,
                'title'=>'artikel 2',
                'slug'=> 'judul-artikel-2',
                'pembuat'=>'Ade Nuryana 2',
                'tanggal'=>'06 september 2024',
                'tulisan'=>'Lorem ipsum dolor sit amet consectetur adipisicing'
            ]
        ];
    }


    public static function find($slug):array 
    {
        // return Arr::first(static::all(), function ($post) use($slug) {
        //     return $post['slug']==$slug;
        // });
        $post= Arr::first(static::all(), fn ($post) => $post['slug']==$slug);
        if (!$post) {
            abort(404, 'Artikel yang Anda cari tidak ditemukan');
            
        } 
        
        return $post;
        
    }
}
?>