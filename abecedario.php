	<?php
		$abecedario = array("a","b","c", "d","e", "f", "g", "h", "i","j", "k", "l", "m", "n", "ñ","o", "p", "q", "r", "s", "t","u", "v","w", "x", "y", "z", "A","B","C", "D","E", "F", "G", "H", "I","J", "K", "L", "M", "N", "Ñ","O", "P", "Q", "R", "S", "T","U", "V","W", "X", "Y", "Z");
		$abecedariorep = array("b","c", "d","e", "f", "g", "h", "i","j", "k", "l", "m", "n", "ñ","o", "p", "q", "r", "s", "t","u", "v","w", "x", "y", "z","a","B","C", "D","E", "F", "G", "H", "I","J", "K", "L", "M", "N", "Ñ","O", "P", "Q", "R", "S", "T","U", "V","W", "X", "Y", "Z","A");
		$ingresocadena = "abcd 123";
		$arrayingreso = str_split($ingresocadena);
		
		for ($i = 0; $i <= strlen($ingresocadena); $i++)
			{
			    $pos = array_search($arrayingreso[$i], $abecedario);
				$resultado = str_replace($abecedario[$pos], $abecedariorep[$pos], $arrayingreso[$i]);
				$arryresult[] = $resultado;
				$result=implode($arryresult);

			}

		echo $result;
	?>