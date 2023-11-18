<?php
function streetIsValid($data)
{
    $length = strlen($data);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le street est trop court ",
        ];


    }elseif($length>50) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le street est trop long ",
        ];
    }

    return $reponse;
}

function typeIsValid($data)
{
    $length = strlen($data);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le type est trop court ",
        ];


    }elseif($length>20) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le type est trop long ",
        ];
    }

    return $reponse;
}


function cityIsValid($data)
{
    $length = strlen($data);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le city est trop court ",
        ];


    }elseif($length>50) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le city est trop long ",
        ];
    }

    return $reponse;
}
function street_nbIsValid($data)
{   
    $numerique=intval($data);
    $length = strlen($numerique);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    
    if($length<1){
        $reponse=[
            "is valid"=> false,
            "message"=> "le street_nb est trop court ",
        ];


    }elseif($length>5) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le street_nb est trop long ",
        ];
    }

    return $reponse;
}
function zipcodeIsValid($data)
{
    $length = strlen($data);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<6){
        $reponse=[
            "is valid"=> false,
            "message"=> "le zipcode est trop court ",
        ];


    }elseif($length>6) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le zipcode  est trop long ",
            "warning"=>"veuillez ne pas mettre d espace svp!!"
        ];
    }

    return $reponse;
}





?>