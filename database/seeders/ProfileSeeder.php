<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::truncate();
        Profile::create([
            'name' => 'Deen Sakeerin Khami',
            'title' => 'Full Stack Web Developer',
            'about' => 'With more than four years of experience in web development, I have a proven ability to create robust, high-performing websites. My skill set covers a broad range of technologies, including HTML5, PHP, MySQL, and JavaScript, as well as expertise in database design, precise code development and testing, and effective problem-solving. I am committed to delivering long-term, maintainable solutions, consistently prioritizing quality over short-term workarounds.',
            'photo' => null, // Add image later if you like (storage path)
            'email' => 'sakeerin.kh@gmail.com',
            'phone' => '061-5819934',
            'address' => 'Promsuk Mansion, Thung Phaya Thai, Ratchathewi, Bangkok',
        ]);
    }
}
