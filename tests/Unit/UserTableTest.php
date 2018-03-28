<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTableTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   public function testInsertUser(){

       $user= new User;
       $user->name="Ayikoue Hunlede";
       $user->email="ajh59@njit.edu";
       $user->password=" ";


       $this->assertTrue($user->save());
    }

    public function testUpdatetUser(){
        $user=User::find(1);
        $user->name="Steve Smith";
        $this->assertTrue($user->save());

    }

    public function testDeleteUser()
    {
        $user = User::inRandomOrder()->first();
        $this->assertTrue($user->delete());
    }

}




