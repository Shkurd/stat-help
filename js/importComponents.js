

        $("document").ready(function(){
            $( "header" ).load( "http://stathelp/header.html #importheader" );
        });

        $("document").ready(function(){
            $( "aside" ).load( "http://stathelp/aside.html #importaside" );
        });

        $("document").ready(function(){
            $( "footer" ).load( "http://stathelp/footer.html #importfooter" );
        });



    /*
     Возможен альтернативный вариант (ниже) но не пошло на сафари (поэтому или ajax или PHP (<?php include("file.php"); ?>))

     var link = document.querySelectorAll('link[rel=import]');
     var contentHeader = link[0].import.querySelector('#importheader');
     var Header = document.getElementsByTagName('header');
     Header[0].appendChild(contentHeader.cloneNode(true));

     var contentAside = link[1].import.querySelector('#importaside');
     var aside = document.getElementsByTagName('aside');
     aside[0].appendChild(contentAside.cloneNode(true));

     var contentAside = link[2].import.querySelector('#importfooter');
     var footer = document.getElementsByTagName('footer');
     footer[0].appendChild(contentAside.cloneNode(true));
    */
