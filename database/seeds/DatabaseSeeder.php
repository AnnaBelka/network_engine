<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CompaniesTableSeeder::class);
         $this->call(EmployeesTableSeeder::class);
    }
}
class UsersTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        DB::table('users')->insert(['name' => 'admin','email' => 'admin@admin.com', 'password' => Hash::make('password')]);
    }
}
class CompaniesTableSeeder extends Seeder {

    public function run() {
        DB::table('companies')->delete();
        DB::table('companies')->insert([
            'name' => 'Киевстар',
            'email' => 'kyivstar@gmail.com',
            'logo' => 'kyivstar.png',
            'website' => 'https://kyivstar.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'Vodofone',
            'email' => 'vodofone@gmail.com',
            'logo' => 'vodofone.png',
            'website' => 'https://vodofone.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'Lifecell',
            'email' => 'lifecell@gmail.com',
            'logo' => 'lifecell.png',
            'website' => 'https://lifecell.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'varus',
            'email' => 'varus@gmail.com',
            'logo' => 'varus.png',
            'website' => 'https://varus.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'silpo',
            'email' => 'silpo@gmail.com',
            'logo' => 'silpo.png',
            'website' => 'https://silpo.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'volia',
            'email' => 'volia@gmail.com',
            'logo' => 'volia.png',
            'website' => 'https://volia.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'fregat',
            'email' => 'fregat@gmail.com',
            'logo' => 'fregat.png',
            'website' => 'https://fregat.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'privatbank',
            'email' => 'privatbank@gmail.com',
            'logo' => 'privatbank.png',
            'website' => 'https://privatbank.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'okko',
            'email' => 'okko@gmail.com',
            'logo' => 'okko.png',
            'website' => 'https://okko.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'owox',
            'email' => 'owox@gmail.com',
            'logo' => 'owox.png',
            'website' => 'https://owox.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'softserve',
            'email' => 'softserve@gmail.com',
            'logo' => 'softserve.png',
            'website' => 'https://softserve.ua/',
        ]);
        DB::table('companies')->insert([
            'name' => 'dtek',
            'email' => 'dtek@gmail.com',
            'logo' => 'dtek.png',
            'website' => 'https://dtek.ua/',
        ]);
    }

}
class EmployeesTableSeeder extends Seeder {

    public function run(){
        DB::table('employees')->delete();
        $id = DB::table('companies')->select('id')->where('name', 'Киевстар')->first();
        DB::table('employees')->insert([
            'first_name' => 'Андрей',
            'last_name' => 'Иванов',
            'email' => 'andreyivanov@gmail.com',
            'phone' => '+380991234564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'Vodofone')->first();
        DB::table('employees')->insert([
            'first_name' => 'Ivan',
            'last_name' => 'Nikitin',
            'email' => 'IvanNikitin@gmail.com',
            'phone' => '+380991334564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'Vodofone')->first();
        DB::table('employees')->insert([
            'first_name' => 'Nikita',
            'last_name' => 'Petrov',
            'email' => 'NikitaPetrov@gmail.com',
            'phone' => '+380991134564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'Vodofone')->first();
        DB::table('employees')->insert([
            'first_name' => 'Aleksey',
            'last_name' => 'Petrushin',
            'email' => 'AlekseyPetrushin@gmail.com',
            'phone' => '+380992224564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'Lifecell')->first();
        DB::table('employees')->insert([
            'first_name' => 'Valeriy',
            'last_name' => 'Ivanov',
            'email' => 'Valeriyivanov@gmail.com',
            'phone' => '+380991234561',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'varus')->first();
        DB::table('employees')->insert([
            'first_name' => 'Oleg',
            'last_name' => 'Tor',
            'email' => 'OlegTor@gmail.com',
            'phone' => '+380991234111',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'silpo')->first();
        DB::table('employees')->insert([
            'first_name' => 'Oksana',
            'last_name' => 'Tirenkova',
            'email' => 'OksanaTirenkova@gmail.com',
            'phone' => '+380991223564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'volia')->first();
        DB::table('employees')->insert([
            'first_name' => 'Inna',
            'last_name' => 'Kotina',
            'email' => 'InnaKotina@gmail.com',
            'phone' => '+380992344564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'fregat')->first();
        DB::table('employees')->insert([
            'first_name' => 'Ekaterina',
            'last_name' => 'Ivanchenko',
            'email' => 'EkaterinaIvanchenko@gmail.com',
            'phone' => '+380991236544',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'privatbank')->first();
        DB::table('employees')->insert([
            'first_name' => 'Artem',
            'last_name' => 'Linkov',
            'email' => 'ArtemLinkov@gmail.com',
            'phone' => '+380995674564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'privatbank')->first();
        DB::table('employees')->insert([
            'first_name' => 'Андрей',
            'last_name' => 'Сидоров',
            'email' => 'andreysidorov@gmail.com',
            'phone' => '+380991211564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'okko')->first();
        DB::table('employees')->insert([
            'first_name' => 'Vitaliy',
            'last_name' => 'Kogan',
            'email' => 'Kogan@gmail.com',
            'phone' => '+380991234564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'owox')->first();
        DB::table('employees')->insert([
            'first_name' => 'Mihail',
            'last_name' => 'Vector',
            'email' => 'Vector@gmail.com',
            'phone' => '+380991222564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'softserve')->first();
        DB::table('employees')->insert([
            'first_name' => 'Evgeniy',
            'last_name' => 'Titov',
            'email' => 'Titov@gmail.com',
            'phone' => '+380991200564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'softserve')->first();
        DB::table('employees')->insert([
            'first_name' => 'Петр',
            'last_name' => 'Иванов',
            'email' => 'petrivanov@gmail.com',
            'phone' => '+380991234564',
            'company_id' => $id->id,
        ]);
        $id = DB::table('companies')->select('id')->where('name', 'dtek')->first();
        DB::table('employees')->insert([
            'first_name' => 'Gleb',
            'last_name' => 'Hleb',
            'email' => 'Hleb@gmail.com',
            'phone' => '+380990000564',
            'company_id' => $id->id,
        ]);
    }

}