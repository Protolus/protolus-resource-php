<?php
    if($_GET['protolus__path']) $_SERVER['REQUEST_URI'] = '/'.$_GET['protolus__path'];
    require('./Protolus_Resource.class.php');
    Protolus_Resource::reqire('async-arrays');
    Protolus_Resource::reqire('lies');
    Protolus_Resource::reqire('main');
    $response = new Protolus_HTTP_Response();
    $request = new Protolus_HTTP_Request();
    
    
    Protolus_Resource::enable('js');
    Protolus_Resource::enable('css');
    Protolus_Resource::enable('less');
    
    Protolus_Resource::handle($request, $response, function(){
        Protolus_Resource::head(function($html){
            echo('<html><head>'.
                $html.
                '<title>Test</title>'.
            '</head><body>'.
                '<h1>Test</h1>'.
            '</body></html>');
        });
    });