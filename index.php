<?php
echo "Multiplication table of first n(user input) prime numbers \n\n";

echo "Enter a number: ";
$number =  stream_get_line(STDIN, 1024, PHP_EOL); 
mainfunction($number); 

function mainfunction($no_of_prime){
	$primearr=array();
	$i=1;
	while ( count($primearr) < $no_of_prime) {
		$isPrime=find_prime(++$i);
		if($isPrime){
			$primearr[]=$i;
		}
	}

	echo "\t";
	for ($i=0; $i < count($primearr) ; $i++) 
	{  
	 echo " |".$primearr[$i]. "\t" ;
	} 
	echo "\n";
	for ($j=0; $j < count($primearr) ; $j++) {
		$lsideno=$primearr[$j];
		echo "".$lsideno. " " ;
		echo "\t";
		for ($i=0; $i < count($primearr) ; $i++) {

			echo " |".($lsideno*$primearr[$i]). "\t";
		}
		echo "\n";
	}
}



function find_prime($primeno){
	$flag=true;
	for ($i=2; $i < $primeno ; $i++) { 
		if(($primeno%$i)==0){
			$flag=false;
			break;
		}
	}
	return $flag;
}
?> 




