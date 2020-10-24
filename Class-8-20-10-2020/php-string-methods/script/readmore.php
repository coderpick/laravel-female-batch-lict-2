<?php 
    function readMore($text,$limit=20){
            $text = $text.' ';
            $text = substr($text,0,$limit);
            $text = substr($text,0,strripos($text, " "));
            $text =$text.'...';
            return $text;
    };

    $post="Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur provident soluta, eaque maxime accusamus perspiciatis repellat ipsam facere mollitia inventore nisi cupiditate ipsum impedit qui aut. Itaque tempore tempora aliquam! ";

    echo readMore($post,50);

?>
