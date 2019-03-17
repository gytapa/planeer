<?php

namespace App\Classes;


class ToJson
{

    /**
     * Creates JSON array from Entity List
     * takes in array of entities and a class
     */
    public static function ToJsonArray($list, $class)
    {
        $formatted = array();
        //getting values
        foreach ($list as $element)
        {
            foreach ($class::$to_display as $key => $value)
            {
                $row[$key] = $element->{$key};
            }
            $formatted[] = $row;
        }

        //getting keys
        $headers = array();
        foreach ($class::$to_display as $key => $value)
        {
            array_push($headers,$value);
        }

        return ['values' => $formatted, 'headers' =>$headers];
    }

}