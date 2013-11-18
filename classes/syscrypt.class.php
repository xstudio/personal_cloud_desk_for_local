<?php
	class SysCrypt {
		public static function php_encrypt($txt, $crypt_key) {
		   $encrypt_key = md5(rand(0,32000));
		   $ctr = 0;
		   $tmp = '';
		   for($i = 0;$i<strlen($txt);$i++) {
			$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
			$tmp .= $encrypt_key[$ctr].($txt[$i]^$encrypt_key[$ctr++]);
		   }
		   return base64_encode(self::__key($tmp,$crypt_key));
		}
	
		public static function php_decrypt($txt, $crypt_key) {
		   $txt = self::__key(base64_decode($txt),$crypt_key);
		   $tmp = '';
		   for($i = 0;$i < strlen($txt); $i++) {
			$md5 = $txt[$i];
			$tmp .= $txt[++$i] ^ $md5;
		   }
		   return $tmp;
		}
	
		private function __key($txt,$encrypt_key) {
		   $encrypt_key = md5($encrypt_key);
		   $ctr = 0;
		   $tmp = '';
		   for($i = 0; $i < strlen($txt); $i++) {
			$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
			$tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
		   }
		   return $tmp;
		}
	}