<?php
    namespace Sanitize;
    

    /**
     * @author Gleisson Neves <https://github.com/gdk46>
     * @package Saniteze
     * 
    */
    class Sanitize
    {
        /** 
         * @param $post
         * @return array 
        */
        public static function sanitizePost(array $post)
        {
            $post 	            = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $stripTags    	    = array_map('strip_tags', $post);
            $sanitizeFilterPost = array_map('trim', $stripTags);
            
            return $sanitizeFilterPost;
        }
                


        /**
         * @param $getId
         * @param $debbuger
         * @return int/string 
        */
        public static function sanitizeGetId($getId, $debbuger = false)
        {
            
            $id           = preg_replace("/[^0-9]/", "", $getId);
            $idConversion = (int) $id;
            $idInt        = filter_var($idConversion, FILTER_VALIDATE_INT);
            
            return ($debbuger) ?  "value: {$id}, type: ".gettype($idInt).""  : $idInt;
        }

    }
