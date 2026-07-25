<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Superadmin
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@giaocaptoc.com',
            'password' => Hash::make('admin123'),
            'role' => 'superadmin',
        ]);

        // 2. Create Categories
        $categories = [
            'flowers' => [
                'name' => 'Hoa Dịp Lễ',
                'description' => 'Thiết kế hoa tươi đẹp mắt, chúc mừng, sinh nhật hỏa tốc.',
                'icon_class' => 'fa-solid fa-gift',
                'eta_label' => '⚡ Giao nhanh 1h'
            ],
            'accessories' => [
                'name' => 'Phụ Kiện Điện Thoại',
                'description' => 'Ốp lưng silicon, kính cường lực, tai nghe bluetooth chính hãng.',
                'icon_class' => 'fa-solid fa-headphones',
                'eta_label' => '⚡ Giao nhanh 1.5h'
            ],
            'drinks' => [
                'name' => 'Trà Sữa & Nước',
                'description' => 'Trà sữa trân châu, trà đào cam sả, cà phê muối giải khát tức thì.',
                'icon_class' => 'fa-solid fa-mug-hot',
                'eta_label' => '⚡ Giao nhanh 45m'
            ],
            'food' => [
                'name' => 'Đồ Ăn Vặt / Xế',
                'description' => 'Gà rán giòn rụm, bánh tráng trộn full topping, burger phô mai nóng hổi.',
                'icon_class' => 'fa-solid fa-burger',
                'eta_label' => '⚡ Giao nhanh 30m'
            ],
            'others' => [
                'name' => 'Mặt Hàng Khác',
                'description' => 'Sạc dự phòng dung lượng cao, hộp súp nóng hổi, hoa sáp quà tặng.',
                'icon_class' => 'fa-solid fa-boxes-stacked',
                'eta_label' => '⚡ Nhận sáng mai'
            ],
        ];

        $categoryModels = [];
        foreach ($categories as $key => $cat) {
            $categoryModels[$key] = Category::create([
                'name' => $cat['name'],
                'slug' => $key,
                'description' => $cat['description'],
                'icon_class' => $cat['icon_class'],
                'eta_label' => $cat['eta_label'],
                'is_active' => true,
            ]);
        }

        // 3. Create Seeded Products
        $products = [
            // Flowers
            [
                'category_id' => $categoryModels['flowers']->id,
                'sub_category' => 'Bó hoa tươi',
                'name' => 'Bó hoa hướng dương rực rỡ (3 bông lớn)',
                'brand' => 'Dalat Farm',
                'price' => 350000,
                'eta' => 'Giao trong 1 giờ',
                'font_awesome_icon' => 'fa-solid fa-gift',
                'is_featured' => true,
            ],
            [
                'category_id' => $categoryModels['flowers']->id,
                'sub_category' => 'Bó hoa tươi',
                'name' => 'Bó hồng đỏ tình yêu cổ điển (9 bông)',
                'brand' => 'Love Florist',
                'price' => 450000,
                'eta' => 'Giao trong 1.5 giờ',
                'font_awesome_icon' => 'fa-solid fa-gift',
            ],
            [
                'category_id' => $categoryModels['flowers']->id,
                'sub_category' => 'Cây trang trí',
                'name' => 'Chậu sen đá cảnh mini decor bàn làm việc',
                'brand' => 'Decor Garden',
                'price' => 85000,
                'eta' => 'Giao trong 2 giờ',
                'font_awesome_icon' => 'fa-solid fa-seedling',
            ],
            [
                'category_id' => $categoryModels['flowers']->id,
                'sub_category' => 'Giỏ quả tặng',
                'name' => 'Giỏ hoa quả tươi cao cấp (Tặng kèm thiệp)',
                'brand' => 'Fresh Gift',
                'price' => 600000,
                'eta' => 'Giao trong 2 giờ',
                'font_awesome_icon' => 'fa-solid fa-gift',
            ],

            // Accessories
            [
                'category_id' => $categoryModels['accessories']->id,
                'sub_category' => 'Ốp điện thoại',
                'name' => 'Ốp lưng iPhone 15 Pro Max Silicon chống sốc',
                'brand' => 'Spigen',
                'price' => 120000,
                'eta' => 'Giao trong 1 giờ',
                'font_awesome_icon' => 'fa-solid fa-mobile-screen-button',
            ],
            [
                'category_id' => $categoryModels['accessories']->id,
                'sub_category' => 'Kính cường lực',
                'name' => 'Kính cường lực KingKong full màn hình 9H',
                'brand' => 'KingKong',
                'price' => 90000,
                'eta' => 'Giao trong 1 giờ',
                'font_awesome_icon' => 'fa-solid fa-shield-halved',
            ],
            [
                'category_id' => $categoryModels['accessories']->id,
                'sub_category' => 'Tai nghe không dây',
                'name' => 'Tai nghe Bluetooth không dây Hoco EW45',
                'brand' => 'Hoco',
                'price' => 280000,
                'eta' => 'Giao trong 1.5 giờ',
                'font_awesome_icon' => 'fa-solid fa-headphones',
                'is_featured' => true,
            ],
            [
                'category_id' => $categoryModels['accessories']->id,
                'sub_category' => 'Cáp sạc & Pin',
                'name' => 'Cáp sạc nhanh Type-C to Lightning 20W',
                'brand' => 'Anker',
                'price' => 95000,
                'eta' => 'Giao trong 1 giờ',
                'font_awesome_icon' => 'fa-solid fa-plug',
            ],

            // Drinks
            [
                'category_id' => $categoryModels['drinks']->id,
                'sub_category' => 'Trà sữa',
                'name' => 'Trà sữa trân châu hoàng kim size L (Nhiều đá)',
                'brand' => 'Gong Cha',
                'price' => 55000,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-mug-hot',
                'is_featured' => true,
            ],
            [
                'category_id' => $categoryModels['drinks']->id,
                'sub_category' => 'Trà hoa quả',
                'name' => 'Trà đào cam sả đá xay mát lạnh ngày hè',
                'brand' => 'The Coffee House',
                'price' => 48000,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-glass-water',
            ],
            [
                'category_id' => $categoryModels['drinks']->id,
                'sub_category' => 'Trà sữa',
                'name' => 'Matcha Latte macchiato kem sữa béo ngậy',
                'brand' => 'Phúc Long',
                'price' => 60000,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-mug-hot',
            ],
            [
                'category_id' => $categoryModels['drinks']->id,
                'sub_category' => 'Cà phê',
                'name' => 'Cafe muối đậm vị truyền thống Huế',
                'brand' => 'Cà Phê Muối',
                'price' => 35000,
                'eta' => 'Giao trong 30 phút',
                'font_awesome_icon' => 'fa-solid fa-coffee',
            ],

            // Food
            [
                'category_id' => $categoryModels['food']->id,
                'sub_category' => 'Gà rán & Burger',
                'name' => 'Gà rán giòn sốt cay Hàn Quốc (Combo 2 miếng)',
                'brand' => 'Lotteria',
                'price' => 79000,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-burger',
            ],
            [
                'category_id' => $categoryModels['food']->id,
                'sub_category' => 'Ăn vặt',
                'name' => 'Bánh tráng trộn khô bò full topping tép mỡ',
                'brand' => 'Bánh Tráng Cô Ba',
                'price' => 30000,
                'eta' => 'Giao trong 30 phút',
                'font_awesome_icon' => 'fa-solid fa-bowl-food',
            ],
            [
                'category_id' => $categoryModels['food']->id,
                'sub_category' => 'Gà rán & Burger',
                'name' => 'Combo Burger Bò Phô Mai + Khoai tây chiên',
                'brand' => 'McDonalds',
                'price' => 95000,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-burger',
                'is_featured' => true,
            ],
            [
                'category_id' => $categoryModels['food']->id,
                'sub_category' => 'Mì cay',
                'name' => 'Mì cay hải sản kim chi cấp độ 2 nóng hổi',
                'brand' => 'Mì Cay Seoul',
                'price' => 55000,
                'eta' => 'Giao trong 40 phút',
                'font_awesome_icon' => 'fa-solid fa-bowl-hot',
            ],

            // Others
            [
                'category_id' => $categoryModels['others']->id,
                'sub_category' => 'Cáp sạc & Pin',
                'name' => 'Sạc dự phòng dung lượng cao 10.000mAh',
                'brand' => 'Xiaomi',
                'price' => 350000,
                'eta' => 'Giao trong 1.5 giờ',
                'font_awesome_icon' => 'fa-solid fa-battery-three-quarters',
            ],
            [
                'category_id' => $categoryModels['others']->id,
                'sub_category' => 'Quà tặng sáp',
                'name' => 'Bó hoa sáp thơm cao cấp lưu hương lâu',
                'brand' => 'Flower Corner',
                'price' => 250000,
                'eta' => 'Giao trong 2 giờ',
                'font_awesome_icon' => 'fa-solid fa-gift',
            ],
            [
                'category_id' => $categoryModels['others']->id,
                'sub_category' => 'Món ăn phụ',
                'name' => 'Hộp súp cua óc heo trứng bắc thảo nóng',
                'brand' => 'Súp Cua Hạnh',
                'price' => 40000,
                'eta' => 'Giao trong 30 phút',
                'font_awesome_icon' => 'fa-solid fa-bowl-food',
            ],
        ];

        foreach ($products as $p) {
            Product::create(array_merge($p, [
                'slug' => Str::slug($p['name']),
                'stock' => 20,
                'sold' => rand(2, 10),
                'is_active' => true
            ]));
        }

        // 4. Create Flash Sale Products
        $flashSales = [
            [
                'category_id' => $categoryModels['flowers']->id,
                'sub_category' => 'Bó hoa tươi',
                'name' => 'Flash Sale: Bó hồng đỏ tình yêu cổ điển (9 bông)',
                'brand' => 'Love Florist',
                'price' => 315000,
                'old_price' => 450000,
                'discount' => 30,
                'sold' => 14,
                'stock' => 20,
                'eta' => 'Giao trong 1 giờ',
                'font_awesome_icon' => 'fa-solid fa-gift',
                'is_flashsale' => true,
            ],
            [
                'category_id' => $categoryModels['accessories']->id,
                'sub_category' => 'Tai nghe không dây',
                'name' => 'Flash Sale: Tai nghe Bluetooth Hoco EW45',
                'brand' => 'Hoco',
                'price' => 199000,
                'old_price' => 280000,
                'discount' => 29,
                'sold' => 18,
                'stock' => 25,
                'eta' => 'Giao trong 1.5 giờ',
                'font_awesome_icon' => 'fa-solid fa-headphones',
                'is_flashsale' => true,
            ],
            [
                'category_id' => $categoryModels['drinks']->id,
                'sub_category' => 'Trà sữa',
                'name' => 'Flash Sale: Trà sữa trân châu hoàng kim Gong Cha',
                'brand' => 'Gong Cha',
                'price' => 39000,
                'old_price' => 55000,
                'discount' => 29,
                'sold' => 32,
                'stock' => 50,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-mug-hot',
                'is_flashsale' => true,
            ],
            [
                'category_id' => $categoryModels['food']->id,
                'sub_category' => 'Gà rán & Burger',
                'name' => 'Flash Sale: Gà rán giòn sốt cay Lotteria (Combo 2 miếng)',
                'brand' => 'Lotteria',
                'price' => 49000,
                'old_price' => 79000,
                'discount' => 38,
                'sold' => 9,
                'stock' => 15,
                'eta' => 'Giao trong 45 phút',
                'font_awesome_icon' => 'fa-solid fa-burger',
                'is_flashsale' => true,
            ],
        ];

        foreach ($flashSales as $fs) {
            Product::create(array_merge($fs, [
                'slug' => Str::slug($fs['name']),
                'is_active' => true
            ]));
        }
    }
}
