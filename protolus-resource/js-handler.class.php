<?php
    class Protolus_Javascript_Handler{
        
        public function __construct(){
        }
        
        public function html($name){
            return '<script src="/js/'.$name.'" protolus="'.$name.'"></script>';
        }
        
        public function body($files, $options=null){
            header('Content-type: application/javascript');
            if($options == null) $options = array();
            if(!$options['minify']){
                $result = '';
                foreach($files as $file){
                    $results .= file_get_contents($file)."\n";
                }
                return $results;
            }else{
                
            }
        }
        
    }
    
    Protolus_Resource::$handlers['js'] = new Protolus_Javascript_Handler();