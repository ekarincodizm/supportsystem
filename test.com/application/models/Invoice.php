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
	var $textSearch;
	var $quctaid;
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
 ###### SET : $textSearch ######
    function setTextSearch($textSearch){
        $this->textSearch = $textSearch; 
     }
###### End SET : $memberid ###### 
###### GET : $textSearch ######
    function getTextSearch(){
        return $this->textSearch; 
     }
###### End GET : $memberid ###### 
###### SET : $invoiceid ######
    function setQuctaid($quctaid){
        $this->quctaid = $quctaid; 
     }
###### End SET : $invoiceid ###### 


###### GET : $invoiceid ######
    function getQuctaid(){
        return $this->quctaid; 
     }
function addInvoice(){
	$data = array(							

							'invoicedate' => $this->getInvoicedate(),
							'cusid' => $this->getCusid(),
							'memberid' => $this->getMemberid(),
							'quctaid' => $this->getQuctaid()

						);
		$this->db->insert('invoice', $data);
		return $this->db->insert_id();
	}
	function addBill()
		{
			$data = array(							

							'billdate' => $this->getInvoicedate(),
							'cusid' => $this->getCusid(),
							'memberid' => $this->getMemberid()

						);
			$this->db->insert('bill', $data);
			return $this->db->insert_id();
		}
	function getInvoices()
		{

			$this->db->join('invoice','invoice.invoiceid = invoicedetial.invoiceid');
			$this->db->join('customer','customer.cusid = invoice.cusid');
			$this->db->join('price','price.priceid = invoicedetial.priceid');
			$this->db->order_by('invoicedetial.invoiceid','DESC');
			return $this->db->get('invoicedetial')->result_array();
		}

	function getInvoicesSearch()
		{

			$this->db->join('invoice','invoice.invoiceid = invoicedetial.invoiceid');
			$this->db->join('customer','customer.cusid = invoice.cusid');
			$this->db->join('price','price.priceid = invoicedetial.priceid');
			$this->db->order_by('invoicedetial.invoiceid','DESC');
			$this->db->where('customer.cusid', $this->getTextSearch());
			$this->db->or_where('customer.cusname', $this->getTextSearch());
			$this->db->where('invoice.invoicedate', date('Y-m-d'));
			return $this->db->get('invoicedetial')->result_array();
		}

	function getInvoicesPK()
		{
			$this->db->join('invoice','invoice.invoiceid = invoicedetial.invoiceid');
			$this->db->join('customer','customer.cusid = invoice.cusid');
			$this->db->join('price','price.priceid = invoicedetial.priceid');
			$this->db->order_by('invoicedetial.invoiceid','DESC');
			$this->db->where('invoice.cusid', $this->getCusid());
			$this->db->where('invoice.invoicedate', date('Y-m-d'));
			return $this->db->get('invoicedetial')->result_array();
			
		}
	function reportInvoice()
		{
			$this->db->select(
			'customer.cusid,
			customer.cusname,
			customer.cuslname,
			SUM(invoicedetial.sizeAA) AS AA,
			SUM(invoicedetial.sizeA)AS A,
			SUM(invoicedetial.sizeB)AS B,
			SUM(invoicedetial.sizeC)AS C,
			price.ratesaa,
			price.ratesa,
			price.ratesb,
			price.ratesc,
			invoice.invoicedate');
			
			$this->db->join('invoice','invoice.invoiceid = invoicedetial.invoiceid');
			$this->db->join('customer','customer.cusid = invoice.cusid');
			$this->db->join('price','price.priceid = invoicedetial.priceid');
		
			$this->db->where('invoice.invoicedate', $this->getInvoicedate());
			$this->db->group_by('customer.cusid','ASC');
			return $this->db->get('invoicedetial')->result_array();
		}
		
		function forumInvoice()
		{
			$this->db->select('customer.cusid,customer.cusname,customer.cuslname');
			$this->db->select_SUM('invoicedetial.sizeAA');
			$this->db->select_SUM('invoicedetial.sizeA');
			$this->db->select_SUM('invoicedetial.sizeB');
			$this->db->select_SUM('invoicedetial.sizeC');
			$this->db->select('price.ratesaa,price.ratesa,price.ratesb,price.ratesc,invoice.invoicedate');
			
			$this->db->join('invoice','invoice.invoiceid = invoicedetial.invoiceid');
			$this->db->join('customer','customer.cusid = invoice.cusid');
			$this->db->join('price','price.priceid = invoicedetial.priceid');
		
			$this->db->where('invoice.invoicedate', $this->getInvoicedate());
			$this->db->group_by('customer.cusid','ASC');
			$query = $this->db->get('invoicedetial');
			return $query;
		}
		function forumInvoiceSum()
		{
			
			$this->db->select_SUM('iv.sizeAA');
			$this->db->select_SUM('iv.sizeA');
			$this->db->select_SUM('iv.sizeB');
			$this->db->select_SUM('iv.sizeC');
			$this->db->select('p.ratesaa');
			$this->db->select('p.ratesa');
			$this->db->select('p.ratesb');
			$this->db->select('p.ratesc');
			$this->db->from('invoicedetial iv,price p');
			$this->db->where('iv.priceid = p.priceid');
		
			$query = $this->db->get();
			return $query;
		}
}
?>