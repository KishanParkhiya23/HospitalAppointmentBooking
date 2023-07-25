<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sign_ups')->insert([
            [
                'Fname' => "Kishan",
                'Lname' => "Parkhiya",
                'Gender' => "Male",
                'City' => "Surat",
                'Contact' => "9632587412",
                'DOB' => "2022-08-08",
                'Email' => "kishan@gmail.com",
                'Pswd' => Hash::make('kishan123')
            ],
            [
                'Fname' => "Jay",
                'Lname' => "Mangukiya",
                'Gender' => "Male",
                'City' => "Mumbai",
                'Contact' => "7589645874",
                'DOB' => "2022-10-07",
                'Email' => "jay@gmail.com",
                'Pswd' => Hash::make('jay123')
            ],
            [
                'Fname' => "Krupali",
                'Lname' => "Mathukiya",
                'Gender' => "Female",
                'City' => "Pune",
                'Contact' => "8569745874",
                'DOB' => "2022-09-11",
                'Email' => "krupali@gmail.com",
                'Pswd' => Hash::make('krupali123')
            ]

        ]);

        DB::table('appointments')->insert([
            [
                'Name' => "Kishan Parkhiya",
                'Mobile' => "9658741254",
                'Email' => "kishan@gmail.com",
                'Date' => date("d-y-m"),
                'Doctor' => 'Walter White',
                'Service' => "Anesthesiology Services"
            ],
            [
                'Name' => "Kishan Parkhiya",
                'Mobile' => "8574962541",
                'Email' => "kishan@gmail.com",
                'Date' => date("d-y-m"),
                'Doctor' => 'Sarah Jhonson',
                'Service' => "Radiology Services"
            ],
            [
                'Name' => "Kishan Parkhiya",
                'Mobile' => "9658741254",
                'Email' => "kishan@gmail.com",
                'Date' => date("d-y-m"),
                'Doctor' => 'Amanda Jepson',
                'Service' => "Outpatient Department"
            ],
            [
                'Name' => "Krupali Mathukiya",
                'Mobile' => "9587412547",
                'Email' => "krupali@gmail.com",
                'Date' => date("d-y-m"),
                'Doctor' => 'William Anderson',
                'Service' => "Obstetrical Services"
            ],
            [
                'Name' => "Krupali Mathukiya",
                'Mobile' => "9587412547",
                'Email' => "krupali@gmail.com",
                'Date' => date("d-y-m"),
                'Doctor' => 'Walter White',
                'Service' => "Medical Services"
            ],
        ]);
        DB::table('admin_tables')->insert([
            [
                'Email' => "walter@gmail.com",
                'Password' => Hash::make('walter123'),
                'Name' => "Walter White",
                'Mobile' => "9658741254",
                'Gender' => "Male",
                'designation' => "Dentist",
                'img' => "walter.jpg",
                'Details'=>'Here’s a situation that comes up for many people: you move in later life.'
            ],
            [
                'Email' => "sarah@gmail.com",
                'Password' => Hash::make('sarah123'),
                'Name' => "Sarah Jhonson",
                'Mobile' => "9658741254",
                'Gender' => "Female",
                'designation' => "Heart Speciallist",
                'img' => "sarah.jpg",
                'Details'=>'Here’s a situation that comes up for many people: you move in later life.'
            ],
            [
                'Email' => "william@gmail.com",
                'Password' => Hash::make('william123'),
                'Name' => "William Anderson",
                'Mobile' => "9658741254",
                'Gender' => "Male",
                'designation' => "Gastroenterologists",
                'img' => "william.jpg",
                'Details'=>'Here’s a situation that comes up for many people: you move in later life.'
            ],
            [
                'Email' => "amanda@gmail.com",
                'Password' => Hash::make('amanda123'),
                'Name' => "Amanda Jepson",
                'Mobile' => "9658741254",
                'Gender' => "Female",
                'designation' => "Neurologists",
                'img' => "amanda.jpg",
                'Details'=>'Here’s a situation that comes up for many people: you move in later life.'
            ],
        ]);
    }
}
