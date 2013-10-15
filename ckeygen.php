<?php
	 class ckeygen{
	 	const NN = 5;
		const NS=2;
		const Min=1;
		const MAx=50;
		const minS=1;
		const MAxS=11;
		
		public $numbers=array();
		public $stars=array();
		
		public function __construct(){
			$this->genKey();
			//var_dump($this->numbers);
			//echo"<br/>";
			//var_dump($this->stars);
		}
		
		public function genKey(){
			$extNumbers=new ckeyExtrator(ckeygen::NN,ckeygen::Min,ckeygen::MAx);
			$this->numbers=$extNumbers->extract();
			$extStars=new ckeyExtrator(ckeygen::NS,ckeygen::minS,ckeygen::MAxS);
			$this->stars=$extStars->extract();
			
		}
		
		public function keyAsHtml(){
			$html="<div>";
			$html.=$this->key2UL("numbers", $this->numbers);
			$html.=$this->key2UL("stars", $this->stars);
			$html.="</div>";
			return $html;
			
		}
		
		public function key2UL($class, $key){
			$htmlUL="";
			$htmlUL.="<ul class='$class'>";
			foreach ($key as $value) {
				$htmlUL.="<li>$value</li>";
			}
			$htmlUL.="</ul>";
			return $htmlUL;	
		}
			
	}
	 
	class ckeyExtrator{
		private $mynum;
		private $mymax;
		private $mymin;
		
		public function __construct($num,$min,$max){
			$this->mynum=$num;
			$this->mymax=$max;
			$this->mymin=$min;	
		}
		
		public function extract(){
			$bag =  array();
			$nels=$this->mymax - $this->mymin+1;
			for ($i=0; $i < $nels ; $i++) { 
				$bag[$i]=$this->mymin+$i;
			}
			
			$this->key=array();
			for ($i=0; $i <$this->mynum ; $i++) { 
				$ridx=rand(0, count($bag)-1);
				$this->key[]=$bag[$ridx];
				array_splice($bag,$ridx,1);
			}
			sort($this->key);
			//var_dump($key);
			return ($this->key);	
		}
		
	}
		
	//echo $xpto->key2UL("numbers",$xpto->numbers);
		//echo $xpto->key2UL("stars",$xpto->stars);
?> 