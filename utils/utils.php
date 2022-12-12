<?php

function changeClassHome(){
    $url = $_SERVER['REQUEST_URI'];
        if($url == '/index.php'){
            echo "active";
        }           
    }

function changeClassContact(){
    $url = $_SERVER['REQUEST_URI'];
        if($url == '/contact.php'){
                echo "active";
        }
    }
function changeClassAbout(){
        $url = $_SERVER['REQUEST_URI'];
            if($url == '/about.php'){
                    echo "active";
            }
    }
function changeClassUpload(){
    $url = $_SERVER['REQUEST_URI'];
            if($url == '/upload.php'){
                echo "active";
            }
    }
function getColumnas($array){
    return implode(", ",$array);
}
function getMarcadores($array){
    return ":" . implode(", :",$array);
}


