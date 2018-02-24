<?php
/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Tools;

/**
 * Description of SizeConvert
 *
 * @author cncuser
 */
class SizeConvert {
    /* Remove size and store in numbers */
    /* This function might need to be moved to a central place for reuse*/
    public function SizeConversionToKB($aSize){
        $size_unit = explode(' ', $aSize);
        foreach ($size_unit as $key => $size){
            $size_unit[$key] = trim($size);
        }
        if (isset($size_unit[1])){
            if ($size_unit[1] == 'KB' || $size_unit[1] == 'kb' || $size_unit[1] == 'Kb'){
                $size_unit[0] = round($size_unit[0]);
                $size_unit[1] = '';
            }
            if ($size_unit[1] == 'MB' || $size_unit[1] == 'mb' || $size_unit[1] == 'Mb'){
                $size_unit[0] = round($size_unit[0] * 1024);
                $size_unit[1] = '';
            }
            if ($size_unit[1] == 'GB' || $size_unit[1] == 'gb' || $size_unit[1] == 'Gb'){
                $size_unit[0] = round($size_unit[0] * 1024 * 1024);
                $size_unit[1] = '';                
            }
            if ($size_unit[1] == 'TB' || $size_unit[1] == 'tb' || $size_unit[1] == 'Tb'){
                $size_unit[0] = round($size_unit[0] * 1024 * 1024 * 1024);
                $size_unit[1] = '';                
            }
        }
        return $size_unit[0];
    }
    
    public function SizeCovertionFromKB($aSize){
        $size_unit = explode(' ', $aSize);
        foreach ($size_unit as $key => $size){
            $size_unit[$key] = trim($size);
        }
        $int_value = ctype_digit($size_unit[0]) ? intval($size_unit[0]) : null;
        
        if ($int_value !== null 
                && !isset($size_unit[1]) && is_numeric($size_unit[0])){
            if ($int_value < 1024){
                $size_unit[0] = $int_value . ' KB';
            }
            if ($int_value >= 1024 && $int_value < (1024 * 1024)){
                $aux = round($int_value / 1024, 2);
                $size_unit[0] = $aux . ' MB';
            }
            if ($int_value >= (1024 * 1024)){
                $aux = round($int_value / 1024 / 1024, 2);
                $size_unit[0] = $aux . ' GB';
            }
            if ($int_value >= (1024 * 1024 * 1024)){
                $aux = round($int_value / 1024 / 1024 / 1024, 2);
                $size_unit[0] = $aux . ' TB';
            }
            return $size_unit[0];
        }
        return $aSize;
    }
    
}
