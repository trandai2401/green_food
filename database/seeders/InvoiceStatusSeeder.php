<?php

namespace Database\Seeders;

use App\Models\InvoiceStatus;
use Illuminate\Database\Seeder;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvoiceStatus::create(['name' => 'Đang đợi xác nhận']);
        InvoiceStatus::create(['name' => 'Đang chuẩn bị']);
        InvoiceStatus::create(['name' => 'ĐAng được vận chuyển']);
        InvoiceStatus::create(['name' => 'Đã nhận được']);
        InvoiceStatus::create(['name' => 'Đã hủy']);
    }
}
