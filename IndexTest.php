<?php

/**
 *  
 */

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
	/**
     * @dataProvider additionProvider
     */
    public function testAdd($number)
    {
        // $this->assertIsInt($id);
        // echo $number;
        // die;
        $this->assertTrue(is_int($number));
        $this->mainfunction($number);
    }

    public function additionProvider()
    {
        
       

		return [
            [" "],
            ["1"],
            [10]
        ];
		
    }

    public function mainfunction($no_of_prime){
		$primearr=array();
		$i=1;
		while ( count($primearr) < $no_of_prime) {
			$isPrime=$this->find_prime(++$i);
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



	public function find_prime($primeno){
		$flag=true;
		for ($i=2; $i < $primeno ; $i++) { 
			if(($primeno%$i)==0){
				$flag=false;
				break;
			}
		}
		return $flag;
	}
	
}

?>