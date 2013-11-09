<?php
    if($_GET['protolus__path']) $_SERVER['REQUEST_URI'] = '/'.$_GET['protolus__path'];
    require('./Protolus_Resource.class.php');
    Protolus_Resource::reqyre('async-arrays');
    Protolus_Resource::reqyre('main');
    $response = new Protolus_HTTP_Response();
    $request = new Protolus_HTTP_Request();
    
    
    Protolus_Resource::enable('js');
    Protolus_Resource::handle($request, $response, function(){
        Protolus_Resource::head('js', function($html){
            echo('<html><head>'.
                $html.
                '<title>Test</title>'.
            '</head><body>'.
                '<h1>Test</h1>'.
            '</body></html>');
        });
    });