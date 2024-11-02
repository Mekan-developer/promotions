<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SupplierRoutesTest extends TestCase
{
    // use RefreshDatabase; // review test
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /**
     * Тест для маршрута /suppliers (список поставщиков).
     */
    public function testSuppliersIndexRoute()
    {
        $response = $this->get(route('suppliers.index'));

        $response->assertStatus(200);
        $response->assertSeeLivewire('dashboard.suppliers.supplier-index'); // Укажите путь к вашему view
    }

    /**
     * Тест для маршрута /suppliers/create (создание нового поставщика).
     */
    public function testSuppliersCreateRoute()
    {
        $response = $this->get(route('suppliers.create'));

        $response->assertStatus(200);
        $response->assertSeeLivewire('dashboard.suppliers.supplier-create'); // Укажите путь к вашему view
    }

    /**
     * Тест для маршрута /suppliers/{supplier}/edit (редактирование поставщика).
     */
    public function testSuppliersEditRoute()
    {
        // Предполагаем, что у вас есть модель Supplier и фабрика для нее
        $supplier = \App\Models\Supplier::create([
            'name' => 'test',
            'email' => 'mekan@gmail.com',
            'phone' => '666666',
            'address' => 'Aggg',
            'brands' => 'TestBrand'
        ]);

        $response = $this->get(route('suppliers.edit', ['supplier' => $supplier->id]));

        $response->assertStatus(200);
        $response->assertSeeLivewire('dashboard.suppliers.supplier-update'); // Укажите путь к вашему view
    }

}
