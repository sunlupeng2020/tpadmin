<?php

use think\migration\Seeder;

class Test extends Seeder
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
        $data=[];
        for($i =101; $i <=200; ++$i){
            $data[]=['id' =>$i, 'username' =>'用户'.$i, 'score' =>mt_rand(1,1000)];
        }
        $this->table('test')->insert($data)->save();
    }
}