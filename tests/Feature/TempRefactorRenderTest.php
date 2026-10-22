<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class TempRefactorRenderTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'secret1234',
        ]));
    }

    public function test_all_filament_resource_pages_render(): void
    {
        // Seed one record per resource so edit/view pages have data.
        $contact = Contact::create(['name' => 'Jane', 'email' => 'jane@example.com', 'message' => 'Hi there', 'is_read' => false]);
        $project = Project::create(['title' => 'Apt', 'slug' => 'apt', 'description' => 'Desc', 'category' => 'residential', 'status' => 'published', 'sort_order' => 1]);
        $service = Service::create(['title' => 'Design', 'slug' => 'design', 'description' => 'Desc', 'sort_order' => 1]);
        $setting = Setting::create(['key' => 'site_name', 'value' => 'Luxe', 'group' => 'general']);
        $member = TeamMember::create(['name' => 'Ana', 'role' => 'Director', 'sort_order' => 1]);
        $testimonial = Testimonial::create(['name' => 'Bob', 'content' => 'Great', 'rating' => 5, 'is_active' => true]);

        $pages = [
            \App\Filament\Resources\Contacts\Pages\ListContacts::class => null,
            \App\Filament\Resources\Contacts\Pages\ViewContact::class => ['record' => $contact->getRouteKey()],
            \App\Filament\Resources\Contacts\Pages\EditContact::class => ['record' => $contact->getRouteKey()],

            \App\Filament\Resources\Projects\Pages\ListProjects::class => null,
            \App\Filament\Resources\Projects\Pages\CreateProject::class => null,
            \App\Filament\Resources\Projects\Pages\EditProject::class => ['record' => $project->getRouteKey()],

            \App\Filament\Resources\Services\Pages\ListServices::class => null,
            \App\Filament\Resources\Services\Pages\CreateService::class => null,
            \App\Filament\Resources\Services\Pages\EditService::class => ['record' => $service->getRouteKey()],

            \App\Filament\Resources\Settings\Pages\ListSettings::class => null,
            \App\Filament\Resources\Settings\Pages\CreateSetting::class => null,
            \App\Filament\Resources\Settings\Pages\EditSetting::class => ['record' => $setting->getRouteKey()],

            \App\Filament\Resources\TeamMembers\Pages\ListTeamMembers::class => null,
            \App\Filament\Resources\TeamMembers\Pages\CreateTeamMember::class => null,
            \App\Filament\Resources\TeamMembers\Pages\EditTeamMember::class => ['record' => $member->getRouteKey()],

            \App\Filament\Resources\Testimonials\Pages\ListTestimonials::class => null,
            \App\Filament\Resources\Testimonials\Pages\CreateTestimonial::class => null,
            \App\Filament\Resources\Testimonials\Pages\EditTestimonial::class => ['record' => $testimonial->getRouteKey()],

            \App\Filament\Resources\Users\Pages\ListUsers::class => null,
            \App\Filament\Resources\Users\Pages\CreateUser::class => null,
            \App\Filament\Resources\Users\Pages\EditUser::class => ['record' => User::first()->getRouteKey()],
        ];

        foreach ($pages as $pageClass => $params) {
            $params = $params ?? [];

            $html = Livewire::test($pageClass, $params)->html();

            $this->assertNotEmpty($html, "{$pageClass} rendered empty HTML");

            fwrite(STDERR, sprintf("  OK  %-62s html=%d bytes\n", class_basename($pageClass), strlen($html)));
        }

        $this->assertTrue(true);
    }
}
