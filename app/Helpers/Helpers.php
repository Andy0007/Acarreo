<?php

namespace App\Helpers;
use App\Models\User;
use App\Models\Ldap;
use Carbon\Carbon;

class Helpers {

    public static function loginLDAP($user, $pass) {
        $ldap = Ldap::all();

        $ldap_server = $ldap[0]->ldap_server;
        $ldap_dominio = $ldap[0]->ldap_domain;
        $ldap_port = $ldap[0]->ldap_port;
        $ldap_user = request()->user.'@'.$ldap_dominio;
        $ldap_pass =  request()->password;
        $ldap_version = $ldap[0]->ldap_version;

        $ldap_conn = ldap_connect($ldap_server, $ldap_port);
        ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, $ldap_version);
        ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);
        
        if(@ldap_bind($ldap_conn, $ldap_user, $ldap_pass)){
            $update_pass = User::query()->where(['id' => $userdb[0]->id])->update(['password' => bcrypt(request('password'))]);

            return true;
        }else{
            return false;
        }
    }
}