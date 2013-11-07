<?php
    require('./Protolus_Resource.class.php');
    Protolus_Resource::reqyre('async-arrays');
    
    Protolus_Resource::head('js', function($html){
        echo('HEAD:'.$html."\n");
    });