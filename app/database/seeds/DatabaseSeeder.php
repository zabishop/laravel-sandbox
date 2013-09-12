<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('ProjectTableSeeder');
    }

}

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('projects')->delete();

        Project::create(array('name' => 'Project X',
            'type' => 'Project Type',
            'tech' => 'Short String Describing Tech Used',
            'start' => strtotime('2012-9-15'),
            'end' => strtotime('2013-3-10'),
            'description' => 'Short Description of Project',
            'picURL' => 'img/test-image1.png'));

        Project::create(array('name' => 'Project Y',
            'type' => 'Project Type',
            'tech' => 'Short String Describing Tech Used',
            'start' => strtotime('2012-12-11'),
            'end' => strtotime('2013-4-11'),
            'description' => 'Short Description of Project',
            'picURL' => 'img/test-image1.png'));

        Project::create(array('name' => 'Project Z',
            'type' => 'Project Type',
            'tech' => 'Short String Describing Tech Used',
            'start' => strtotime('2013-4-12'),
            'end' => strtotime('2013-9-12'),
            'description' => 'Short Description of Project',
            'picURL' => 'img/test-image1.png'));
    }
}