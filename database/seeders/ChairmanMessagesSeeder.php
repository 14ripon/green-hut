<?php

namespace Database\Seeders;

use App\Models\ChairmanMessages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChairmanMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChairmanMessages::truncate(); // optional (remove old data)

        ChairmanMessages::create([
            'name' => 'Sophia Williams',
            'designation' => 'Chairman',
            'photo' => 'chairman/default.jpg', // storage path
            'message' => '
                        <p>It is with immense pride and gratitude that I share a few words with you. Since the inception of [Your Company/Organization Name], our journey has been driven by the principles of integrity, hard work, and a vision to create lasting value for all stakeholders. What started as a small initiative has now grown into a trusted name, and this achievement has been possible only through the dedication of our team, the trust of our clients, and the support of our community.</p>
                        <p>We live in a world that is rapidly changing. Technology, globalization, and shifting social needs continue to reshape industries and societies. In this environment, it is essential not only to keep pace with change but also to anticipate and lead it. At [Your Company/Organization Name], we are committed to continuous learning, innovation, and responsible growth. Our aim is not merely to achieve business success but to contribute positively to the lives of the people we serve.</p>
                        <p>I firmly believe that true progress is measured by the positive impact we create on society. For this reason, we have always placed emphasis on ethical practices, sustainable development, and community engagement. Whether through our services, initiatives, or partnerships, we strive to build a future that benefits not only our organization but also the generations to come.</p>
                        <p>Looking ahead, our mission is clear: to uphold the values that define us, to embrace opportunities with courage, and to overcome challenges with resilience. Together with our employees, partners, and stakeholders, I am confident that [Your Company/Organization Name] will continue to achieve new milestones and set higher standards of excellence.</p>
                        <p>On behalf of the entire organization, I extend my heartfelt gratitude for your trust and support. Let us continue this journey together, as we strive for growth, innovation, and a brighter future.</p>
                        ',
            'status' => 1,
        ]);
    }
}
