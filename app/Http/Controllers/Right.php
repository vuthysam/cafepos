<?php

namespace App\Http\Controllers;
use DB;
use Auth;

class Right
{
    public static function check($permission_name, $action) {
    	$role_id = Auth::user()->role_id;
    	$q = DB::table('role_permissions')
                ->join('permissions', 'permissions.id', '=', 'role_permissions.permission_id')
                ->select('role_permissions.list','role_permissions.insert','role_permissions.delete','role_permissions.update')
                ->where(['role_permissions'.'.role_id' => $role_id, 'permissions.name' => $permission_name]);

        switch ($action) {
        	case 'i':
        		$q = $q->where('role_permissions.insert', 1);
        		break;
        	case 'u':
        		$q = $q->where('role_permissions.update', 1);
        		break;
        	case 'd':
        		$q = $q->where('role_permissions.delete', 1);
        		break;
    		case 'l':
        		$q = $q->where('role_permissions.list', 1);
        		break;	
        	default:
        		break;
        }
	   
       	return $q->count() > 0;
    }
    public static function branch($id)
    {
        $arr = array();
        $data = DB::table('user_branches')->where('user_id', $id)->get();
        foreach($data as $b)
        {
            array_push($arr, $b->branch_id);
        }
        return $arr;
    }
}