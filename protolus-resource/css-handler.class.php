<?php
    class Protolus_Javascript_Handler{
        
        public function __construct(){
        }
        
        public function html($name){
            return '<script src="/js/'.$name.'" protolus="'.$name.'"></script>';
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
    
    Protolus_Resource::$handlers['css'] = new Protolus_Javascript_Handler();