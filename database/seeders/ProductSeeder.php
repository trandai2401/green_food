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
            'price' => 35000,
            'description' => "Bơ là trái cây có giá trị dinh dưỡng cao, ngon và rất phong phú. Ngày nay, bơ đã trở thành một loại thực phẩm vô cùng phổ biến trong số những người có ý thức về bảo vệ và tăng cường sức khỏe. Nó thường được gọi là một siêu thực phẩm, điều này hoàn toàn không gây ngạc nhiên vì các đặc tính sức khỏe của nó. Hiện nay có nhiều loại bơ khác nhau về hình dạng và màu sắc. Kali là một chất dinh dưỡng cần thiết cho cơ thể và hầu hết chúng ta thường hay bị thiếu hụt kali. Chất dinh dưỡng này giúp duy trì độ xung điện trong các tế bào của cơ thể và phục vụ các chức năng quan trọng khác nhau. Bơ rất giàu kali."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1601039641847-7857b994d704?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXZvY2Fkb3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),

        ]);
        //2
        $product = Product::create([
            'name' => 'Bưởi ruột hồng',
            'category_id' => 1,
            'price' => 45000,
            'description' => "Cây bưởi bung còn có nhiều tên gọi dân gian thân thuộc khác như cây Cơm rượu, cây Co dọng dạnh, cây Bai bài hay cây Mác thao sang... Tuy nhiên, trong khoa học, loại thực vật này có tên chính thức là Glycosmis Citrifolia (Wild) Lindl, là một loài cây thuộc họ Rutaceae (hay họ Cam trong tiếng Việt).
            Bưởi bung là loại thực vật có thân to, đường kính từ 2cm - 3cm. Một cây bưởi bung có thể cao đến hơn 6 mét. Cành của bưởi bung là cành non và có màu đất sét. Phần lá bưởi bung mịn, có hình thái đa dạng, có chiều dài trung bình từ 8 đến 20cm và chiều rộng trung bình từ 1.5 - 6cm. Cây bưởi bung cũng có chùy hẹp tại nách lá và có ít nhánh.
            Hoa bưởi bung có màu xanh, màu vàng nhạt hoặc màu trắng, cánh hoa không có lông, thường xếp thành nhóm với mỗi nhóm có 2 đến 3 bông hoa, mùi thơm nhẹ. Về phần quả, quả bưởi bung có hình dáng tương tự như hình trứng, màu sắc đa dạng: trắng, da cam, vàng, hồng."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bưởi.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bươi 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bưởi 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fyoumed.vn%2Ftin-tuc%2Fqua-buoi-va-nhung-cong-dung-tuyet-voi-doi-voi-suc-khoe%2F&psig=AOvVaw3Ae9Ec4tnHTl_Ak0ToX6zY&ust=1673405478439000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPipzqv_u_wCFQAAAAAdAAAAABAR']),

        ]);

        //3
        $product = Product::create([
            'name' => 'Cà chua',
            'category_id' => 1,
            'price' => 25000,
            'description' => "Về mặt dinh dưỡng, trái cây và rau quả đều là nguồn vitamin, khoáng chất và chất xơ phong phú. Mặc dù chúng có rất nhiều điểm chung, trái cây và rau quả cũng có một số khác biệt rõ rệt.
            Tuy nhiên, những khác biệt này có thể thay đổi đáng kể tùy thuộc vào quan điểm của một người đầu bếp hay một người làm vườn. Việc phân loại trái cây và rau quả chủ yếu dựa trên cấu trúc và chức năng của chúng.       
            Về mặt thực vật, quả được hình thành từ hoa, có hạt và hỗ trợ quá trình sinh sản của cây. Một số loại trái cây phổ biến bao gồm táo, đào, quả việt quất và quả mâm xôi. Mặt khác, rau là rễ, thân, lá hoặc các bộ phận phụ trợ khác của cây. Một số loại rau nổi tiếng bao gồm rau bina, rau diếp, cà rốt, củ cải và cần tây"
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1592841200221-a6898f307baa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHRvbWF0b3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),

        ]);

        //4
        $product = Product::create([
            'name' => 'Cà chua bi',
            'category_id' => 1,
            'price' => 20000,
            'description' => "Đào thải độc tố Trong các loại củ quả màu đỏ, đặc biệt phải kể đến cà chua bi luôn chứa rất nhiều vitamin A.
            Hỗ trợ sức khỏe xương. Hàm lượng vitamin C và canxi trong cà chua bi sẽ hỗ trợ tăng cường sức khỏe xương hiệu quả.
            Phòng ngừa ung thư
            Ngăn ngừa một số bệnh mãn tính."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà chua bi.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://media.istockphoto.com/id/802406372/photo/pile-of-tomatoes-bunch-in-greengrocer-shop.jpg?b=1&s=170667a&w=0&k=20&c=8U7Vwxva95EEvCjAYO3exSjXRuhL7mgL3GjZEa500-k=']),
            new Media(['type_media_id' => 1, 'url' => 'https://media.istockphoto.com/id/806904496/photo/tomatos-outdoors.jpg?b=1&s=170667a&w=0&k=20&c=c1OtQ8StXEner8tfz25XZbvqHFMZQV2E2ellsG7dJxI=']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1592841200221-a6898f307baa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHRvbWF0b3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),
        ]);

        //5
        $product = Product::create([
            'name' => 'Cam Vinh',
            'category_id' => 1,
            'price' => 45000,
            'description' => "Nước cam giúp hệ tiêu hóa trong cơ thể tốt hơn.
            Cam và một số loại trái cây giàu chất xơ có tác dụng hỗ trợ cho đường tiêu hóa. Nước cam phần nào sẽ giúp cho đường ruột hấp thụ dinh dưỡng, ngăn ngừa tình trạng táo bón. Còn có khả năng ngăn ngừa tình trạng viêm loét dạ dày. Vì thế uống mỗi ly nước cam hàng ngày bạn sẽ cảm thấy ăn uống ngon miệng, cơ thể hấp thụ dinh dưỡng tốt hơn.
            Tăng cường thể lực, sức đề kháng.
            Lượng đường fructoza và hơn 85% lượng nước trong mỗi trái cam sẽ nhanh chóng được cơ thể hấp thụ, có tác dụng giải khát và bồi bổ thể lực. Cơ thể mệt mỏi, mất nước hay các trường hợp người ốm lâu ngày khi uống nước cam sẽ giúp cơ thể hồi phục nhanh chóng. Nước cam còn có tác dụng giã rượu bia đối với những người say. Vậy thì tại sao bạn không dùng nước cam thay bằng các loại nước khác."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cam.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cam 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cam 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8b3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);

        //6
        $product = Product::create([
            'name' => 'Chanh vỏ vàng',
            'category_id' => 1,
            'price' => 30500,
            'description' => "Thức ăn chuyển hóa, yếu tố môi trường và quá trình tập luyện sẽ để lại một lượng axit trong cơ thể. Vì thế, nếu bạn duy trì thói quen uống nước chanh ấm hàng ngày, tính kiềm trong chanh sẽ cân bằng lượng axit dư và bảo vệ cơ thể khỏe mạnh hơn. Ngoài việc cân bằng độ pH cho cơ thể, nước chanh ấm còn kích thích các nhu động ruột, sản sinh nước bọt và axit dạ dày để giúp cho việc tiêu hóa diễn ra thuận lợi hơn. Đọc thêm 8 tác dụng của vỏ chanh cho sức khỏe con người."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vàng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vàng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh vang 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1605185189315-fc269c231e41?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGxlbW9ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),
        ]);

        //6
        $product = Product::create([
            'name' => 'Chanh vỏ xanh',
            'category_id' => 1,
            'price' => 25000,
            'description' => "Bạn từng nghe đến chế độ giảm cân nhờ chanh đúng không nhỉ? Uống 1 ly nước chanh nóng vào trước bữa ăn sẽ giảm sự thèm ăn. Nguyên lý ở đây là chất xơ hòa trong chanh vùng vi chất polyphenol chiết xuất từ vỏ chanh giúp duy trì thể trạng no lâu hơn. Nước chanh sẽ giúp cơ thể đào thải lượng nước dư thừa trong cơ thể qua đường tiểu, giúp cơ thể không bị phù nề do tích nước."
        ]);
        $product->medias()->saveMany([

            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh xanh 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chanh xanh 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1609889132493-1a2b06cd6631?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bGVtb24lMjBncmVlbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),

            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1580090311572-117290968989?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bGVtb24lMjBncmVlbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),
        ]);

        //7
        $product = Product::create([
            'name' => 'Cherry',
            'category_id' => 1,
            'price' => 150000,
            'description' => "Với màu sắc tươi tắn và vị ngọt thanh dịu, quả cherry được khá nhiều người ưa chuộng. Bạn có thể sẽ nhập “hội những người thường xuyên ăn cherry” nếu biết được những tác dụng của cherry đối với sức khỏe đấy!

            Quả cherry (quả anh đào) được trồng ở nhiều nước và nhập khẩu vào Việt Nam. Mỗi loại anh đào từ các nước lại có nhiều thương hiệu khác nhau như cherry New Zealand, cherry Úc, cherry Mỹ, cherry Chi Lê, cherry Trung Quốc… Một cốc hoặc khoảng 21 quả cherry chứa ít hơn 100 calo và đáp ứng khoảng 15% nhu cầu vitamin C hàng ngày của bạn. Vậy ăn cherry có tác dụng gì? Sau đây là 7 tác dụng của quả cherry chứng minh nó là một loại thực phẩm giàu dinh dưỡng mà bạn nên lựa chọn."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cherry.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cherry 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cherry 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1611096265583-5d745206f2a0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNoZXJyeXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),

        ]);

        //8
        $product = Product::create([
            'name' => 'Chôm chôm',
            'category_id' => 1,
            'price' => 10000,
            'description' => "Quả chôm chôm rất giàu khoáng chất, vitamin và các hợp chất thực vật có lợi. Cụ thể:

            Chất xơ: Phần thịt quả cung cấp khoảng 1,3-2 gam hàm lượng chất xơ trên 100 gam - tương tự với hàm lượng có trong táo, cam hoặc lê.
            Vitamin C: Vitamin C có trong chôm chôm giúp cơ thể hấp thụ sắt từ thực phẩm dễ dàng hơn. Vitamin này cũng hoạt động như một chất chống oxy hóa, bảo vệ các tế bào cơ thể bạn khỏi nguy cơ hư hại. Ăn 5-6 quả chôm chôm sẽ đáp ứng 50% nhu cầu vitamin C hàng ngày của cơ thể.
            Đồng: Chôm chôm cũng chứa một lượng đồng đáng kể, giúp phát triển và duy trì sự tồn tại của các tế bào khác nhau, bao gồm cả xương, não và tim.
            Các khoáng chất khác: Chôm chôm cũng cung cấp một lượng nhỏ mangan, phốt pho, kali, magie, sắt và kẽm. Ăn 100 gam (hoặc khoảng 4 quả) sẽ đáp ứng 20% ​​nhu cầu đồng hàng ngày và 2-6% lượng khuyến nghị hàng ngày của các chất dinh dưỡng khác."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chom 1.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chom 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chom 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1669300009292-13d8ade66167?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cmFtYnV0YW4lMjBmcnVpdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),
        ]);

        //9
        $product = Product::create([
            'name' => 'Chuối vàng',
            'category_id' => 1,
            'price' => 22000,
            'description' => "Chứa nhiều Pectin, chuối là phương pháp tự nhiên giúp giải độc cơ thể rất hiệu quả. Trong thực tế, Pectin giúp tăng bài tiết thủy ngân lên đến 150% trong vòng 24 tiếng khi ăn chuối. Nó còn giúp hạn chế hấp thụ chất béo và là cách giảm cân tuyệt vời từ thiên nhiên. Chuối chứa Vitamin C, vitamin A giúp tăng cường thị lực cho mắt. Ngoài ra, Beta Caroten, Vitamin E trong chuối còn giúp chống oxy hóa và rất có lợi cho mắt. Cùng với đó, Lutein là chất giúp giảm nguy cơ thoái hóa điểm vàng."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối vàng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối vàng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối vàng 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1543218024-57a70143c369?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJhbmFuYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),

        ]);
        // danh muc 2

        //1
        $product = Product::create([
            'name' => 'Bơ đậu phộng',
            'category_id' => 2,
            'price' => 50000,
            'description' => "Bơ đậu phộng là một loại thực phẩm tương đối chưa qua quá trình chế biến. Về cơ bản, thành phần chủ yếu bao gồm đậu phộng, thường được rang, xay cho đến khi chúng chuyển thành hỗn hợp sền sệt. Tuy nhiên, điều này không áp dụng cho nhiều nhãn hiệu bơ đậu phộng thương mại có chứa nhiều thành phần bổ sung khác nhau được bao gồm trong sản phẩm, chẳng hạn như đường, dầu thực vật hoặc có thể có cả chất béo chuyển hóa. Ăn quá nhiều đường và chất béo chuyển hóa bổ sung có liên quan đến các vấn đề sức khỏe khác nhau, chẳng hạn như bệnh tim.

            Thay vì mua đồ ăn vặt, hãy chọn bơ đậu phộng thật vì thành phần của bơ đậu phộng không nên chứa gì ngoài đậu phộng và có thể một chút muối."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ đậu phộng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ đậu phộng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bơ đậu phộng 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/flagged/photo-1625402535207-953e03369f59?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVhbnV0JTIwYnV0dGVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);


        //2
        $product = Product::create([
            'name' => 'Bột mỳ',
            'category_id' => 2,
            'price' => 20000,
            'description' => "Chất tạo độ chắc – độ đặc trong các món ăn.
            Chất kết dính được sử dụng trong các loại thực phẩm chế biến.
            Tạo độ đục cho nhân bánh dạng kem.
            Tạo độ bóng nhất định cho các loại hạt.
            Chất làm bền bọt được sử dụng cho các loại kẹo dẻo.
            Chất tạo gel được dùng trong các loại kẹo gum."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột mỳ 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột mỳ 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1595801105145-795f1927c0fc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fFdoZWF0JTIwZmxvdXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60']),

        ]);

        //3
        $product = Product::create([
            'name' => 'Bột sắn dây',
            'category_id' => 2,
            'price' => 22000,
            'description' => "Bột sắn dây là loại tinh bột thơm ngon, giàu dưỡng chất, được chiết xuất từ củ sắn dây – thành phần ngon nhất của sắn dây. Bột có màu trắng tinh, mịn, tác dụng thanh nhiệt, giải độc và trị được một số loại bệnh khác. Sắn dây là loài dây leo có rễ phát triển thành những củ rất to và dài, có củ to bằng cả bắp chân người lớn. Khi thu hoạch cây sắn dây, người ta chỉ lấy phần củ là chủ yếu, phần lá và rễ cũng có thể dùng làm thuốc chữa bệnh.

            Củ sắn dây có chứa các thành phần Isoflavone: Puerarin, Daidzein C15H10O4, Daidzein C21H20O9 và tinh bột, rất ngon và tốt cho sức khỏe nên được nhiều người ưa chuộng. Cây sắn dây nhỏ và dài, củ mọc sâu trong lòng đất, mỗi bụi có thể cho hàng chục, thậm chí là hàng trăm kg củ. Trong củ sắn dây có rất nhiều tinh bột, vị ngọt bùi, càng nhai càng hấp dẫn, thế nên thường được dùng để luộc chín rồi ăn, nếu sử dụng không hết thì làm bột khô để dành."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn dây.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn dây 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bột sắn dây 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://i0.wp.com/post.medicalnewstoday.com/wp-content/uploads/sites/3/2021/05/cassava_flour_GettyImages1034036504_Header-1024x575.jpg?w=1155&h=1528']),

        ]);

        //4
        $product = Product::create([
            'name' => 'Chuối sấy Gia Lai',
            'category_id' => 2,
            'price' => 33000,
            'description' => "Chuối sấy Gia Lai là một món ăn vặt quen thuộc, để được lâu, phù hợp cho nhiều đối tượng. Đặc biệt, chuối sấy rất tốt cho sức khỏe cũng như sắc đẹp của phụ nữ. Chuối sấy được lựa chọn từ những quả chuối chín ngon nhất, có thể sấy giòn bằng công nghệ mới giúp giữ được mùi hương tự nhiên, vị ngọt thanh khiết, giòn rụm và bổ dưỡng."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối sấy.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối sấy 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/chuối sấy 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://tuemanshop.com/wp-content/uploads/2019/05/chuoisay1.jpg']),

        ]);

        //5
        $product = Product::create([
            'name' => 'Dầu hạt cải',
            'category_id' => 2,
            'price' => 110000,
            'description' => "Dầu hạt cải được biết đến là một trong những loại dầu lành mạnh nhất cho tim. Đây là loại dầu chứa ít chất béo bão hòa nhất, giúp cho trái tim khỏe mạnh.

            Các axit béo cũng như sterol có trong dầu hạt cải có lợi cho sức khỏe của tim. Dầu hạt cải là một lựa chọn lành mạnh vì nó không chứa cholesterol.
            
            Các phytosterol trong dầu có thể làm giảm sự hình thành và hấp thụ cholesterol thu được từ các nguồn thực phẩm khác."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu hạt cải 3.png']),

        ]);


        //6
        $product = Product::create([
            'name' => 'Dầu Oliu',
            'category_id' => 2,
            'price' => 150000,
            'description' => "Ô liu là một loại cây trồng truyền thống của khu vực Địa Trung Hải. Người ta làm dầu ô liu bằng cách ép toàn bộ trái ô liu. Dầu ô liu được sử dụng phổ biến nhất cho những người mắc bệnh tim, cholesterol cao và huyết áp cao.

            Dầu ô liu được sử dụng trong nấu ăn, mỹ phẩm, thuốc, xà phòng và làm nhiên liệu cho đèn truyền thống. Dầu ô liu ban đầu đến từ Địa Trung Hải, cho đến nay nó phổ biến trên toàn thế giới.
            Trong thực phẩm, dầu ô liu được sử dụng làm dầu ăn và dầu trộn salad. Dầu ăn ô liu được phân loại theo hàm lượng acid oleic tự do. Dầu ô liu Extra virgin chứa tối đa 1% acid oleic tự do, dầu ô liu nguyên chất chứa 2% và dầu ô liu thông thường chứa 3,3%. Dầu ô liu chưa tinh chế sẽ có tỷ lệ acid oleic tự do cao hơn 3,3%, được coi là không phù hợp cho con người."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu ô liu.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu oliu 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/dầu oliu 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1572777856134-4e658bbf3b78?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG9saXZlJTIwb2lsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);


        //7
        $product = Product::create([
            'name' => 'Đậu đậu phộng',
            'category_id' => 2,
            'price' => 100000,
            'description' => "Dầu lạc hay còn gọi là dầu đậu phộng, được chiết xuất từ những hạt lạc (hạt đậu phộng). Dầu đậu phộng có hương vị rất thơm, ngọt và mạnh tương tự như dầu mè. Nó thường được sử dụng trong chế biến nhiều món ăn ở Đông Nam Á, Nam Á và Trung Quốc. Theo báo Lao Động, trong dầu lạc có chứa nhiều thành phần dinh dưỡng có lợi cho sức khỏe con người như: 17% chất béo bão hòa (SFA), 32% chất béo không bão hòa đa (PUFA) (omega 6) và 46% chất béo không bão hòa đơn (MUFA) (omega 3 và omega 9). Ngoài ra dầu lạc chứa nhiều vitamin E (Alpha Tocopherol), vitamin K và nhiều loại vitamin, khoáng chất khác."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đậu phộng.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đậu phộng 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đậu phộng 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://cdn.shopify.com/s/files/1/1695/0039/articles/peanut_oil_facts_1024x1024.jpg?v=1589653235']),

        ]);



        //8
        $product = Product::create([
            'name' => 'Gạo nếp hương',
            'category_id' => 2,
            'price' => 22000,
            'description' => "Vitamin E và dưỡng chất trong cám gạo nếp được đông y tận dụng chữa tê phù và chứng nghẹn, đồng thời cung cấp dinh dưỡng cần thiết cho da. Gạo nếp còn có tính ấm, vị ngọt, dễ tiêu hoá, giúp làm ấm bụng. Ngoài ra chúng còn được dùng chữa các bệnh tiêu chảy, tiểu đường, buồn nôn, rối loạn bài tiết…"
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/gạo nếp.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/gạo nếp 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/gạo nếp 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1562525922-cde78e2119f9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8c3RpY2t5JTIwcmljZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60']),

        ]);
        // danh muc 3
        //1
        $product = Product::create([
            'name' => 'Bắp cải',
            'category_id' => 3,
            'price' => 23500,
            'description' => "Bắp cải hay còn được gọi là cải bắp, có tên khoa học là Brassica oleracea thuộc nhóm Capitata, họ mù tạt Brassicaceae (hay Cruciferae).

            Bắp cải là cây thân thảo có thân to và cứng. Lá xếp ốp vào nhau thành đầu. Phiến lá màu lục nhạt. Cây bắp cải vào năm thứ hai sẽ ra hoa, hoa có màu vàng, ra thành chùm ở ngọn. Bề mặt lá bắp cải xanh trơn nhẵn, mọng nước. Chúng có màu đậm ở bên ngoài và nhạt dần ở các lớp trong. Lá bên ngoài thường có màu xanh lá đậm đến xanh lá nhạt. Lá ở bên trong có màu xanh nhạt đến màu trắng. Kết cấu giữa lớp lá không quá chặt, lá giòn và dễ gãy khi tách."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bắp cải.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bắp cải 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bắp cải 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1519897831810-a9a01aceccd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FiYmFnZSUyMHBhdGNofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);

        //2
        $product = Product::create([
            'name' => 'Bí đỏ',
            'category_id' => 3,
            'price' => 15000,
            'description' => "Bí đỏ là loại thực phẩm rất phổ biến trong bữa ăn hàng ngày của chúng ta. Tuy nhiên, những lợi ích của bí đỏ đối với sức khỏe không phải ai cũng biết:

            Bí đỏ giúp sáng mắt
            
                Bí đỏ có chứa lượng lớn beta carotene, khi vào trong cơ thể chất này được chuyển hóa thành Vitamin A. Đây là chất cần thiết cho mắt, giúp võng mạc hấp thụ và xử lý ánh sáng tốt hơn. Ngoài ra, bí đỏ còn chứa lutein và zeaxanthin có tác dụng chống oxy hóa giúp ngăn ngừa đục thủy tinh thể và làm chậm sự phát triển của thoái hóa điểm vàng.
            
            Tốt cho tim mạch
            
                Hạt bí đỏ giàu chất physterol và các axit béo omega 3, omega 6 tốt cho sức khỏe. Những chất này có tác dụng làm giảm lượng cholesterol xấu, giúp ngăn ngừa bệnh tim mạch và huyết áp.
            
            Giảm cân
            
            Bí đỏ chứa hàm lượng calo và chất béo rất thấp, là một thực phẩm giàu chất xơ vì vậy bí đỏ chính là một thực phẩm lí tưởng cho những người thừa cân, béo phì."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bí đỏ.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bí đỏ 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bí đỏ 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1509622905150-fa66d3906e09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);


        //3
        $product = Product::create([
            'name' => 'Cà rốt',
            'category_id' => 3,
            'price' => 35000,
            'description' => "Cà rốt được trồng đầu tiên ở Afghanistan vào khoảng năm 900 sau Công nguyên. Nhiều người biết đến cà rốt với màu cam rực rỡ đặc trưng, nhưng thực tế thì loại củ này cũng có các màu sắc khác, chẳng hạn như tím hoặc vàng, đỏ và trắng.

            Loại củ phổ biến và đa năng này có thể mang hương vị hơi khác nhau tùy thuộc vào màu sắc, kích thước và nơi trồng. Đường trong cà rốt tạo ra vị ngọt nhẹ, nhưng đôi khi cũng có thể mang mùi đất hoặc hơi đắng."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà rốt.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà rốt 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà rốt 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://images.unsplash.com/photo-1582515073490-39981397c445?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2Fycm90fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);





        //4
        $product = Product::create([
            'name' => 'Cà tím',
            'category_id' => 3,
            'price' => 22000,
            'description' => "Giảm nguy cơ mắc bệnh tim mạch. Cà tím có chứa kali, vitamin C và vitamin B6 là những chất chống oxy hóa có thể tăng cường sức khỏe tim mạch và giúp giảm nguy cơ mắc bệnh tim. ...
            Chống oxy hóa, ngăn ngừa ung thư ...
            Kiểm soát lượng đường trong máu. ...
            Hỗ trợ quá trình giảm cân. ...
            Tăng cường chức năng trí não."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà tím.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà tím 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cà tím 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://cdn.caythuocdangian.com/2019/03/ca-tim-co-cong-dung-gi.jpg']),

        ]);
        // danh muc 4
        //1
        $product = Product::create([
            'name' => 'Cánh gà ta',
            'category_id' => 4,
            'price' => 55000,
            'description' => "Cánh gà làm sạch, ngâm với nước ấm pha muối loãng, thêm vài lát gừng, hành củ đập dập trong 10-15 phút để khử mùi. Sau đó, rửa sạch, thấm khô. Nếu cánh nhỏ thì để nguyên, cánh to thì cắt thành các miếng vừa ăn. Ướp cánh gà với gia vị: 1 thìa cà phê muối, 1 thìa cà phê hạt tiêu, 1 thìa cà phê hạt nêm, 2 thìa cà phê ớt bột tạo màu Hàn Quốc, 2 thìa cà phê dầu hào, 1 thìa cà phê mỡ gà hoặc mỡ lợn, 1 thìa canh bột bắp và chút gừng, hành củ đập dập (khi rán bỏ gừng, hành ra, tránh bị cháy). Đeo găng tay trộn và thoa đều các mặt cho gia vị thấm đều. Để ướp trong 15 – 20 phút."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cánh gà.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cánh gà 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cánh gà 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://cdn.cet.edu.vn/wp-content/uploads/2018/03/canh-ga-chien-nuoc-mam.jpg']),

        ]);


        //2
        $product = Product::create([
            'name' => 'Thịt đùi dê',
            'category_id' => 4,
            'price' => 350000,
            'description' => "Thịt dê là loại thịt có hàm lượng chất dinh dưỡng phong phú. Do đó, việc bổ sung thịt dê vào chế độ ăn uống có thể nhận được nhiều lợi ích về sức khỏe. Hãy cùng tìm hiểu xem ăn thịt dê có tác dụng gì để hiểu lý do tại sao bạn nên bổ sung loại thực phẩm này vào thực đơn nhé.

            Ăn thịt dê có tốt không? Thịt dê có calo, chất béo bão hòa cũng như cholesterol ít hơn so với nhiều loại thịt khác. Không những thế, thịt dê lại có hàm lượng sắt, kali cao hơn so với thịt bò, thịt heo, thịt cừu hay thịt gà nhưng hàm lượng muối natri lại thấp hơn. Do đó, việc ăn thịt dê đúng cách có thể mang đến nhiều lợi ích về sức khỏe. 
            Tác dụng thịt dê có thể làm giảm nguy cơ viêm nhiễm, đặc biệt là trong mạch máu. Đó là do trong thịt dê có thành phần axit linoleic liên hợp, một trong số những axit béo có khả năng ngăn ngừa và giảm viêm."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/Đùi cừu.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi cừu 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi cừu 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://csfood.vn/wp-content/uploads/2017/07/%C4%90%C3%B9i-d%C3%AA.jpg']),

        ]);



        //3
        $product = Product::create([
            'name' => 'Đùi gà',
            'category_id' => 4,
            'price' => 55000,
            'description' =>  "Lợi ích của đùi gà
            Cung cấp chất béo tốt cho cơ thể
            
            Mặc dù trong đùi gà chứa nhiều chất béo nhưng lại là loại chất béo không bão hòa đơn, giúp giảm đi lượng cholesterol LDL xấu, nhưng lại có thể làm tăng cholesterol HDL tốt.
            
            Hỗ trợ răng và xương
            
            Trong thịt đùi gà giàu phốt pho, đây là một khoáng chất rất tốt cho sự phát triển của xương và răng. Ngoài ra, phốt pho còn giúp các cơ quan như: Thận, gan, hệ thần kinh,...được hoạt động tốt hơn."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/Đùi gà.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi gà 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/đùi gà (2).png']),
            new Media(['type_media_id' => 1, 'url' => 'https://cdn.tgdd.vn/Files/2022/02/08/1414430/dui-ga-va-uc-ga-bo-phan-nao-nen-an-va-tot-cho-suc-khoe-hon-202202081610437607.jpg']),

        ]);


        //4
        $product = Product::create([
            'name' => 'Mề gà',
            'category_id' => 4,
            'price' => 45000,
            'description' => "Theo nghiên cứu, mỗi phần mề gà có khả năng cung cấp khoảng 30,39g Protein cho cơ thể. Lượng Protein này cung cấp năng lượng để cơ thể tạo cơ bắp. Trong 100g mề gà chứa khoảng 2,68g chất béo. Lượng chất béo này ít hơn so với 1g chất béo bão hòa. Do đó, chúng cung cấp nhiều Protein nhưng lại chứa ít chất béo. Nếu bạn đang tìm cách giảm cân hoặc tăng cơ thì đây là loại thực phẩm khá lý tưởng. Thậm chí, chất béo trong mề gà còn tốt hơn so với thịt heo hay thịt bò. Mề gà không chỉ cung cấp một lượng dinh dưỡng cần thiết cho con người, mà nó còn được cho là rất tốt cho hệ tiêu hóa con người. Ăn mề gà sẽ rất tốt cho tì vị, điều trị được những chứng bệnh về hệ tiêu hóa như khó tiêu, thức ăn tích tụ."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/mề gà.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/mề gà 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/mề gà 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://file.hstatic.net/1000115147/article/-ich-dinh-duong-gi-cho-suc-khoe-0_975a2bb96f094073b87f4189323a6d91_d90ad3223a024ff9bc50ff97f53e6a75.jpg']),

        ]);


        //5
        $product = Product::create([
            'name' => 'Sườn bò',
            'category_id' => 4,
            'price' => 300000,
            'description' => "Bò là thực phẩm cao cấp, giá trị dinh dưỡng lớn có mặt trong nhiều khẩu phần ăn từ phục hồi sức khỏe để tăng cơ, giảm cân… Thịt bò có nhiều loại, mỗi phần chứa đặc trưng hương vị và giá trị dinh dưỡng riêng. Sườn bò là phần thịt ngon đặc biệt được nhiều người yêu thích.

            Giá tiền sườn bò đắt đỏ, người dùng cần cân nhắc trong thời điểm cuối năm để chọn mua loại thịt ngon, an toàn. Thông tin dưới đây sẽ giúp người tiêu dùng chọn mua loại sườn bò tươi ngon, phù hợp để chăm sóc sức khỏe các thành viên trong dịp tết sắp tới."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn bò.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn bò 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn bò 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://famfood.vn/upload/images/suon-bo-ngon.jpg']),
        ]);


        //6
        $product = Product::create([
            'name' => 'Sườn heo',
            'category_id' => 4,
            'price' => 89000,
            'description' => "Tạo ra các năng lực cung cấp cho cơ thể, có khả năng bảo vệ tế bào khỏi các tấn công của các tác nhân nhiễm trùng, nhờ đặc tính chống lại quá trình oxy hóa, phục hồi các cấu trúc bị tổn thương.

            Tham gia vào cấu tạo tế bào, chuyển hóa cung cấp năng lượng cũng như tất cả các hoạt động sống của cơ thể, nhờ Vitamin và khoáng chất, giúp kích thích ăn uống, giúp da tóc bóng mượt, và phát triển của hệ thần kinh."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn heo.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn heo 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/sườn heo 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://bizweb.dktcdn.net/thumb/large/100/042/260/files/mua-uon-que-gia-re-95f6a82b-a0e6-448d-888c-0d3dc8d9bd36.jpg?v=1605239935847']),

        ]);


        //7
        $product = Product::create([
            'name' => 'Bò beefsteak',
            'category_id' => 4,
            'price' => 250000,
            'description' => "Việc sử dụng thịt bò thường xuyên mang lại rất nhiều lợi ích cho sức khỏe như tăng cường cơ bắp, giàu vitamin B6 và protein giúp cải thiện hệ miễn dịch, chuyển hóa và tổng hợp thức ăn góp phần phục hồi cơ thể sau khi hoạt động. Khoáng chất carnitine hỗ trợ quá trình chuyển hóa chất béo, chuỗi axit amin giữ cho cơ thể được cân đối. Khoáng chất sắt có trong thịt bò giúp bổ sung lượng máu trong cơ thể. Ngoài ra, thịt bò còn cực kì hiệu quả trong vấn đề giảm cân và phòng tránh ung thư."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit tét.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit bét 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit tét 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/thịt bò bit tét 3.pnghttps://images.unsplash.com/photo-1666013942642-b7b54ecafd7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YmVlZnN0ZWFrfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60']),

        ]);


        //1
        $product = Product::create([
            'name' => 'Bạch tuộc',
            'category_id' => 5,
            'price' => 150000,
            'description' => "Thịt bạch tuộc còn gọi là Chương ngư là phần thịt của con bạch tuộc. Nhiều nơi trên thế giới bắt bạch tuộc để ăn, tua và các bộ phận khác được chế biến theo nhiều cách, thường là tùy thuộc vào mỗi loại bạch tuộc. Bạch tuộc còn là một thực phẩm phổ biến đối với đầu bếp Nhật, giống như sushi, takoyaki và akashiyaki. Một số loài bạch tuộc còn được dùng để ăn sống và làm thực phẩm bồi bổ sức khỏe (hầu hết ở Hàn Quốc).

            Món nổi tiếng về bạch tuộc là Sannakji là một trong các biến thể của hoe trong ẩm thực Triều Tiên. Món này làm từ bạch tuộc sống. Loại bạch tuộc nhỏ vẫn còn tươi nguyên và được cắt thành miếng được tẩm gia vị, một chút dầu vừng và ăn ngay. Người ăn phải nhai thật kỹ trước khi nuốt. Nếu để những chiếc xúc tu dính vào vòm họng có thể gây ra tình trạng tắc thở."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bạch tuộc.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bạch tuộc mực.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/bạch tuộc 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://nuongthom.net/wp-content/uploads/2018/02/tac-dung-cua-bach-tuoc-3-min.jpg']),

        ]);





        //3
        $product = Product::create([
            'name' => 'Cá hồi',
            'category_id' => 5,
            'price' => 230000,
            'description' => "Giảm nguy cơ mắc bệnh tim và đột quỵ
            Cá hồi giàu axit béo omega-3 giúp cải thiện lượng cholesterol trong máu cũng như điều hòa huyết áp, đồng thời omega-3 cũng giúp làm giảm nguy cơ máu vón vục dẫn đến tắc nghẽn mạch máu, giúp tránh các bệnh về tim và làm giảm đột quỵ.
            
            Trong một nghiên cứu cũ hơn, tiêu thụ 2 phần cá hồi nuôi mỗi tuần làm tăng lượng omega-3 trong máu lên 8-9% và giảm mức omega-6 sau 4 tuần. Ngoài ra, một số nghiên cứu cho thấy rằng tiêu thụ cá thường xuyên có thể liên quan đến việc giảm mức chất béo trung tính và cải thiện một số yếu tố nguy cơ khác đối với bệnh tim."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá hồi.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá hồi 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá hồi 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://vinmec-prod.s3.amazonaws.com/images/20200420_150020_434782_cahoi.max-1800x1800.png']),

        ]);







        //5
        $product = Product::create([
            'name' => 'Cá Mè',
            'category_id' => 5,
            'price' => 120000,
            'description' => "Cá mè vị ngọt, tính ấm, không độc, có tác dụng bổ não tủy, nhuận phế, ích tỳ vị. Trong sách thuốc cổ có ghi: Thịt cá mà trắng có tác dụng khai vị, hạ khí, điều hòa ngũ tạng, chống hư huyết mạch, bổ gan, sáng mắt. Dùng cho các trường hợp tỳ vị hư hàn, ăn kém, đau bụng, đầy bụng, da thô ráp, tróc da và da khô."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá mè 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá mè.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/cá mè3.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://www.cakhotranluan.com/images/tac_dung_cua_ca_me_2.jpg']),

        ]);





        //6
        $product = Product::create([
            'name' => 'Tôm sú',
            'category_id' => 5,
            'price' => 220000,
            'description' => "Đặc điểm tôm sú
            Tôm sú, tên khoa học là Penaeus monodon, là một loại tôm được ưa chuộng khắp thế giới. Tôm sú được biết đến là loài tôm biển, phân bố trải dài từ bờ Đông Châu Phi đến tận bờ biển Nhật Bản. Ở một số vùng biển Đông Úc, Địa Trung Hải, Hawaii và bờ biển Đại Tây Dương của Mỹ cũng xuất hiện loài tôm này nhưng với số lượng không nhiều.
            
            Tôm sú có kích thước lớn, trung bình dài khoảng 36cm mỗi con và đồng thời khối lượng cũng lớn hơn so với các loại tôm khác, lên đến 650gr/con. Vỏ tôm dày gồm nhiều màu như đỏ, nâu, xám, xanh đan xen. Thịt tôm sú cũng dai và chắc hơn so với tôm thẻ.
            
            Tôm sú là loài động vật máu lạnh nên rất dễ bị ảnh hưởng bởi khí hậu. Trước kia, tôm sú chỉ sinh sống ở biển nhưng do thị hiếu người tiêu dùng nên loại tôm này đã được nuôi trồng ở các vùng nước ngọt."
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm sú.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm sú 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm sú 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://cdn.tgdd.vn/2021/09/content/unnamed(1)-800x500.jpg']),

        ]);

        //7
        $product = Product::create([
            'name' => 'Tôm Hùm',
            'category_id' => 5,
            'price' => 400000,
            'description' => "Ăn tôm hùm có tác dụng gì? 7 lợi ích từ tôm hùm biển
            Cung cấp Protein cho cơ thể
            Cải thiện tập trung trí não.
            Bổ sung canxi cho xương chắc khỏe.
            Hỗ trợ cải thiện sức khỏe tim mạch.
            Giảm tình trạng viêm, sưng.
            Hỗ trợ ngăn ngừa bệnh ung thư
            Cải thiện tình trạng thiếu máu cơ thể"
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hùm xanh 3 (2).png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hùm xanh.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/tôm hùm xanh 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://file.hstatic.net/1000030244/file/an-tom-hum-co-tac-dung-gi-1_a5e37cfe042d493b890fb7c988675ddb_grande.jpg']),

        ]);


        //9
        $product = Product::create([
            'name' => 'Ngao biển',
            'category_id' => 5,
            'price' => 220000,
            'description' => "Dưới đây xin giới thiệu những tác dụng tuyệt vời của ngao.
            Ngao là động vật thân mềm, sống ở gần các bờ biển. ...
            Ngăn chặn bệnh Alzheimer.
            Ngăn chặn bệnh thiếu máu.
            Chống bệnh viêm khớp.
            Tăng cường hệ miễn dịch.
            Giúp điều tiết nồng độ đường trong máu.
            Giúp răng lợi khỏe mạnh.
            Tốt cho tuyến giáp"
        ]);
        $product->medias()->saveMany([
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/ngao 3.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/ngao 2.png']),
            new Media(['type_media_id' => 1, 'url' => 'http://localhost:8000/img/ngao.png']),
            new Media(['type_media_id' => 1, 'url' => 'https://caogam.vn/sites/default/files/styles/anh_og_image/public/2021-05/hinh-anh-con-ngao-1.jpg?itok=NqH2J_-9']),

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

    }
}
