<?php

   $kadi = $_POST['kadi'];
   $sifre = $_POST['sifre'];

	if ($kadi=="" or $sifre=="")
	{
		echo "Lütfen Tüm Alanları Doldurun!";
	}
	else
	{
    if ($kadi=="G201210588@sakarya.edu.tr" && $sifre=="G201210588")
		{
			echo "Hoşgeldiniz \"". $sifre ."\"";
		}
		else
		{
			echo "Kullanıcı adı veya şifre yanlış.";
		}
	}
?>
