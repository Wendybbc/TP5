<?php

	session_start();

	$chaine ='23456789ABCDEFGHIJKLMNPQRSTUVWXYZ';

	$image = imagecreatefrompng('image.png');

	$color = imagecolorallocate($image,0,0,0);

	$font = 'Fonts/Cartoon.ttf';

		function getCode($length,$chars)
			{
				$code=null;
				for ($i=0;$i<$length;$i++)
				{
					$code.=$chars{mt_rand(0,strlen($chars)-1)};
				}
				return $code;
			};

			$code=getCode(5,$chaine);

			$char1=substr($code,0,1);

			$char2=substr($code,1,1);

			$char3=substr($code,2,1);

			$char4=substr($code,3,1);

			$char5=substr($code,4,1);


			imagettftext($image,28,-10,3,38,$color,$font,$char1);

			imagettftext($image,28,20,37,38,$color,$font,$char2);

			imagettftext($image,28,-35,55,38,$color,$font,$char3);

			imagettftext($image,28,45,100,38,$color,$font,$char4);

			imagettftext($image,28,-15,120,38,$color,$font,$char5);


	header('Content-Type:image/png');

	imagepng($image);

	imagedestroy($image);

		$_SESSION['code']=$code;

?>
