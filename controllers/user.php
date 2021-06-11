<?php
require_once '../libs/model.php';

class user extends model{

    protected $table = 'user';

    public function login($data){				    	
    	$result = parent::select($data);
    	if(count($result['data']) == 0){
    		return [
    			'execute' => false,
    			'errorMessage' => 'Credenciales erróneas'
    		];
    	}else{
    		$_SESSION['id'] = $result['data'][0]['id'];
			$_SESSION['name'] = $result['data'][0]['name'];
			$_SESSION['last_name'] = $result['data'][0]['last_name'];
			$_SESSION['email'] = $result['data'][0]['email'];
			$_SESSION['gender'] = $result['data'][0]['gender'];
			$_SESSION['birth_date'] = $result['data'][0]['birth_date'];
			$_SESSION['country'] = $result['data'][0]['country'];
			$_SESSION['state'] = $result['data'][0]['state'];
			$_SESSION['city'] = $result['data'][0]['city'];
			$_SESSION['register_date'] = $result['data'][0]['register_date'];
    		return [
    			'execute' => true,
    			'data' => 'éxito'
    		];
    	}
    }

    public function getSesion($data){
    	return [
    		'execute'=>true,
    		'data'=>$_SESSION
    	];
    }

    public function destroySesion($data){
    	session_destroy();
    	return [
    		'execute'=>true,
    		'data'=>'éxito'
    	];
    }
}