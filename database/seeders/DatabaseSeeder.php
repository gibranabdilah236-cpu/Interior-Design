<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedAdmin();
        $this->seedServices();
        $this->seedProjects();
        $this->seedTeamMembers();
        $this->seedTestimonials();
        $this->seedSettings();
    }

    private function seedAdmin(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@luxeinteriors.com'],
            [
                'name' => 'Admin Luxe',
                'password' => Hash::make('password'),
            ]
        );
    }

    private function seedServices(): void
    {
        $services = [
            [
                'title' => 'Desain Hunian',
                'slug' => 'desain-hunian',
                'description' => 'Ubah rumah Anda menjadi tempat pribadi yang penuh kedamaian. Kami menciptakan ruang hidup yang mencerminkan gaya Anda, mengoptimalkan kenyamanan, dan mewujudkan visi Anda. Dari modern minimalis hingga elegan klasik, desain hunian kami melayani setiap selera.',
                'image' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=80',
                'sort_order' => 1,
            ],
            [
                'title' => 'Interior Komersial',
                'slug' => 'interior-komersial',
                'description' => 'Tingkatkan lingkungan bisnis Anda. Layanan desain komersial kami menciptakan ruang kerja yang menginspirasi, meningkatkan produktivitas dan mengesankan klien. Kami memahami kebutuhan unik bisnis dan menciptakan ruang yang fungsional serta mencerminkan merek Anda.',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
                'sort_order' => 2,
            ],
            [
                'title' => 'Furniture Kustom',
                'slug' => 'furniture-kustom',
                'description' => 'Karya unik yang dibuat sesuai spesifikasi Anda. Dari pernyataan furniture hingga aksesori pesanan, kami merancang item yang melengkapi ruang Anda. Setiap piece dibuat dengan presisi menggunakan material premium dan teknik ahli.',
                'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=80',
                'sort_order' => 3,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }

    private function seedProjects(): void
    {
        $projects = [
            [
                'title' => 'Apartemen Minimalis Modern',
                'slug' => 'apartemen-minimalis-modern',
                'description' => 'Desain apartemen yang rampung dan kontemporer dengan garis-garis bersih, warna netral, dan minimalisme yang bertujuan. Setiap elemen berfungsi sambil mempertahankan keindahan estetis.',
                'category' => 'residential',
                'featured_image' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80',
                'is_featured' => true,
                'sort_order' => 1,
                'status' => 'published',
            ],
            [
                'title' => 'Suite Penthouse Mewah',
                'slug' => 'suite-penthouse-mewah',
                'description' => 'Penthouse mewah dengan pemandangan panoramik, furnitur kustom, dan finishing premium di seluruhnya. Dirancang untuk kehidupan perkotaan yang sophisticated.',
                'category' => 'residential',
                'featured_image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80',
                'is_featured' => true,
                'sort_order' => 2,
                'status' => 'published',
            ],
            [
                'title' => 'Kantor Agensi Kreatif',
                'slug' => 'kantor-agensi-kreatif',
                'description' => 'Ruang kerja dinamis yang dirancang untuk mendorong kreativitas dan kolaborasi. Dilengkapi area kerja terbuka, ruang rapat, dan area istirahat.',
                'category' => 'commercial',
                'featured_image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
                'is_featured' => true,
                'sort_order' => 3,
                'status' => 'published',
            ],
            [
                'title' => 'Lobi Hotel Butik',
                'slug' => 'lobi-hotel-butik',
                'description' => 'Lobi hotel yang ramah dan stylish yang menciptakan kesan pertama yang tak terlupakan. Memadukan kenyamanan dengan keanggunan kontemporer.',
                'category' => 'hospitality',
                'featured_image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=800&q=80',
                'is_featured' => true,
                'sort_order' => 4,
                'status' => 'published',
            ],
            [
                'title' => 'Rumah Keluarga Skandinavia',
                'slug' => 'rumah-keluarga-skandinavia',
                'description' => 'Rumah keluarga yang hangat dan mengundang terinspirasi oleh prinsip desain Skandinavia. Material alami, warna terang, dan furnitur fungsional menciptakan suasana nyaman.',
                'category' => 'residential',
                'featured_image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80',
                'is_featured' => true,
                'sort_order' => 5,
                'status' => 'published',
            ],
            [
                'title' => 'Ruang Rapat Eksekutif',
                'slug' => 'ruang-rapat-eksekutif',
                'description' => 'Desain ruang rapat prestisius yang mencerminkan identitas korporat dan memfasilitasi pertemuan produktif. Furnitur kustom dan finishing premium di seluruhnya.',
                'category' => 'commercial',
                'featured_image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=800&q=80',
                'is_featured' => true,
                'sort_order' => 6,
                'status' => 'published',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }

    private function seedTeamMembers(): void
    {
        $members = [
            [
                'name' => 'Sarah Anderson',
                'role' => 'Direktur Kreatif',
                'bio' => 'Dengan pengalaman lebih dari 15 tahun dalam desain interior, Sarah memimpin visi kreatif kami dan memastikan setiap proyek melampaui harapan.',
                'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80',
                'email' => 'sarah@luxeinteriors.com',
                'sort_order' => 1,
            ],
            [
                'name' => 'Michael Chen',
                'role' => 'Lead Designer',
                'bio' => 'Michael membawa perpaduan unik pengaruh desain Timur dan Barat untuk menciptakan ruang yang benar-benar berbeda.',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80',
                'email' => 'michael@luxeinteriors.com',
                'sort_order' => 2,
            ],
            [
                'name' => 'Emily Roberts',
                'role' => 'Arsitek Senior',
                'bio' => 'Emily mengkhususkan diri dalam perencanaan ruang dan detail arsitektural yang mengubah ruangan biasa menjadi pengalaman luar biasa.',
                'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80',
                'email' => 'emily@luxeinteriors.com',
                'sort_order' => 3,
            ],
            [
                'name' => 'David Kim',
                'role' => 'Manajer Proyek',
                'bio' => 'David memastikan setiap proyek berjalan lancar dari konsep hingga penyelesaian, mengelola tenggat waktu dan anggaran dengan presisi.',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80',
                'email' => 'david@luxeinteriors.com',
                'sort_order' => 4,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }

    private function seedTestimonials(): void
    {
        $testimonials = [
            [
                'name' => 'Jennifer Martinez',
                'role' => 'Pemilik Rumah',
                'content' => 'Luxe Interiors mengubah rumah kami menjadi impian. Perhatian mereka terhadap detail dan kemampuan untuk memahami visi kami luar biasa.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Robert Thompson',
                'role' => 'CEO, TechStart Inc.',
                'content' => 'Ruang kantor baru kami benar-benar mengubah cara tim kami bekerja. Desainnya sempurna mencerminkan identitas merek kami sekaligus sangat fungsional.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Amanda Chen',
                'role' => 'Pemilik Restoran',
                'content' => 'Desain restoran melebihi semua ekspektasi. Pelanggan kami terus memuji suasana. Ini benar-benar meningkatkan pengalaman bersantap kami.',
                'rating' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }

    private function seedSettings(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'Luxe Interiors', 'group' => 'general'],
            ['key' => 'site_tagline', 'value' => 'Mengubah Ruang Menjadi Karya Hidup', 'group' => 'general'],
            ['key' => 'contact_email', 'value' => 'info@luxeinteriors.co.id', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '(0251) 123-4567', 'group' => 'contact'],
            ['key' => 'contact_address', 'value' => 'Jl. Pajajaran No.10, Bogor, Jawa Barat, Indonesia', 'group' => 'contact'],
            ['key' => 'business_hours', 'value' => 'Senin-Jumat: 09:00-18:00 | Sabtu: 10:00-16:00', 'group' => 'contact'],
            ['key' => 'social_twitter', 'value' => '#', 'group' => 'social'],
            ['key' => 'social_instagram', 'value' => '#', 'group' => 'social'],
            ['key' => 'social_linkedin', 'value' => '#', 'group' => 'social'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
