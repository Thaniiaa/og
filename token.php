<?php
function nabila($a,$email,$pass) {
            $body = '{"login":"'.$email.'","password":"'.$pass.'","undelete":false,"captcha_key":null,"login_source":null,"gift_code_sku_id":null}';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/v9/auth/login");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			    $headers[] = "Host: discord.com";
                $headers[] = "authorization: undefined";
                $headers[] = "content-type: application/json";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	

}
print "Discord Toket - Nabila Tools\n";
print "Thanks To : Muhammad Ikhsan\n";
print "\n";
echo "Email Discord : ";
$email = trim(fgets(STDIN));
echo "Password : ";
$pass = trim(fgets(STDIN));
echo "\n";
for($a=0;$a<1;$a++){
$cinta = json_decode(nabila($a,$email,$pass));
$s = $cinta->token;
echo "".$s."\n";
}
?>