<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
	function index()
	{
		$data['a']=$this->Price->getPrice();
		$data['a'][0]['pricedate']=date('Y-m-d');
		$data['b']=$this->Price->getMember();

if($data['a'][0]['pricedate']==date('Y-m-d')){
		for($i=0;$i<count($data['b']);$i++){
						if($data['b'][$i]['size']=='AA'){	
							$sum = $data['a'][0]['ratesaa']*$data['b'][$i]['value'];
						}else if($data['b'][$i]['size']=='A'){
							$sum = $data['a'][0]['ratesa']*$data['b'][$i]['value'];
						}else if($data['b'][$i]['size']=='B'){
							$sum = $data['a'][0]['ratesb']*$data['b'][$i]['value'];
						}else if($data['b'][$i]['size']=='C'){
							$sum = $data['a'][0]['ratesc']*$data['b'][$i]['value'];
						}
					$data['b'][$i]['sum'] = $sum;
		}
		print_r($data);
}else{
	echo "ไม่มี";
}
		

	}

}

