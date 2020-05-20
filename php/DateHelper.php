<?php

class DateHelperComponent{

	public $months = array(
		'January'       =>    'Ocak',
		'February'      =>    'Şubat',
		'March'         =>    'Mart',
		'April'         =>    'Nisan',
		'May'           =>    'Mayıs',
		'June'          =>    'Haziran',
		'July'          =>    'Temmuz',
		'August'        =>    'Ağustos',
		'September'     =>    'Eylül',
		'October'       =>    'Ekim',
		'November'      =>    'Kasım',
		'December'      =>    'Aralık'
	);
	public $weeks = array(
		'Monday'        =>    'Pazartesi',
		'Tuesday'       =>    'Salı',
		'Wednesday'     =>    'Çarşamba',
		'Thursday'      =>    'Perşembe',
		'Friday'        =>    'Cuma',
		'Saturday'      =>    'Cumartesi',
		'Sunday'        =>    'Pazar'
	);

    public function initialize(Controller $controller)
    {
        $this->controller = $controller;
		$this->request = $this->controller->request;
	}
	
    // recursive fonksiyon. array içinden istenen key'in değerini alıyoruz.
	public function findArray($array, $findKey){
		foreach ($array as $key => $val) {
			if($key==$findKey){
				if(is_array($val)){
					return $this->findArray($val, $findKey);
				}
				return $val;
			}
			if(is_array($val)){
				return $this->findArray($val, $findKey);
			}
		}
    }
    
    // Belirtilen yıl ve ayın çarşamba günlerini key olarak, haftabaşı ve haftasonu tarihlerinide değer olarak geriye dizi döner.
	public function getWednesdays($y, $m){
		$wednesday = [];
		$results =  new DatePeriod(
			new DateTime("first wednesday of $y-$m"),
			DateInterval::createFromDateString('next wednesday'),
			new DateTime("last day of $y-$m")
		);
		foreach ($results as $value) {
			$monday = strtotime($value->format("d-m-Y")."-9days");
			$sunday = strtotime($value->format("d-m-Y")."-3days");
			$wednesday[$value->format("d-m-Y")]["monday"] = date("d-m-Y",$monday);
			$wednesday[$value->format("d-m-Y")]["sunday"] = date("d-m-Y",$sunday);
		}
		$wednesday['last']['monday'] = date('d-m-Y',strtotime("last week"));
		$wednesday['last']['sunday'] = date('d-m-Y',strtotime("last week +6 days"));
		$wednesday['last']['first'] = date("Y-m-d", strtotime("wednesday ".$y."-".$m." -9 days"));
		$wednesday['last']['last'] = date("Y-m-d", strtotime("last wednesday ".$y."-".($m+1)." +5 days"));
		return $wednesday;
    }
	
	// Belirtilen yılın tüm ayları için çarşamba günlerini key olarak, haftabaşı ve haftasonu tarihlerinide değer olarak geriye dizi döner.
	public function getYearWeek($y){
		$years = [];
		$i = 1;
		foreach ($this->months as $key => $value) {
			$years[$value] = $this->getWednesdays($y, $i);
			$i++;
		}
		$years['last']['first'] = date("Y-m-d", strtotime("wednesday ".$y."-01 -2 days"));
		$years['last']['last'] = date("Y-m-d", strtotime("last wednesday ".($y+1)."-01 +5 days"));
		return $years;
	}

	// verilen ay ve yıl değerlerine göre ayı haftalara bölerek geriye array olarak dönüyor.
	public function getMonthWeeksDay($m,$y){
		$zaman = mktime(0,0,0,$m,1,$y);
		$maxgun = date("t",$zaman);
		$buay = getdate ($zaman);
		$ilkgun  = $buay['wday'];
		$weeks = [];
		$say=0;
		for ($i=0; $i<($maxgun+$ilkgun); $i++) {
			if(!($i < $ilkgun)){
				if(!array_key_exists($say.".hafta",$weeks)) $weeks[$say.".hafta"]["days"] = [];
				array_push($weeks[$say.".hafta"]["days"],($i - $ilkgun + 1));
			}
			if(($i % 7) == 0 ) $say++;
		}
		return $weeks;
    }
	
	// Ay ve Günlerin ingilizce key'in türkçe value'si
    public function getDateLang($key){
        if(array_key_exists($key,$this->months)){
            $key = $this->months[$key];
        }
        if(array_key_exists($key,$this->weeks)){
            $key = $this->weeks[$key];
        }
        return $key; 
	}
	
	
}
