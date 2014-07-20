<?php 

use Illuminate\Database\SeedServiceProvider;

class AppSeeder extends Seeder {

	public function run() {

		// Clear database
		DB::table('boys')->delete();
		DB::table('girl_friend')->delete();
		DB::table('love_letters')->delete();
		DB::table('girls')->delete();
		DB::table('boy_girl')->delete();

		// Seed boys table 
		// We will create 4 boys		
		$nw = Boy::create(array(
			'name'	=>	'Naing Win',
			'age'	=> 	24
			));

		$hzh = Boy::create(array(
			'name'	=> 	'Hein Zaw Htet',
			'age'	=>	22
			));

		$nla = Boy::create(array(
			'name'	=>	'Naing Lin Aung',
			'age'	=>	23
			));

		$sk	= Boy::create(array(
			'name'	=>	'Set Kyar',
			'age'	=>	22
			));

		// show message in command line
		$this->command->info('All Boys are alive!');

		// Seed girl friend table
		// We need 4 girls for boys
		Girlfriend::create(array(
			'name'	=> 'Khin Wint War',
			'age'	=>	19,
			'boy_id' => $nw->id
			));

		Girlfriend::create(array(
			'name'	=> 'Nan Thuzar',
			'age'	=>	22,
			'boy_id' => $hzh->id
			));

		Girlfriend::create(array(
			'name'	=> 'Moe Set Y',
			'age'	=>	22,
			'boy_id' => $nla->id
			));

		Girlfriend::create(array(
			'name'	=> 'May Myat Noe',
			'age'	=>	20,
			'boy_id' => $sk->id
			));

		// show message in command line
		$this->command->info('They are fall in love with their girls');

		// Seed Love Letters table
		// We have 2 love letters by Naing Win
		Loveletter::create(array(
			'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'boy_id'	=> $nw->id
			));

		Loveletter::create(array(
			'content'	=>	'I love you blah blah blah',
			'boy_id'	=> $nw->id
			));

		// show message in command line
		$this->command->info('Love letters created');

		// Seed Girls table
		$tinMoeLwin = Girl::create(array(
			'name'	=>	'Tin Moe Lwin',
			'age'	=> 39
			));

		$phwephwe = Girl::create(array(
			'name'	=>	'Phwe Phwe',
			'age'	=>	23
			));

		$eiChawPo = Girl::create(array(
			'name'	=>	'Ei Chaw Po',
			'age'	=>	24
			));

		// show message in command line
		$this->command->info('Girls created');

		//link boys to girls
		$nw->girl()->attach($tinMoeLwin->id);
		$nw->girl()->attach($phwephwe->id);
		$nw->girl()->attach($eiChawPo->id);

		$hzh->girl()->attach($tinMoeLwin->id);
		$hzh->girl()->attach($phwephwe->id);
		$hzh->girl()->attach($eiChawPo->id);

		$nla->girl()->attach($tinMoeLwin->id);
		$nla->girl()->attach($phwephwe->id);
		$nla->girl()->attach($eiChawPo->id);

		$sk->girl()->attach($tinMoeLwin->id);
		$sk->girl()->attach($phwephwe->id);
		$sk->girl()->attach($eiChawPo->id);
	}	
}