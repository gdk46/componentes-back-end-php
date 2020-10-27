<?php
    namespace Sanitize;
    class Sanitize{
        public static function Clean_post_arr(array $Dados){
            // -- SANITIZE POST --
            $Dados 	            = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $stripTags    	    = array_map('strip_tags', $Dados);   //função limpar inputs
            $sanitize_filt_post = array_map('trim', $stripTags);     //função trim tirar o whitespaces
            

            return $sanitize_filt_post;
        }
        
        
        public static function Clean_get_id($get_id, $debbuger = false){
            // -- SANITIZE GET --
            $id = preg_replace("/[^0-9]/", "", $get_id);
            $id_conversion = (int) $id;
            $id_int = filter_var($id_conversion, FILTER_VALIDATE_INT);
            
            return ($debbuger) ?  "value: {$id}, type: ".gettype($id_int).""  : $id_int;
        }

    }
?>