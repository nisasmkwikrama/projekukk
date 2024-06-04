<?php
	//cara ke 3
	$nilai3 = 70;

	 if($nilai3 >85){
		$nilaimutu="A";
	 }elseif($nilai3 >68){
		$nilaimutu="B";
	 }elseif($nilai3 >56){
		$nilaimutu="c";
	 }elseif($nilai3 >45){
		$nilaimutu="D";
	 }else{
		$ket="tidak lulus";
	 }
     

	if($nilaimutu=="A"){
		$ket="lulus";
	}elseif($nilaimutu=="B"){
		$ket="lulus";
	}elseif($nilaimutu=="C"){
		$ket="lulus";
	}elseif($nilaimutu=="D"){
		$ket="tidak lulus";
	}else{
		$ket="tidak lulus";
	}
	 echo "nilai anda ".$nilai3." maka mutu anda ".$nilaimutu." maka anda di nyatakan".$ket;

     //tamabhan versi 3.1
       if($nilaimutu3=="A" || $nilaimutu3=="B" || $nilaimutu=="C") {
    $ket4="lulus";
       }else{
    $ket4="tidak lulus";
 }
 echo "versi 3: nilai anda " .$nilai3. "maka mutu anda " .$nilaimutu3. "dinyatakan" .$ket3;
 echo "versi 3.1: nilai anda " .$nilai3. "maka mutu anda " .$nilaimutu3. "dinyatakan".$ket4

?>