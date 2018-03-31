<?php
/**
 * Created by PhpStorm.
 * User: leijinlei
 * Date: 2018/3/31
 * Time: 9:55
 */

namespace App\Transformers;

use App\Models\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'description' => $category->description,
        ];
    }
}