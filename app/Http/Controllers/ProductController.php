<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        [
            'id' => 1,
            'title' => "Product1 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",

            "price" => 200,
            "stock" => 0,
        ],
        [
            'id' => 2,
            'title' => "Product2 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/pc-game.webp',
            "price" => 200,
            "stock" => 5,
        ],
        [
            'id' => 3,
            'title' => "Product3 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/pc.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 4,
            'title' => "Product4 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/vr.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 5,
            'title' => "Product5 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/pc.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 6,
            'title' => "Product6 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/vr.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 7,
            'title' => "Product7 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/pc-game.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 8,
            'title' => "Product8 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/joystick.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 9,
            'title' => "Product9 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/vr.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 10,
            'title' => "Product10 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/pc-game.webp',
            "price" => 200,
            "stock" => 10,
        ],
        [
            'id' => 11,
            'title' => "Product11 Title",
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'image' => 'images/pc.webp',
            "price" => 200,
            "stock" => 10,
        ],
    ];
    public function index()
    {
        return view('products.index', [
            'products' => self::$products,
        ]);
    }

    public function show(int $id)
    {
        $product = null;

        // 1- chercher le produit
        foreach (self::$products as $p) {
            if ($p['id'] === $id) {
                $product = $p;
                break;
            }
        }

        // si le produit n'est pas trouvé
        // => retourner 404
        if (!$product) {
            abort(404, "Produit non trouvé");
        }

        // si le produit exist
        // => afficher la vue du produit

        return view('products.show', [
            'product' => $product,
        ]);
    }
}
