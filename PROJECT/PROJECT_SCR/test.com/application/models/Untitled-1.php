			$data['listmemberNow']=$this->Qucta->getBuyweights();
			$data['listmembery']=$this->Qucta->getQucta();
			$data['listmember']=$this->Customer->getAllData();
		
			if($data['listmembery'])
				{
					for($i=0;$i<count($data['listmember']);$i++)
						{
							if($data['listmembery'])
								{
									if($i<count($data['listmembery'])){
								for($a=0;$a<count($data['listmember']);$a++){
									if($data['listmember'][$a]['cusid']==$data['listmember'][$i]['cusid']){
									$sum =0;
									$sum = $sum+$data['listmembery'][$a]['sizeAA'];
									$sum = $sum+$data['listmembery'][$a]['sizeA'];
									$sum = $sum+$data['listmembery'][$a]['sizeB'];
									$sum = $sum+$data['listmembery'][$a]['sizeC'];
									
									$data['listmember'][$i]['weighty'] = $data['listmembery'][$i]['buyweight'];
									
									$data['listmember'][$i]['sum'] =  $sum;
									}else{
										
									
										$data['listmember'][$i]['sum'] =  0;
										
									}
							}
							
									
						}
								}
							if($data['listmemberNow'])
								{
									$data['listmember'][$i]['weightNow'] = $data['listmemberNow'][$i]['buyweight'];			
									$data['listmember'][$i]['quctaid'] = $data['listmemberNow'][$i]['quctaid'];
								}														
							$data['listmember'][$i]['buyweight'] =FALSE;
						}
				}
			else
				{
					for($i=0;$i<count($data['listmember']);$i++)
						{
							
							$data['listmember'][$i]['buyweight'] =FALSE;
							$data['listmember'][$i]['weighty'] =FALSE;
							$data['listmember'][$i]['weightNow'] =FALSE;
						}		
				}	
		if(!$data['listmemberNow'])
			{	var_dump($data['listmember']);
				$this->load->view('general/employee/QuctaEdit',$data);
			}
		else
			{
				$sumweightId = $data['listmemberNow'][0]['sumweightid'];
				$this->Sumweight->setSumweightid($sumweightId);
				$data['sumWage'] = $this->Sumweight->getSumWagePk();
			
				for($i=0;$i<count($data['listmember']);$i++)
					{
						for($p=0;$p<count($data['sumWage']);$p++)
							{
							if($data['listmember'][$i]['cusid']==$data['sumWage'][$p]['cusid'])
								{		
										$data['listmember'][$i]['weightNow'] = $data['listmemberNow'][$i]['buyweight'];			
										$data['listmember'][$i]['quctaid'] = $data['sumWage'][$p]['quctaid'];
								}		
							}
					}
					var_dump($data['listmember']);
			$this->load->view('general/employee/QuctaShowEdit',$data);
		}