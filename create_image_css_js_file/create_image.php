<?php

    // https://www.thesitewizard.com/php/create-image.shtml
    // https://www.geeksforgeeks.org/php-imagecreate-function/#:~:text=The%20imagecreate()%20function%20is,function%20creates%20high%20quality%20images.
    $my_img = imagecreate( 500, 680 ); // (width, height)
    $background = imagecolorallocate( $my_img, 96, 0, 5 ); // image, red,green,blue imagecolorallocatealpha with alpha value
    $text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
    $line_colour = imagecolorallocate( $my_img, 0, 0, 0 );
    $line_colour2 = imagecolorallocate( $my_img, 0, 0, 0 );
    
    imagesetthickness ( $my_img, 5 ); //image, thickness value
    imageline( $my_img, 220, 45, 100,300, $line_colour ); // image, x1,y1,x2,y2,color , draw a line between two given points
    imageline( $my_img, 220, 45, 390,300, $line_colour2 ); 
    imageline( $my_img, 390, 300, 100,300, $line_colour );

    imageline( $my_img, 350, 100, 100,100, $line_colour2 );
    imageline( $my_img, 350, 100, 250,400, $line_colour );
    imageline( $my_img, 100, 100, 250,400, $line_colour2 );
    // imageline( $my_img, 30, 70, 165, 45, $line_colour2 );

    header( "Content-type: image/png" );
    imagepng( $my_img ); //output or save as png

    //clean up
    imagecolordeallocate( $line_color );
    imagecolordeallocate( $text_color );
    imagecolordeallocate( $background );
    imagedestroy( $my_img );







    // $my_img = imagecreate( 500, 380 ); // (width, height)
    // $background = imagecolorallocate( $my_img, 0, 0, 255 ); // image, red,green,blue imagecolorallocatealpha with alpha value
    // $text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
    // $line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
    // $line_colour2 = imagecolorallocate( $my_img, 128, 255, 255 );
    // imagestring( $my_img, 4, 30, 25, "FairyTail", $text_colour ); //image,font,x,y,string, color
    // imagestring( $my_img, 4, 30, 50, "AOT", $text_colour );
    // imagesetthickness ( $my_img, 5 ); //image, thickness value
    // imageline( $my_img, 30, 45, 165, 45, $line_colour ); // image, x1,y1,x2,y2,color , draw a line between two given points
    // imageline( $my_img, 30, 70, 165, 45, $line_colour2 );

    // header( "Content-type: image/png" );
    // imagepng( $my_img ); //output or save as png
    // imagecolordeallocate( $line_color );
    // imagecolordeallocate( $text_color );
    // imagecolordeallocate( $background );
    // imagedestroy( $my_img );
?>