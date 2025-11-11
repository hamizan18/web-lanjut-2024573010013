<?php 

namespace App\Services;

use App\DTO\ProductDTO;

class ProductService {
    public function displaye(ProductDTO $product): array {
        return [
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->description,
        ];
    }
}