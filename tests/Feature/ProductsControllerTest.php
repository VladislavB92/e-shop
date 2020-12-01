<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;

class ProductsControllerTest extends TestCase
{
    public function testShowAllProducts(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.index'));

        $response->assertStatus(200);

        $this->assertDatabaseHas(
            'products',
            [
                'name' => $product->name,
                'size' => $product->size,
                'price' => $product->price,
                'avalaible_quantity' => $product->avalaible_quantity
            ]
        );
    }

    public function testShowSingleProduct(): void
    {
        $product = Product::factory()->create();

        $this->followingRedirects();

        $response = $this->get(route(
            'products.show',
            [
                'product' => $product
            ]
        ));

        $response->assertStatus(200)->assertSee($product->name);

        $this->assertDatabaseHas(
            'products',
            [
                'name' => $product->name,
                'size' => $product->size,
                'price' => $product->price,
                'avalaible_quantity' => $product->avalaible_quantity
            ]
        );
    }

    public function testAccessAddProductPage(): void
    {
        $product = Product::factory()->create();

        $this->followingRedirects();

        $response = $this->get(route(
            'products.create',
            [
                'product' => $product
            ]
        ));

        $response->assertStatus(200);
    }

    public function testAddProduct(): void
    {
        $product = Product::factory()->create();

        $this->followingRedirects();

        $response = $this->post(
            route('products.store'),
            [
                'name' => $product->name,
                'size' => $product->size,
                'price' => $product->price,
                'avalaible_quantity' => $product->avalaible_quantity
            ]
        );

        $response->assertStatus(200);

        $this->assertDatabaseHas(
            'products',
            [
                'name' => $product->name,
                'size' => $product->size,
                'price' => $product->price,
                'avalaible_quantity' => $product->avalaible_quantity
            ]
        );
    }

    public function testAccessProductEditPage(): void
    {
        $product = Product::factory()->create();

        $this->followingRedirects();

        $response = $this->get(route(
            'products.edit',
            [
                'product' => $product
            ]
        ));

        $response->assertStatus(200);
    }


    public function testStoreEditedProduct(): void
    {
        $product = Product::factory()->create();

        $this->followingRedirects();

        $response = $this->put(route(
            'products.update',
            [
                'product' => $product
            ]
        ), [
            'name' => $product->name,
            'size' => $product->size,
            'price' => $product->price,
            'avalaible_quantity' => $product->avalaible_quantity
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas(
            'products',
            [
                'name' => $product->name,
                'size' => $product->size,
                'price' => $product->price,
                'avalaible_quantity' => $product->avalaible_quantity
            ]
        );
    }

    public function testDeleteProduct(): void
    {
        $product = Product::factory()->create();

        $this->assertDatabaseHas(
            'products',
            [
                'name' => $product->name,
                'size' => $product->size,
                'price' => $product->price,
                'avalaible_quantity' => $product->avalaible_quantity
            ]
        );

        $this->followingRedirects();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertStatus(200);
    }
}
