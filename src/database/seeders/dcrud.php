<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Madan\Dcrud\Role;
class dcrud extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
			'id'=>1,
			'name'=>'Admin',
			'dashboard'=>'admin'
		]);
		  Role::create([
			'id'=>2,
			'name'=>'Normal User',
			'dashboard'=>'mydashboard'
		]);
		 Role::create([
			'id'=>2,
			'name'=>'Guest',
			'dashboard'=>'guest'
		]);
    }
}
