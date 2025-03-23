<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
public function run()
{
$model = model('UserModel');
$model->insert([
'username' => 'admin',
'useremail' => 'tfk@gmail.com',
'userpassword' => password_hash('404tfkhdyt', PASSWORD_DEFAULT),
]);
}
}
