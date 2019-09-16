<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Atompaymentgetway{
	function __constructor()
	{
		
	}
	var $url = null;
	function sendInfo($data){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_PORT , 443); 
		//curl_setopt($ch, CURLOPT_SSLVERSION,3);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$returnData = curl_exec($ch);

		curl_close($ch);
	   return $returnData;
	}
	function requestMerchant($orderid,$amount,$redirecturl,$user_id,$mobile,$email_id){
		$payment = new Atompaymentgetway();
		$datenow = date("d/m/Y h:m:s");
		$modifiedDate = str_replace(" ", "%20", $datenow);
		$payment->url = ATOMURL;
		$postFields  = "";
		$postFields .= "&login=".ATOMLOGIN;
		$postFields .= "&pass=".ATOMPASSWORD;
		$postFields .= "&ttype=".ATOMTTYPE;
		$postFields .= "&prodid=".ATOMPRODUCT;
		$postFields .= "&amt=".$amount;
		$postFields .= "&txncurr=".ATOMTXNCURR;
		$postFields .= "&txnscamt=".ATOMTXNSCAMT;
		$postFields .= "&clientcode=".urlencode(base64_encode(ATOMCLIENTCODE));
		$postFields .= "&txnid=".rand(0,999999);
		$postFields .= "&date=".$modifiedDate;
		$postFields .= "&custacc=".ATOMACCOUNTNUMBER;
		$postFields .= "&udf9=".$orderid;
		$postFields .= "&ru=".$redirecturl;
		// Not required for merchant
		//$postFields .= "&bankid=".$_POST['bankid'];

		$sendUrl = $payment->url."?".substr($postFields,1)."\n";

		/* $this->writeLog($sendUrl); */
		
		$returnData = $payment->sendInfo($postFields);
		/* $this->writeLog($returnData."\n"); */
		$xmlObjArray     = $this->xmltoarray($returnData);

		$url = $xmlObjArray['url'];
		$postFields  = "";
		$postFields .= "&ttype=".ATOMTTYPE;
		$postFields .= "&tempTxnId=".$xmlObjArray['tempTxnId'];
		$postFields .= "&token=".$xmlObjArray['token'];
		$postFields .= "&txnStage=1";
		$url = $payment->url."?".$postFields;
		/* $this->writeLog($url."\n"); */
		header("Location: ".$url);
		
	}
	function writeLog($data){
		$fileName = date("Y-m-d").".txt";
		$fp = fopen("log/".$fileName, 'a+');
		$data = date("Y-m-d H:i:s")." - ".$data;
		fwrite($fp,$data);
		fclose($fp);
	}

	function xmltoarray($data){
		$parser = xml_parser_create('');
		xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); 
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
		xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
		xml_parse_into_struct($parser, trim($data), $xml_values);
		xml_parser_free($parser);		
		$returnArray = array();
		$returnArray['url'] = $xml_values[3]['value'];
		$returnArray['tempTxnId'] = $xml_values[5]['value'];
		$returnArray['token'] = $xml_values[6]['value'];
		return $returnArray;
	}
	
	
}
//$processPayment = new Atompaymentgetway();
//$processPayment->requestMerchant();
?>