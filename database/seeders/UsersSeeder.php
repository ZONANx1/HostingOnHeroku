<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'			=>'Pok Lang',
        	'email'	        	=>'poklang@gmail.com',
        	'age'	        =>'61',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Pok Lang.png',
        	'password'		        	=>'user1234',
        	
        ]);

        User::create([
        	'name'			=>'Zain',
        	'email'	        	=>'zain@gmail.com',
        	'age'	        =>'62',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Zain.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Razali',
        	'email'	        	=>'razali@gmail.com',
        	'age'	        =>'64',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Razali.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Idris',
        	'email'	        	=>'idris@gmail.com',
        	'age'	        =>'66',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Idris.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Ruhayah',
        	'email'	        	=>'ruhayah@gmail.com',
        	'age'	        =>'68',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Ruhayah.png',
        	'password'		        	=>'user1234',
        	
        ]);

        User::create([
        	'name'			=>'Zaiton',
        	'email'	        	=>'zaiton@gmail.com',
        	'age'	        =>'64',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Zaiton.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Shamah',
        	'email'	        	=>'shamah@gmail.com',
        	'age'	        =>'62',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Shamah.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Norresah',
        	'email'	        	=>'norresah@gmail.com',
        	'age'	        =>'63',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Norresah.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Bedah',
        	'email'	        	=>'bedah@gmail.com',
        	'age'	        =>'62',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Bedah.png',
        	'password'		        	=>'user1234',
        	
        ]);
        User::create([
        	'name'			=>'Ali',
        	'email'	        	=>'Ali@gmail.com',
        	'age'	        =>'68',
			'tinggi'	        =>'165',
			'berat'	        =>'64',
        	'role'	        	=>'2',
			'picture'	        	=>'Ali.png',
        	'password'		        	=>'user1234',
        	
        ]);
        
    }
}
