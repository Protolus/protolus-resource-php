<?php
    class Protolus_Stylesheet_Handler{
        
        public function __construct(){
        }
        
        public function html($name){
            return '<link href="/css/'.$name.'" rel="stylesheet" protolus="'.$name.'"/>';
        }
        
        public function body($files, $options=null){
            if($options == null) $options=array();
            if(!$options['minify']){
                $result = '';
                foreach($files as $file){
                    $results .= file_get_contents($file);
                }
                return $results;
            }else{
                
            }
        }
        
    }
    
    Protolus_Resource::$handlers['css'] = new Protolus_Stylesheet_Handler();