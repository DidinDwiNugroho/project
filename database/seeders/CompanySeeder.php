<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            [
                'user_id' => 3,
                'category_id' => 1,
                'name' => 'CV. CIPTA KARYA SEJAHTERA',
                'owner_identification_number' => '123456789',
                'owner_name' => 'Dimas Anggara',
                'address' => 'Kab. Banyuwangi',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugiat culpa veniam vitae repellat illum, nulla natus inventore temporibus? Inventore distinctio rem quam saepe consectetur ratione numquam eaque atque hic sequi, dolore sed molestias libero voluptatibus assumenda a. Ipsam animi libero fuga aut ea possimus maiores fugit deserunt alias? Enim quasi totam vitae, non eveniet ad cupiditate eum ab vero dolores neque harum pariatur rerum, velit eius delectus! Cumque ipsam reprehenderit soluta accusamus sunt molestias quia deleniti provident aliquid cum quas sequi, voluptates saepe aspernatur alias eligendi praesentium sit. Neque ipsam tenetur reiciendis aut quibusdam veritatis ad atque unde sit?',
                'status' => 'approved'
            ],
            [
                'user_id' => 3,
                'category_id' => 2,
                'name' => 'CV. TECH ID',
                'owner_identification_number' => '1234567',
                'owner_name' => 'Wiji Tukul',
                'address' => 'Kab. Banyuwangi',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugiat culpa veniam vitae repellat illum, nulla natus inventore temporibus? Inventore distinctio rem quam saepe consectetur ratione numquam eaque atque hic sequi, dolore sed molestias libero voluptatibus assumenda a. Ipsam animi libero fuga aut ea possimus maiores fugit deserunt alias? Enim quasi totam vitae, non eveniet ad cupiditate eum ab vero dolores neque harum pariatur rerum, velit eius delectus! Cumque ipsam reprehenderit soluta accusamus sunt molestias quia deleniti provident aliquid cum quas sequi, voluptates saepe aspernatur alias eligendi praesentium sit. Neque ipsam tenetur reiciendis aut quibusdam veritatis ad atque unde sit?',
                'status' => 'pending'
            ],
            [
                'user_id' => 3,
                'category_id' => 4,
                'name' => 'CV. Teknologi ID',
                'owner_identification_number' => '12345',
                'owner_name' => 'Panji Kusumo',
                'address' => 'Kab. Banyuwangi',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugiat culpa veniam vitae repellat illum, nulla natus inventore temporibus? Inventore distinctio rem quam saepe consectetur ratione numquam eaque atque hic sequi, dolore sed molestias libero voluptatibus assumenda a. Ipsam animi libero fuga aut ea possimus maiores fugit deserunt alias? Enim quasi totam vitae, non eveniet ad cupiditate eum ab vero dolores neque harum pariatur rerum, velit eius delectus! Cumque ipsam reprehenderit soluta accusamus sunt molestias quia deleniti provident aliquid cum quas sequi, voluptates saepe aspernatur alias eligendi praesentium sit. Neque ipsam tenetur reiciendis aut quibusdam veritatis ad atque unde sit?',
                'status' => 'approved'
            ],
        ]);
    }
}
