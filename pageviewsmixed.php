<?php
//ini_set('max_execution_time', 200);

$x = 1;
do {

		
	// Configruación General de Paginas
		$dluno = $_POST["urluno"];
		$dldos = $_POST["urldos"];
		$dltres = $_POST["urltres"];
		$dlcuatro = $_POST["urlcuatro"];			
		$dlcinco = $_POST["urlcinco"];			


	// Configuración General
		$titulopagina = $_POST["titulodelapagina"];
		$CodigoAnalytics = $_POST["CodigoAnalytics"];
		$UbicacionGeografica = $_POST["UbicacionGeografica"];
		$tiempoporusuario = $_POST["tiempoporusuario"];
		$tagidioma = $_POST["tagidioma"];		

// Configuracion de Organico
	$palabraclave = $_POST["palabraclave"];
	$searchengine = $_POST["searchengine"];


	// NO TOCAR	
		$a = rand(00000000,999999999); 
		$randomusers = rand(00000000,999999999);
		$z = rand(000000000,999999999);


// Configuracion para el Device Category (Mixed Traffic)
	$devicecategory = array(

		// User Agent para Mobile   
			'Mozilla%2F5.0%20(iPhone%3B%20CPU%20iPhone%20OS%208_0_2%20like%20Mac%20OS%20X)%20AppleWebKit%2F600.1.4%20(KHTML%2C%20like%20Gecko)%20Version%2F8.0%20Mobile%2F12A366%20Safari%2F600.1.4',
			'Mozilla%2F5.0%20(iPhone%3B%20CPU%20iPhone%20OS%208_0%20like%20Mac%20OS%20X)%20AppleWebKit%2F600.1.4%20(KHTML%2C%20like%20Gecko)%20Version%2F8.0%20Mobile%2F12A366%20Safari%2F600.1.4',
			'Mozilla%2F5.0%20(Linux%3B%20U%3B%20Android%204.2.2%3B%20nl-nl%3B%20GT-I9505%20Build%2FJDQ39)%20AppleWebKit%2F534.30%20(KHTML%2C%20like%20Gecko)%20Version%2F4.0%20Mobile%20Safari%2F534.30',
			'Mozilla%2F5.0%20(Linux%3B%20Android%204.3%3B%20GT-I9505%20Build%2FJSS15J)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F32.0.1700.99%20Mobile%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Linux%3B%20Android%204.3%3B%20GT-I9500%20Build%2FJSS15J)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F32.0.1700.99%20Mobile%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Linux%3B%20Android%205.1.1%3B%20SM-G925F%20Build%2FLMY47X)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F47.0.2526.83%20Mobile%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Linux%3B%20Android%205.1.1%3B%20SM-G925F%20Build%2FLMY47X)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F45.0.2454.94%20Mobile%20Safari%2F537.36',

		// User Agent para PC 
			'Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Windows%20NT%206.1%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_12_2)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.95%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_12_2)%20AppleWebKit%2F602.3.12%20(KHTML%2C%20like%20Gecko)%20Version%2F10.0.2%20Safari%2F602.3.12',
			'Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20WOW64%3B%20rv%3A50.0)%20Gecko%2F20100101%20Firefox%2F50.0',
			'Mozilla%2F5.0%20(X11%3B%20Linux%20x86_64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',

		// User Agent para Tablets 
			'Mozilla%2F5.0%20(iPad%3B%20U%3B%20CPU%20OS%20OS%203_2%20like%20Mac%20OS%20X%3B%20en-us)%20AppleWebKit%2F531.21.10%20(KHTML%2C%20like%20Gecko)%20Version%2F4.0.4%20Mobile%2F7B367%20Safari%2F531.21.10'
		);


		// Screen Resolution Surtido
		$screenresolution = array(
				'1920x1080',
				'1366x768',
				'1280x1024',
				'1280x800',
				'1024x768',
				'360x640',
				'480x800',
				'720x1280',
				'375x667',
				'320x568'
			);	

		// Viewport Surtido
		$viewport = array(
				'414x736',
				'1024×768',
				'414x736',
				'375x667',
				'320x568',
				'411x731',
				'480x853'
			);


			// Cantidad de Paginas Vistas por Visita

			$repetir = $_POST["pageviewshits"];
			for($i=0; $i<$repetir; $i++) {


			// El primer Enlace

				$url = 'https://www.google-analytics.com/collect?v=1&_v=j47&aip=0&a='.$a.'&t=pageview&_s=1&dl='.$dluno.'&ul=es&de=windows-1252&dt='.$titulopagina.'&sd=24-bit&sr='.$screenresolution[array_rand($screenresolution)].'&vp='.$viewport[array_rand($viewport)].'&je=0&fl=24.0%20r0&_u=QACAAEABI~&jid=&cid='.$randomusers.'.'.$randomusers.'&tid='.$CodigoAnalytics.'&ul='.$tagidioma.'&z='.$z.'&cm=organic&cs='.$searchengine.'&ck='.$palabraclave.'&cc=content&geoid='.$UbicacionGeografica.'&ua='.$devicecategory[array_rand($devicecategory)];

				echo $url;

		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL, $url);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		 
		        $contenido = curl_exec($ch);
		        curl_close($ch);

		   	// El segundo enlace

				$urldos = 'https://www.google-analytics.com/collect?v=1&_v=j47&aip=0&a='.$a.'&t=pageview&_s=1&dl='.$dldos.'&ul=es&de=windows-1252&dt='.$titulopagina.'&sd=24-bit&sr='.$screenresolution[array_rand($screenresolution)].'&vp='.$viewport[array_rand($viewport)].'&je=0&fl=24.0%20r0&_u=QACAAEABI~&jid=&cid='.$randomusers.'.'.$randomusers.'&tid='.$CodigoAnalytics.'&z='.$z.'&ul='.$tagidioma.'&cm=organic&cs='.$searchengine.'&ck='.$palabraclave.'&cc=content&geoid='.$UbicacionGeografica.'&ua='.$devicecategory[array_rand($devicecategory)];

				echo $urldos;

		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL, $urldos);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		 
		        $contenido = curl_exec($ch);
		        curl_close($ch);


		   	// El Tercer enlace

				$urltres = 'https://www.google-analytics.com/collect?v=1&_v=j47&aip=0&a='.$a.'&t=pageview&_s=1&dl='.$dltres.'&ul=es&de=windows-1252&dt='.$titulopagina.'&sd=24-bit&sr='.$screenresolution[array_rand($screenresolution)].'&vp='.$viewport[array_rand($viewport)].'&je=0&fl=24.0%20r0&_u=QACAAEABI~&jid=&cid='.$randomusers.'.'.$randomusers.'&tid='.$CodigoAnalytics.'&z='.$z.'&ul='.$tagidioma.'&cm=organic&cs='.$searchengine.'&ck='.$palabraclave.'&cc=content&geoid='.$UbicacionGeografica.'&ua='.$devicecategory[array_rand($devicecategory)];

				echo $urltres;

		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL, $urltres);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		 
		        $contenido = curl_exec($ch);
		        curl_close($ch);

		   	// El Cuarto enlace

				$urlcuatro = 'https://www.google-analytics.com/collect?v=1&_v=j47&aip=0&a='.$a.'&t=pageview&_s=1&dl='.$dlcuatro.'&ul=es&de=windows-1252&dt='.$titulopagina.'&sd=24-bit&sr='.$screenresolution[array_rand($screenresolution)].'&vp='.$viewport[array_rand($viewport)].'&je=0&fl=24.0%20r0&_u=QACAAEABI~&jid=&cid='.$randomusers.'.'.$randomusers.'&tid='.$CodigoAnalytics.'&z='.$z.'&ul='.$tagidioma.'&cm=organic&cs='.$searchengine.'&ck='.$palabraclave.'&cc=content&geoid='.$UbicacionGeografica.'&ua='.$devicecategory[array_rand($devicecategory)];

				echo $urlcuatro;

		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL, $urlcuatro);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		 
		        $contenido = curl_exec($ch);
		        curl_close($ch);


		   	// El Quinto enlace

				$urlcinco = 'https://www.google-analytics.com/collect?v=1&_v=j47&aip=0&a='.$a.'&t=pageview&_s=1&dl='.$dlcinco.'&ul=es&de=windows-1252&dt='.$titulopagina.'&sd=24-bit&sr='.$screenresolution[array_rand($screenresolution)].'&vp='.$viewport[array_rand($viewport)].'&je=0&fl=24.0%20r0&_u=QACAAEABI~&jid=&cid='.$randomusers.'.'.$randomusers.'&tid='.$CodigoAnalytics.'&z='.$z.'&ul='.$tagidioma.'&cm=organic&cs='.$searchengine.'&ck='.$palabraclave.'&cc=content&geoid='.$UbicacionGeografica.'&ua='.$devicecategory[array_rand($devicecategory)];

				echo $urlcinco;


		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL, $urlcinco);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		 
		        $contenido = curl_exec($ch);
		        curl_close($ch);

			}


// Cantidad de visitas

    $x++;
} while ($x <= $_POST["cantidaddehits"]);

?>
