<?php 
class Invoice extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $invoiceid ; ######  invoiceid  ######
    var $invoicedate ; ######  invoicedate  ######
    var $cusid ; ######  cusid  ######
    var $memberid ; ######  memberid  ######
###### End Attribute  ###### 

 ###### SET : $invoiceid ######
    function setInvoiceid($invoiceid){
        $this->invoiceid = $invoiceid; 
     }
###### End SET : $invoiceid ###### 


###### GET : $invoiceid ######
    function getInvoiceid(){
        return $this->invoiceid; 
     }
###### End GET : $invoiceid ###### 


 ###### SET : $invoicedate ######
    function setInvoicedate($invoicedate){
        $this->invoicedate = $invoicedate; 
     }
###### End SET : $invoicedate ###### 


###### GET : $invoicedate ######
    function getInvoicedate(){
        return $this->invoicedate; 
     }
###### End GET : $invoicedate ###### 


 ###### SET : $cusid ######
    function setCusid($cusid){
        $this->cusid = $cusid; 
     }
###### End SET : $cusid ###### 


###### GET : $cusid ######
    function getCusid(){
        return $this->cusid; 
     }
###### End GET : $cusid ###### 


 ###### SET : $memberid ######
    function setMemberid($memberid){
        $this->memberid = $memberid; 
     }
###### End SET : $memberid ###### 


###### GET : $memberid ######
    function getMemberid(){
        return $this->memberid; 
     }
###### End GET : $memberid ###### 

function addInvoice(){
	$data = array(							

							'invoicedate' => $this->getInvoicedate(),
							'cusid' => $this->getCusid(),
							'memberid' => $this->getMemberid()

						);
		$this->db->insert('invoice', $data);
		return $this->db->insert_id();
}
function addBill(){
	$data = array(							

							'billdate' => $this->getInvoicedate(),
							'cusid' => $this->getCusid(),
							'memberid' => $this->getMemberid()

						);
		$this->db->insert('bill', $data);
		return $this->db->insert_id();
}

function getInvoices(){
			$this->db->where('bill.cusid','3');
			$this->db->join('bill','bill.billid = billdetial.billid');
			$this->db->join('customer','customer.cusid = bill.cusid');
			$this->db->join('price','price.priceid = billdetial.priceid');
			return $this->db->get('billdetial')->result_array();
}

}
?>