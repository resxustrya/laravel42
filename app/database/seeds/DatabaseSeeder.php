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

		$this->call('ApplicantTableSeeder');
                $this->call('AdminTableSeeder');
                $this->call('EmployerTableSeeder');
                
                $this->command->info('All tables has been seeded');
	}
}

class ApplicantTableSeeder extends Seeder {
    public function run() {
        $app = new Applicants();
        $app->email = 'rexustraya@gamil.com';
        $app->password = 'traya';
        $app->name = 'Lourence Rex B. Traya';
       
        
        $app->save();
        
        $app = new Applicants();
        $app->email = 'lourence@gmail.com';
        $app->password = 'rexustraya';
        $app->name = 'Rexus Traya';
        
        
        $app->save();
    }
}
class EmployerTableSeeder extends Seeder {
    public function run() {
        $emp = new Employers();
        $emp->email = 'rex@outlook.com';
        $emp->password = 'lourence';
        $emp->name = 'Rex Traya';
     
        
        $emp->save();
        
        $emp = new Employers();
        $emp->email = 'rexustraya@outlook.com';
        $emp->password = 'traya';
        $emp->name = 'Rex Lourence B. Traya';
        
        
        $emp->save();
    }
}

class AdminTableSeeder extends Seeder {
    
    public function run() {
        $admin = new Admins();
        $admin->email = 'admin@gmail.com';
        $admin->password = 'admin';
        $admin->save();
    }
}
