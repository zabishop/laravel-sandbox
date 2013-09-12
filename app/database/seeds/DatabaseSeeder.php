<?php

class DatabaseSeeder extends Seeder {

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

class ProjectTableSeeder extends Seeder {

    public function run()
    {
        DB::table('projects')->delete();

        Project::create(array('name' => 'Project X',
                                'type' => 'Project Type',
                                'tech' => 'Short String Describing Tech Used',
                                'start' => 'Date Project Started',
                                'end' => 'Date Project Ended',
                                'description' => 'Short Description of Project',
                                'picURL' => 'img/test-image1.png'));
    }
}