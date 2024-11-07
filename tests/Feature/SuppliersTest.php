<?php

namespace Tests\Feature;

use App\Livewire\Dashboard\Suppliers\SupplierCreate;
use App\Livewire\Dashboard\Suppliers\SupplierIndex;
use App\Livewire\Dashboard\Suppliers\SupplierUpdate;
use App\Models\Supplier;
use Livewire\Livewire;
use Tests\TestCase;

class SuppliersTest extends TestCase
{


    /**
     * A basic feature test page supplier index page.
     */
    public function test_supplier_index()
    {
        

        // Livewire::test('suppliers.index')
        Livewire::test(SupplierIndex::class)
            ->assertSee('Name')
            ->assertSee('Email');
    }

    /**
     * A basic feature test for supplier create page.
     */
    public function test_create_supplier()
    {
        // Тестируем компонент создания поставщика
        Livewire::test(SupplierCreate::class)
            ->set('name', 'Test Name')
            ->set('email', 'Test@gmail.com')
            ->set('phone', '+99362724494')
            ->set('address', 'Test address')
            ->set('brands', 'Test brand')
            ->call('save')
            ->assertHasNoErrors(); // Убедимся, что нет ошибок валидации

            // Убедимся, что запись была добавлена в базу данных
            $this->assertDatabaseHas('suppliers', [
                'name' => 'Test Name',
                'email' => 'Test@gmail.com',
            ]);
        // // Проверяем компонент списка поставщиков
        Livewire::test(SupplierIndex::class)
            ->set('search', '')
            ->assertSee('Test Name')
            ->assertSee('Test@gmail.com');
    }

    public function test_edit_supplier()
    {

        $supplier = Supplier::first();


        Livewire::test(SupplierUpdate::class)
            ->set('supplierId',$supplier->id)
            ->set('name','Name updated')
            ->set('email','updated@gmail.com')
            ->set('phone','+9930000000')
            ->set('address','Updated address')
            ->set('brands','updated brand')
            ->call('save');
       

        Livewire::test(SupplierIndex::class)
            ->set('search', '')
            ->assertSee('Name updated');
    }

    public function test_delete_supplier()
    {
        $supplier = Supplier::first();

        // Вызываем метод destroy и передаем объект Supplier
        Livewire::test(SupplierIndex::class)
            ->call('destroy',$supplier);

        // Проверяем, что запись была удалена из базы данных
        $this->assertDatabaseMissing('suppliers', [
            'id' => $supplier->id,
        ]);
    }
   
}
