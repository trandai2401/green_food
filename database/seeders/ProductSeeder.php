<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sp1
        $product = Product::create([
            'name' => 'Bơ Bắc Mỹ',
            'category_id' => 1,
            'price' => 10000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ 3.png']),
        ]);
        //2
        $product = Product::create([
            'name' => 'Bưởi ruột hồng',
            'category_id' => 1,
            'price' => 20000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bưởi.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bươi 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bưởi 3.png']),
        ]);

        //3
        $product = Product::create([
            'name' => 'Bưởi ruột hồng',
            'category_id' => 1,
            'price' => 20000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua 3.png']),
        ]);

        //4
        $product = Product::create([
            'name' => 'Cà chua bi',
            'category_id' => 1,
            'price' => 15000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua bi.png']),
        ]);

        //5
        $product = Product::create([
            'name' => 'Cam',
            'category_id' => 1,
            'price' => 35000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cam.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cam 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cam 3.png']),
        ]);

        //6
        $product = Product::create([
            'name' => 'Chanh gia vàng',
            'category_id' => 1,
            'price' => 17500,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vàng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vàng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vang 3.png']),
        ]);

        //6
        $product = Product::create([
            'name' => 'Chanh gia vàng',
            'category_id' => 1,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vàng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh xanh 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh xanh 3.png']),
        ]);

        //7
        $product = Product::create([
            'name' => 'Cherry',
            'category_id' => 1,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cherry.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cherry 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cherry 3.png']),
        ]);

        //8
        $product = Product::create([
            'name' => 'Chôm chôm',
            'category_id' => 1,
            'price' => 10000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chom 1.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chom 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chom 3.png']),
        ]);

        //9
        $product = Product::create([
            'name' => 'Chuối vàng',
            'category_id' => 1,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối vàng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối vàng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối vàng 3.png']),
        ]);






        //1
        $product = Product::create([
            'name' => 'Bơ đậu phộng',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ đậu phộng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ đậu phộng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ đậu phộng 3.png']),
        ]);


        //2
        $product = Product::create([
            'name' => 'Bột mỳ',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột mỳ 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột mỳ 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn.png']),
        ]);

        //3
        $product = Product::create([
            'name' => 'Bột sắn dây',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn dây.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn dây 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn dây 3.png']),
        ]);

        //4
        $product = Product::create([
            'name' => 'Chuối sấy',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối sấy.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối sấy 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối sấy 3.png']),
        ]);

        //5
        $product = Product::create([
            'name' => 'Dầu hạt cải',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải 3.png']),
        ]);


        //6
        $product = Product::create([
            'name' => 'Dầu Oliu',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu ô liu.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu oliu 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu oliu 3.png']),
        ]);


        //7
        $product = Product::create([
            'name' => 'Đậu phụng',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đậu phộng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đậu phộng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đậu phộng 3.png']),
        ]);



        //8
        $product = Product::create([
            'name' => 'Gạo nếp',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/gạo nếp.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/gạo nếp 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/gạo nếp 3.png']),
        ]);


        //9
        $product = Product::create([
            'name' => 'hạt bí đỏ',
            'category_id' => 2,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/hạt bí ngô.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/hạt bí đỏ 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/hạt bí đỏ 3.png']),
        ]);



        //1
        $product = Product::create([
            'name' => 'Bắp cải',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bắp cải.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bắp cải 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bắp cải 2.png']),
        ]);

        //2
        $product = Product::create([
            'name' => 'Bí đỏ',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bí đỏ.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bí đỏ 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bí đỏ 2.png']),
        ]);


        //3
        $product = Product::create([
            'name' => 'Cà rốt',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà rốt.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà rốt 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà rốt 3.png']),
        ]);





        //4
        $product = Product::create([
            'name' => 'Cà tím',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà tím.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà tím 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà tím 3.png']),
        ]);





        //5
        $product = Product::create([
            'name' => 'Cần tây',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cần tây.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cần tây 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cần tây 2.png']),
        ]);





        //6
        $product = Product::create([
            'name' => 'Củ cải trắng',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ cả trắng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ cải trắng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ cải trắng 3.png']),
        ]);





        //7
        $product = Product::create([
            'name' => 'Củ dền',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ dền đỏ.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ dền 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ dền đỏ 3.png']),
        ]);





        //8
        $product = Product::create([
            'name' => 'Củ gừng',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ gừng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ gừng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ gừng 3.png']),
        ]);





        //9
        $product = Product::create([
            'name' => 'Củ tỏi',
            'category_id' => 3,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tỏi.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ tỏi 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/củ tỏi 3.png']),
        ]);








        //1
        $product = Product::create([
            'name' => 'Cánh gà',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cánh gà.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cánh gà 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cánh gà 2.png']),
        ]);


        //2
        $product = Product::create([
            'name' => 'Chân đùi Cừu',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/Đùi cừu.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi cừu 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi cừu 3.png']),
        ]);


        //3
        $product = Product::create([
            'name' => 'Đuồi gà',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/Đùi gà.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi gà 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi gà (2).png']),
        ]);


        //4
        $product = Product::create([
            'name' => 'Mề gà',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/mề gà.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/mề gà 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/mề gà 3.png']),
        ]);


        //5
        $product = Product::create([
            'name' => 'Sường Bò',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn bò.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn bò 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn bò 2.png']),
        ]);


        //6
        $product = Product::create([
            'name' => 'Sường Heo',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn heo.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn heo 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn heo 2.png']),
        ]);


        //7
        $product = Product::create([
            'name' => 'Bò beefsteak',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit tét.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit bét 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit tét 3.png']),
        ]);


        //8
        $product = Product::create([
            'name' => 'Thịt bò',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/Thịt bò thái lát.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò xay 2 (2).png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò xay 2.png']),
        ]);


        //9
        $product = Product::create([
            'name' => 'Thịt Dê',
            'category_id' => 4,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt dê 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt dê 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt dê.png']),
        ]);







        //1
        $product = Product::create([
            'name' => 'Bạch tuộc',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bạch tuộc.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bạch tuộc mực.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bạch tuộc 3.png']),
        ]);



        //2
        $product = Product::create([
            'name' => 'Cá Diếc',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá diếc 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá diếc 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá diếc.png']),
        ]);




        //3
        $product = Product::create([
            'name' => 'Cá Hồi',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá hồi.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá hồi 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá hồi 2.png']),
        ]);




        //4
        $product = Product::create([
            'name' => '',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/']),
        ]);





        //5
        $product = Product::create([
            'name' => 'Cá Mè',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá mè 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá mè.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá mè3.png']),
        ]);





        //6
        $product = Product::create([
            'name' => 'Tôm Sú',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm sú.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm sú 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm sú 2.png']),
        ]);





        //7
        $product = Product::create([
            'name' => 'Tôm Hùm',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hùm xanh 3 (2).png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hùm xanh.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hùm xanh 2.png']),
        ]);





        //8
        $product = Product::create([
            'name' => 'Tôm Hổ',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hổ 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hổ.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hổ 2.png']),
        ]);





        //9
        $product = Product::create([
            'name' => 'Ngao',
            'category_id' => 5,
            'price' => 22000,
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/ngao 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/ngao 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/ngao.png']),
        ]);









        // //N
        // $product = Product::create([
        //     'name' => '',
        //     'category_id' => 5,
        //     'price' => 22000,
        // ]);
        // $product->medias()->saveMany([
        //     new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/']),
        //     new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/']),
        //     new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/']),
        // ]);





        $product = Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 5,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 6,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 7,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 8,
        ]);


        $product = Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 9,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 10,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 11,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 12,
        ]);

        $product = Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 13,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 14,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 15,
        ]);
        $product = Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 16,
        ]);
    }
}
