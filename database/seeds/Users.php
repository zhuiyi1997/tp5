<?php

use think\migration\Seeder;

class Users extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'username'      => $faker->userName,
                'password'      => md5($faker->password),
                'login_status' => 0,
                'login_code' => md5(mt_rand(1,9999).time()),
                'last_login_ip'         => $faker->ipv4,
                'last_login_time'    => date('Y-m-d H:i:s',$faker->unixTime),
                'is_delete'     => 0,
            ];
        }

        $this->insert('users', $data);
    }
}