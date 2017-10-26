<?php

use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
			"slug" => "admin",
			"name" => "Admin",
			"permissions" => ["admin" => true]
		];

		Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();
			$adminrole = Sentinel::findRoleByName('Admin');
			$user_admin = ["first_name"=>"M", "last_name"=>"Admin","email"=>"madmin@mail.com", "password"=>"12345678"];
			$adminuser = Sentinel::registerAndActivate($user_admin);
			$adminuser->roles()->attach($adminrole);
		///// this for seed data applicant
		$role_applicant = [
			"slug" => "applicant",
			"name" => "Applicant",
			"permissions" => [
				"articles.index" => true,
				"articles.create" => true,
				"articles.store" => true,
				"articles.show" => true,
				"articles.edit" => true,
				"articles.update" => true
			]
		];
		Sentinel::getRoleRepository()->createModel()->fill($role_applicant)->save();
			$applicantrole = Sentinel::findRoleByName('applicant');
			$user_applicant = ["first_name"=>"john", "last_name"=>"doe","email"=>"johndoe@gmail.com", "password"=>"12345678"];
			$applicantuser = Sentinel::registerAndActivate($user_applicant);
			$applicantuser->roles()->attach($applicantrole);
    }
}
