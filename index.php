<?php
include "AopSdk.php";
include 'aop/AopClient.php';
include 'aop/request/AlipayFundTransToaccountTransferRequest.php';
$aop = new AopClient ();
$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
$aop->appId = '2017110109661001';
$aop->rsaPrivateKey = 'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCZWcGfaKqgfjf/IbJVGELPD7S4KdmbYQ6v0T3jTaMZ7sSKYluVpWiEGquVwCbsi6S+NzCeOcJUOK6peTgLTQot5mCHPSOrqQCanEmHg8rh2FI2I9ODzSw9VOt5NS2Q17z2KvgKdCc4lsC/RvYHaMbU+gtWfbJvVKl4CcThac+DrM3o0kBbmIFHXj9v82YnpLUKwAKAGgw4Htad1+pD1x2ddTyWM12u0fNqQf70WFFWhF0HWnqvmSZVl59090jN1ciXVvOgPSoM4NWRqXF9C/Po7XgrnFOatUeob/rPXWyvppfoBu4k3C2Mm2HxxvUWmOqPH6zEGT8NCr89ImeixL27AgMBAAECggEAXg/fIy9pUa56HIWHxIhwGmAw4rHQ52zePFvlUTKC89owNg3kzWK7PCS70MwfVALH12E08ijNmSl3gT54cP4dW1AvL2UCJz4vv6ZTt8rQPD2bF9hb2kGUfD5FfYBv5aNfJcPvh0H9+MkHi4w0RxEuvN5u6+uH8qAEnzumxvlHLyVtspeti8aQInC81CGPeh812BSdappsLpjS06AutRTE8dafHKAZ7cqynwNRhTfPr5ZQEAu7GnYc49AxnBPHy/r+tdV1g8Syu+FJt4bYEC5qKPfiIFCRXyKLZhfZIQJjI+UgOrKAlu3LoPIBysNQWkpiD5rgavUceb/MMJu9EP4nkQKBgQDt/RfxUn4GtSTlPHmNDhuzctK5v0RwZP2wvDLdziDAeS2Nt48rJ0rNYiJS1Y8+slHrfr6fQZnMcZOAKJmqMDNwJDpI2sccO5G0ttwK2CxqZVw0DkfSXbwVqBMcMjjAUNTw9OzZ/rf1S+QPDlJafTVTG9mfUnyGVn58F7vQwy+NkwKBgQCk9NhFUiw9mDLFrHPR2silIUg+/uAmTb0ZWIDA5eZkvdrRJ7dreB51CFWSBPw66X9BBhxOHzHMeE1Fvfr5o7/DQpp6Mt+1IPUfALC1OpoezdC9DdThHxgDu0V1TulbnKj1MsFCCU2kYDDOty0Hls4f/LIq1AmcUvIXkkynPDvoOQKBgGw4zWx14M1YDmEX8QZNxhcCPgUtjwe1RQ/bZR4sIASmlip9sGMlSQTAfW9BohQWrt3yEukEwdWQSEzdKZOUu69hKgf7RNP32rhc9w8PYpM3aIhbfhmReng2qAoIZHo/x7WTCynOhQTM7/ZQwu5XRap3Xazvq6TDLF1txYCXYcZ1AoGAINBoGVogXNxi9Tm6DHv2QAsf4RA4rMX4IQufCUBylYXC+qpo7WMGxAc1ZofBWULLwraheNTxxhgEXyRMwc5WPlSIgFiQceqteE5d2J9gu1H7/S+8MlBKKaveRFi/SS8f2S8QjL9nB5TvAKAlwAW62VgeZTCq/MLvT8sVnor369kCgYBRU7+azojdVYLTBHHVMSb6HYjbOBIqQFio+PkMhEhdzqxqjWq8IcPZBwUB6Ge5EgSP2zW/boyBUhYfDZB7u0MimgvhQk26bh0YifbeDrIUcYcobhtQQGYTrFaiB5nbILi6fy1iq0rvg3QFUDsUZZomU9jUbk1y5qKceuozrG/HVA==';
$aop->alipayrsaPublicKey='MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmVnBn2iqoH43/yGyVRhCzw+0uCnZm2EOr9E9402jGe7EimJblaVohBqrlcAm7IukvjcwnjnCVDiuqXk4C00KLeZghz0jq6kAmpxJh4PK4dhSNiPTg80sPVTreTUtkNe89ir4CnQnOJbAv0b2B2jG1PoLVn2yb1SpeAnE4WnPg6zN6NJAW5iBR14/b/NmJ6S1CsACgBoMOB7WndfqQ9cdnXU8ljNdrtHzakH+9FhRVoRdB1p6r5kmVZefdPdIzdXIl1bzoD0qDODVkalxfQvz6O14K5xTmrVHqG/6z11sr6aX6AbuJNwtjJth8cb1Fpjqjx+sxBk/DQq/PSJnosS9uwIDAQAB';
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset='UTF-8';
$aop->format='json';
$request = new AlipayFundTransToaccountTransferRequest();
$request->setBizContent("{" .
    "\"out_biz_no\":\"3142321423435\"," .
    "\"payee_type\":\"ALIPAY_LOGONID\"," .
    "\"payee_account\":\"18745016473\"," .
    "\"amount\":\"0.1\"," .
    "\"payer_show_name\":\"上海交通卡退款\"," .
    "\"payee_real_name\":\"王牧甜\"," .
    "\"remark\":\"转账备注\"" .
    "}");
$result = $aop->execute($request);

$responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";

//var_dump($result);
////var_dump($responseNode);
//exit();

$resultCode = $result->$responseNode->code;
if(!empty($resultCode)&&$resultCode == 10000){
    echo "0";
} else {
    echo "1";
}
?>