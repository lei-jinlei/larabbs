<?php
/**
 * Created by PhpStorm.
 * User: leijinlei
 * Date: 2018/4/11
 * Time: 22:07
 */
namespace Tests\Traits;

use App\Models\User;

trait ActingJWTUser
{
    public function JWTActingAs(User $user)
    {
        $token = \Auth::guard('api')->fromUser($user);
        $this->withHeaders(['Authorization' => 'Bearer '.$token]);

        return $this;
    }
}