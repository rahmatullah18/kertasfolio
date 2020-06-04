<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SourceCode;
use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(SourceCode::class, function (Faker $faker) {

    $title = $faker->title;
    $slug = Str::of($title)->slug('-');
    return [
        'category_id' => factory(Category::class),
        'judul' => $title,
        'slug' =>$slug,
        'keterangan' => $faker->sentence,
        'link' => 'www.link.com',
        'pembuat' => $faker->name
    ];
});
