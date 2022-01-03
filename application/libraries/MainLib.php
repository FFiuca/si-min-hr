<?php

class MainLib {

    protected $CI;

    function __construct(){
        $this->CI =& get_instance();
    }

    function normalize_null($val, $rep=null){
        return (!isset($val) or (is_string($val) and ($val=='' or strtolower($val)=='unset')) or (is_array($val) and count($val)==0))? $rep : $val;
    }

    function check_filtered_ajax($post, $include){
        $filter = false;

        foreach($post as $key => $r){
            foreach($include as $v){
                if($key==$v){
                    $temp = $this->normalize_null($r, null);
                    // var_dump($r);
                    if(isset($temp))
                        $filter = true;
                }
            }

            if($filter)
                break;
        }

        return $filter;
    }

    function date_id($date){
        if(is_string($date)){
            return date('d-m-Y', strtotime($date));
        }else{
            return date('d-m-Y', $date);
        }
    }

    function normalize_date($format, $val){
        return date($format, strtotime($val));
    }

    function currency_format_view($nom){
        return number_format($nom, 2, '.', ',');
    }

    function number_to_roman($number) {
        $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $returnValue = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }

    function terbilang_rupiah($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " Belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " Seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " Seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}

    function trim_symbol($str){
        return preg_replace('/[^A-Za-z0-9\-]/', '', $str);
    }

    function get_initial_word($str, $separator){
        $data = explode($separator, $str);
        
        $res = '';
        foreach($data as $key=>$r){
            $res.= substr($r, 0, 1);
        }

        return $res;
    }

}

?>