<?php 
function xf_scandir($dir)
{
     $files = array();
     if( $handle=opendir($dir) ){                             //$handle=Resource id #3

        while( ($file = readdir($handle)) !== false ){       //echo $file;echo "<hr>"; //$file分别是 .  ..   a.php   b.php   c
            if( $file != ".." && $file != "." ){
                if( is_dir($dir . "/" . $file) ){   //文件夹c           
                        $files[$file] = xf_scandir($dir . "/" . $file);                                      
                }else{                              //文件a.php,b.php                 
                    $files[] = $file;                          //var_dump($file);echo "<hr>";//分别是 a.php  b.php
                }
            }
        }


        closedir($handle);
        return $files;
    }
}

$re=xf_scandir('D:\testscandir');
var_dump($re);
/*
array (size=3)
  0 => string 'a.php' (length=5)
  1 => string 'b.php' (length=5)
  'c' => 
    array (size=2)
      0 => string 'c1.txt' (length=6)
      1 => string 'c2.doc' (length=6)
*/


?>
