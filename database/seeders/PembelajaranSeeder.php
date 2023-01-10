<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembelajaran;

class PembelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Petang',
        	'kategori'	        	=>'Daurah',
        	'komen'	        =>'',
        	'progress'	        	=>'20',
        	'waktu_mula'		        	=>'2:00 PM',
            'waktu_tamat'		        	=>'3:00 PM',
            'user_id'		        	=>'1',
            'user_name'		        	=>'Pok Lang',
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Pagi',
        	'kategori'	        	=>'Tadarus',
        	'komen'	        =>'',
        	'progress'	        	=>'40',
        	'waktu_mula'		        	=>'10:00 AM',
            'waktu_tamat'		        	=>'11:00 AM',
            'user_id'		        	=>'2',
            'user_name'		        	=>'Zain',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Malam',
        	'kategori'	        	=>'Bacaan Selawat',
        	'komen'	        =>'',
        	'progress'	        	=>'60',
        	'waktu_mula'		        	=>'8:00 PM',
            'waktu_tamat'		        	=>'10:00 PM',
            'user_id'		        	=>'3',
            'user_name'		        	=>'Razali',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Pagi',
        	'kategori'	        	=>'Bacaan Surah',
        	'komen'	        =>'',
        	'progress'	        	=>'50',
        	'waktu_mula'		        	=>'9:00 AM',
            'waktu_tamat'		        	=>'10:00 AM',
            'user_id'		        	=>'4',
            'user_name'		        	=>'Idris',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Petang',
        	'kategori'	        	=>'Daurah',
        	'komen'	        =>'',
        	'progress'	        	=>'20',
        	'waktu_mula'		        	=>'2:00 PM',
            'waktu_tamat'		        	=>'3:00 PM',
            'user_id'		        	=>'5',
            'user_name'		        	=>'Ruhayah',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Pagi',
        	'kategori'	        	=>'Tadarus',
        	'komen'	        =>'',
        	'progress'	        	=>'40',
        	'waktu_mula'		        	=>'10:00 AM',
            'waktu_tamat'		        	=>'11:00 AM',
            'user_id'		        	=>'6',
            'user_name'		        	=>'Zaiton',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Malam',
        	'kategori'	        	=>'Bacaan Selawat',
        	'komen'	        =>'',
        	'progress'	        	=>'60',
        	'waktu_mula'		        	=>'8:00 PM',
            'waktu_tamat'		        	=>'10:00 PM',
            'user_id'		        	=>'7',
            'user_name'		        	=>'Shamah',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Malam',
        	'kategori'	        	=>'Bacaan Selawat',
        	'komen'	        =>'',
        	'progress'	        	=>'60',
        	'waktu_mula'		        	=>'8:00 PM',
            'waktu_tamat'		        	=>'10:00 PM',
            'user_id'		        	=>'8',
            'user_name'		        	=>'Norresah',
            'kehadiran'		        	=>'Ya',				
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Pagi',
        	'kategori'	        	=>'Bacaan Surah',
        	'komen'	        =>'',
        	'progress'	        	=>'50',
        	'waktu_mula'		        	=>'9:00 AM',
            'waktu_tamat'		        	=>'10:00 AM',
            'user_id'		        	=>'9',
            'user_name'		        	=>'Bedah',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);

        Pembelajaran::create([
        	'sesi_pembelajaran'			=>'Sesi Pagi',
        	'kategori'	        	=>'Bacaan Surah',
        	'komen'	        =>'',
        	'progress'	        	=>'50',
        	'waktu_mula'		        	=>'9:00 AM',
            'waktu_tamat'		        	=>'10:00 AM',
            'user_id'		        	=>'10',
            'user_name'		        	=>'Ali',	
            'kehadiran'		        	=>'Ya',			
        	
        ]);
    }
}
