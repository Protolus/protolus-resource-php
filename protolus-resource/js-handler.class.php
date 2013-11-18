<?php
    class Protolus_Javascript_Handler{
        
        public function __construct(){
        }
        
        public function html($name){
            return '<script src="/js/'.$name.'" protolus="'.$name.'"></script>';
        }
        
        public function body($name, $files, $options=null){
            //header('Content-type: application/javascript');
            if($options == null) $options = array();
            if(!$options['minify']){
                $result = '';
                foreach($files as $file){
                    $pre = "(function(){\nvar require = Protolus.require; \n";
                    $post = "\n})();\n";
                    //$pre = "";
                    //$post = "";
                    if(startsWith($file, '!')){
                        $file = substr($file, 1);
                        $pre =  'Protolus.preregister(\''.$name.'\', function(){'.
                                    'var module = {};'.
                                    'module.exports = {};'.
                                    'var exports = module.exports;'.
                                    'var require = Protolus.require;';
                        $post =     'return module.exports; '.
                                '});';
                    }
                    $results .= $pre.file_get_contents($file).$post;
                }
                return $results;
            }else{
                
            }
        }
        
    }
    
    Protolus_Resource::$handlers['js'] = new Protolus_Javascript_Handler();