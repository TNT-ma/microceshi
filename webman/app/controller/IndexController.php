<?php

namespace app\controller;

use support\Request;
use TNTma\TronWeb\Account;

class IndexController
{
    public function index(Request $request){
        echo "\n指定第一步代码\n";
        $PrivateKey = Account::SetPrivateKey('9d939c3f7540ce396d21a12f36f50c579c6738bd66edce2718c378216e8044d3');
        echo "执行成功结果：".$PrivateKey->address()->base58(); 
        return $PrivateKey->address()->base58();
    } 

}
