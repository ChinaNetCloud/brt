<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Tools;

/**
 * Description of TimeConverter
 *
 * @author cncuser
 */
class TimeConverter {
    public static function ConvertToSeconds($aTimeString){
        $time_unit = explode(' ', $aTimeString);
        
        foreach ($time_unit as $key => $time){
            $time_unit[$key] = trim($time);
        }
        $seconds = 0;
        if (isset($time_unit[1])){
            if ($time_unit[1] == 'day' || $time_unit[1] == 'days' 
                    || $time_unit[1] == 'd' || $time_unit[1] == 'D'
                    || $time_unit[1] == 'Day' || $time_unit[1] == 'Days') {
                $seconds = $time_unit[0] * 86400;
            }
            elseif ($time_unit[1] == 'hour' || $time_unit[1] == 'hours' 
                    || $time_unit[1] == 'h' || $time_unit[1] == 'H'
                    || $time_unit[1] == 'Hour' || $time_unit[1] == 'Hours') {
                $seconds = $time_unit[0] * 3600;
            }
            elseif ($time_unit[1] == 'minute' || $time_unit[1] == 'minutes' 
                    || $time_unit[1] == 'm' || $time_unit[1] == 'M'
                    || $time_unit[1] == 'Minute' || $time_unit[1] == 'Minutes') {
                $seconds = $time_unit[0] * 60;
            }          
        } elseif (isset($time_unit[0]) && is_numeric($time_unit[0])) {
            $seconds = $time_unit[0];
        }
        return $seconds;
    }
    public static function ConvertFromSeconds($seconds){
        $time = '';
        if ($seconds >= 60 && $seconds < 3600){
            $time = round($seconds/60) . ' minutes';
        } elseif ($seconds >= 3600 && $seconds < 86400) {
            $time = round($seconds/3600) . ' hours';
        } elseif ($seconds >= 86400) {
            $time = round($seconds/86400) . ' days';
        }
        return $time;
    }
}
