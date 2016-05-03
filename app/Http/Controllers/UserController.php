<?php
/**
 * Created by PhpStorm.
 * User: klklmoon
 * Date: 2016/4/9
 * Time: 14:31
 */

namespace App\Http\Controllers;


class UserController extends BaseController
{


    /**
     * 获取用户信息
     * @param $username
     * @return bool
     */
    public function getUser($username)
    {
        if ($username)
            return false;
        return true;
    }


    /**
     * @param array $user
     * @return bool
     */
    public function addUser(array $user)
    {

        if (empty($user))
            return false;
        if ($user['name'] == $user['password']) {
            return false;
        } else {
            return true;
        }
        return array('username' => '1111',
            'password' => 3123213,
            'salt' => 123123123
        );

        return $this->saveUser($user);
    }
}