<?php

require_once 'vendor/autoload.php';
use PHPHtmlParser\Dom;


ini_set('default_socket_timeout', 1);
$s = 0;
$array = [0];
$counted = 0;
for($i = 0; $i >= -1; $i++){

    $count = count($array);
    $array[$count - 1] = $s;

if($i > 25){
    $site = '';
    foreach ($array as $item){
        $site .= alfavit()[$item];
    }
if($site == 'gim'){
    //dd($i);
}
    try{
        if($siteContent1 = file_get_contents('https://www.'.$site.'.ru/')){
            $siteName = 'https://www.'.$site.'.ru/';
            $dom = new Dom;
            $dom->loadStr($siteContent1);
            $meta = $dom->find('meta');
            foreach ($meta as $content)
            {
                $name = $content->getAttribute('name');
                if($name == 'description'){
                    $description = $content->getAttribute('content');
                }
            }
            $title = $dom->find('title')[0]->text;
            if($title){
                $connect = mysqli_connect('localhost', '', '', 'lugle');
                $fetch = mysqli_query($connect, "INSERT INTO sites (title, description, link) VALUES ('$title', '$description', '$siteName')");
                mysqli_close($connect);
                dump($siteName);
            }
        }
        elseif($siteContent2 = file_get_contents('https://'.$site.'.ru/')){
            $siteName = 'https://'.$site.'.ru/';
            $dom = new Dom;
            $dom->loadStr($siteContent2);
            $meta = $dom->find('meta');
            foreach ($meta as $content)
            {
                $name = $content->getAttribute('name');
                if($name == 'description'){
                    $description = $content->getAttribute('content');
                }
            }
            $title = $dom->find('title')[0]->text;
            if($title){
                $connect = mysqli_connect('localhost', '', '', 'lugle');
                $fetch = mysqli_query($connect, "INSERT INTO sites (title, description, link) VALUES ('$title', '$description', '$siteName')");
                mysqli_close($connect);
                dump($siteName);
            }
        }
        elseif($siteContent3 = file_get_contents('http://'.$site.'.ru/')){
            $siteName = 'http://'.$site.'.ru/';
            $dom = new Dom;
            $dom->loadStr($siteContent3);
            $meta = $dom->find('meta');
            foreach ($meta as $content)
            {
                $name = $content->getAttribute('name');
                if($name == 'description'){
                    $description = $content->getAttribute('content');
                }
            }
            $title = $dom->find('title')[0]->text;
            if($title){
                $connect = mysqli_connect('localhost', '', '', 'lugle');
                $fetch = mysqli_query($connect, "INSERT INTO sites (title, description, link) VALUES ('$title', '$description', '$siteName')");
                mysqli_close($connect);
                dump($siteName);
            }
        }
    }
catch (\Exception $exception){}
}


//if($i > 899000){
//    dump($array);
//}

        if(isset(array_count_values($array)[25]) && array_count_values($array)[25] == $count){
            foreach ($array as $key => $a){
                $array[$key] = 0;
            }
            $array[] = 0;
            $s = 0;
            $counted = count($array)-2;
        }


    //    dump($i);

    if($s == 25){

        if($s == 25 && count($array) == 2){
            $array[0]++;
        }
        if(count($array) == 3 && $s == 25 ){
            $array[1]++;
        }
        if(count($array) == 3 && $s == 25 && $array[1] == 25){
            $array[0]++;
            if($array[0] !== 25){
                $array[1] = 0;
            }

        }
        if(count($array) == 4 && $s == 25 && $array[2] != 25){
            $array[2]++;
        }
        if(count($array) == 4 && $s == 25 && $array[2] == 25){
            $array[1]++;
            if($array[1] !== 25){
                $array[2] = 0;
            }

        }
        if(count($array) == 4 && $s == 25 && $array[2] == 25 && $array[1] == 25){
            $array[0]++;
            if($array[0] !== 25){
                $array[1] = 0;
            }

        }

        if(count($array) == 5 && $s == 25 && $array[3] != 25){
            $array[3]++;
        }
        if(count($array) == 5 && $s == 25 && $array[3] == 25 && $array[2] != 25){
            $array[2]++;
            if($array[2] !== 25){
                $array[3] = 0;
            }

        }
        if(count($array) == 5 && $s == 25 && $array[3] == 25 && $array[2] == 25 && $array[3] == 25){
            $array[1]++;
            if($array[1] !== 25){
                $array[2] = 0;
            }

        }

        if(count($array) == 5 && $s == 25 && $array[3] == 25 && $array[2] == 25 && $array[3] == 25 && $array[2] == 25){
            $array[0]++;
            if($array[0] !== 25){
                $array[1] = 0;
            }

        }





        if(count($array) == 6 && $s == 25 && $array[4] != 25){
            $array[4]++;
        }
        if(count($array) == 6 && $s == 25 && $array[4] == 25 && $array[3] != 25){
            $array[3]++;
            if($array[3] !== 25){
                $array[4] = 0;
            }

        }

        if(count($array) == 6 && $s == 25 && $array[4] == 25 && $array[3] == 25 && $array[4] == 25 && $array[2] !== 25){
            $array[2]++;
            if($array[2] !== 25){
                $array[3] = 0;
            }

        }

        if(count($array) == 6 && $s == 25 && $array[4] == 25 && $array[2] == 25 && $array[4] == 25 && $array[3] == 25){
            $array[1]++;
            if($array[1] !== 25){
                $array[2] = 0;
            }

        }

        if(count($array) == 6 && $s == 25 && $array[4] == 25 && $array[2] == 25 && $array[4] == 25 && $array[3] == 25 && $array[2] == 25){
            $array[0]++;
            if($array[0] !== 25){
                $array[1] = 0;
            }
            dd($i);
        }

        $s = 0;
    }
    if($i == 40000000){
        die();
    }
    $s++;
}



//$d = file_get_contents('https://www.asussadsafasg.com/');
//dd($d);

function alfavit(){
    return [
      'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];
}