<?php
 
    $nombre=$_FILES['file']['name'];
    $guardado=$_FILES['file']['tmp_name'];

    if(!file_exists('documentos')){
        mkdir('documentos',0777,true);
        if(file_exists('documentos')){
            if(move_uploaded_file($guardado,'documentos/'.$nombre)){
                echo"archivo guardado con exito";
            }else{
                echo"archivo no se pudo guardar";
            }
        }
    }else{
        if(move_uploaded_file($guardado,'documentos/'.$nombre)){
            echo"archivo guardado con exito";
        }else{
            echo"archivo no se pudo guardar";
        }
    }
?>