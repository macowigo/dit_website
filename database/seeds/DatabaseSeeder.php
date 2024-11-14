<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

        $countries = asset('sql/countries.sql');
        $regions = asset('sql/regions.sql');
        $districts = asset('sql/districts.sql');
        $wards = asset('sql/wards.sql');


        $sql_countries = file_get_contents($countries);
        $sql_regions= file_get_contents($regions);
        $sql_districts = file_get_contents($districts);
        $sql_wards = file_get_contents($wards);


        $this->command->info('Seeding Geographical Location Tables!');
        DB::unprepared($sql_countries);
        DB::unprepared($sql_regions);
        DB::unprepared($sql_districts);
        DB::unprepared($sql_wards);
        $this->command->info('Geographical Location Tables Seeded!');





        /*
        Website DB Content
        */
        $departments = asset('sql/dit_site_department.sql');
        $staff = asset('sql/dit_site_staff.sql');
        $programmes = asset('sql/dit_site_programmes.sql');
        $education = asset('sql/dit_site_education.sql');
        $experience = asset('sql/dit_site_experience.sql');
        $skill = asset('sql/dit_site_skill.sql');
        $sliders = asset('sql/dit_site_sliders.sql');
        $quick_links = asset('sql/dit_site_quick_links.sql');
        $news = asset('sql/dit_site_news.sql');
        $events = asset('sql/dit_site_events.sql');





        $sql_departments = file_get_contents($departments);
        $sql_staff = file_get_contents($staff);
        $sql_programmes = file_get_contents($programmes);
        $sql_education = file_get_contents($education);
        $sql_experience = file_get_contents($experience);
        $sql_skill = file_get_contents($skill);
        $sql_sliders = file_get_contents($sliders);
        $sql_quick_links = file_get_contents($quick_links);
        $sql_news = file_get_contents($news);
        $sql_events = file_get_contents($events);



        $this->command->info('Seeding department table');
        DB::unprepared($sql_departments);
        $this->command->info('Seeding department table completed');

        $this->command->info('Seeding staff table');
        DB::unprepared($sql_staff);
        $this->command->info('Seeding staff table completed');

        $this->command->info('Seeding programmes table');
        DB::unprepared($sql_programmes);
        $this->command->info('Seeding programmes table completed');

        $this->command->info('Seeding education table');
        DB::unprepared($sql_education);
        $this->command->info('Seeding education table completed');

        $this->command->info('Seeding experience table');
        DB::unprepared($sql_experience);
        $this->command->info('Seeding experience table completed');

        $this->command->info('Seeding skill table');
        DB::unprepared($sql_skill);
        $this->command->info('Seeding skill table completed');

        $this->command->info('Seeding sliders table');
        DB::unprepared($sql_sliders);
        $this->command->info('Seeding sliders table completed');

        $this->command->info('Seeding quick_links table');
        DB::unprepared($sql_quick_links);
        $this->command->info('Seeding quick_links table completed');

        $this->command->info('Seeding news table');
        DB::unprepared($sql_news);
        $this->command->info('Seeding news table completed');

        $this->command->info('Seeding events table');
        DB::unprepared($sql_events);
        $this->command->info('Seeding events table completed');

    }
}
