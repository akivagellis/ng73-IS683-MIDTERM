<?php

$attributes = array();

$tag = '';

$attributes = array('title'=>'my article title', 'body'=>'lorem ipsum');

$content = "lotsastuff";


function tag($tag, $attributes, $content) {

 validate($attributes);

        $output = '<' . $tag;

 


        foreach($attributes as $key => $value) {

                        $output .= ' ' . $key . '="' . $value . '"';

        }

 
        $output .= '>' . $content . '</' . $tag . '>';



        echo $output;
}

 


function validate($value) {

 

        if(!is_array($value)) {

                echo "ERROR: Your input is not an array!";

        }

}

 

      function createtag($tag,$attributes,$content){

 


                foreach($attributes as $key=>$value){

                 

                switch($key){

                case'title':

                $tag = 'h1';

                $atributes = array("class"=>"title");

               

                break;

               

                case'body':

                $tag = 'p';

                $attributes = array("class"=>"body");

                break;

                }

                $htmlcontent =tag($tag,$attributes,$content) ;

        }

      }

    createtag($tag,$attributes,$content);

 

?>

