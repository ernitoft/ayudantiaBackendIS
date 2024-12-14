<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Obtener todos los productos disponibles
    public function getAllProducts()
    {
        try{
            $products = Product::where('isEnable', true)->with('reviews')->get();
            if ($products->isEmpty()) {
                return response()->json([
                    'message' => 'No hay productos disponibles',
                    'error' => true
                ], 404);
            }

            return response()->json([
                'message' => 'Lista de productos disponibles.',
                'data' => $products,
                'error' => false
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error inesperado.'], 500);
        }
    }
}
