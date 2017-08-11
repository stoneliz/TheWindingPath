/*
Theme Name: The Winding Path_Wireframe 0.3
Author: Piano Hagens, Tomomi Matsuzakl, Liz Stone, Trang Pham, Sicheng Zho
Author URI: http://www.phagens.com/web10
Description: Web210 WordPress Project_The Winding Path
Version: 1.0
*/

$(document).ready(function(){
        
        $("#menu-item-143").hover(function(){
            
            $('.sub-menu').slideToggle('slow');
        });
        
        $(".buger-toggle").click(function(){
            
            $(".nav").slideToggle('slow');
        });
        
        //Mike Sinkula's code 
        //$(".dropdown-toggle").click(function(){
            
           //$(this).next(".dropdown-menu").toggle();});

    });