<?php
function getSetting($settingname = 'sitename')
{
    $test = \App\SiteSetting::where('namesetting', $settingname)->get()[0]->value;
    return $test;
}
function countAllvoiturepublier($user_id,$status){
    return \App\Auto::where('enpublic' , $status)->where('user_id' , $user_id)->count();
}

function countAllmotopublier($status){
    return \App\Moto::where('enpublic' , $status)->count();
}
function countAllVUpublier($status){
    return \App\Vehicule::where('enpublic' , $status)->count();
}
function countAllCCpublier($status){
    return \App\Camping::where('enpublic' , $status)->count();
}
function countAllCpublier($status){
    return \App\Camion::where('enpublic' , $status)->count();
}
function countAllRpublier($status){
    return \App\Remorque::where('enpublic' , $status)->count();
}

function checkIfImageIsexist($imageName, $pathImage = '/public/front/images/',
                             $url = '/public/front/images/')
{
    if ($imageName != '') {
        $path = base_path().$pathImage.$imageName;
        if (file_exists($path)) {
            return Request::root().$url.$imageName;
        }
    } else {
        return getSetting('no_image');
       // return Request::root().$url.'no_image.jpg';
    }

}

function checkIfVideoIsexist($videoName, $pathvideo = '/public/front/videos/', $url = '/front/videos/')
{

    if ($videoName != '') {
        $path = base_path().$pathvideo.$videoName;
        if (file_exists($path)) {
            return Request::root().$url.$videoName;
        }
    } else {
        return getSetting('no_image');
       // return Request::root().$url.'no_image.jpg';
    }

}




function uploadImage($request , $path = '/public/front/images/' , $width ='1024' , $height = '682',
                     $deleteFileWithName = ''){
    if($deleteFileWithName != ''){
        deletimage(base_path().$path.'/'.$deleteFileWithName);
    }
   $dim = getimagesize($request);
    $fileName = $request->getClientOriginalName();
    $request->move(
        base_path().$path , $fileName
    );
    if($width == '1024' && $height == '682'){
        $thumbPath = base_path().'/public/front/images/';
        $thumbPathNew = $thumbPath.$fileName;
        \Intervention\Image\Facades\Image::make(base_path().$path.'/'.$fileName)->resize('1024', '682')
            ->save($thumbPathNew , 100);
        if($deleteFileWithName != ''){
            deletimage($thumbPath.$deleteFileWithName);
        }
    }
    return $fileName;
}




















function uploadVideo($request , $path = '/public/front/videos/' , $deleteFileWithName = ''){
    if($deleteFileWithName != ''){
        deletimage(base_path().$path.'/'.$deleteFileWithName);
    }
    $dim = getimagesize($request);
    $fileName = $request->getClientOriginalName();
    $request->move(
        base_path().$path , $fileName
    );

        $thumbPath = base_path().'/public/front/videos/';
        $thumbPathNew = $thumbPath.$fileName;
      /*  \Intervention\Image\Facades\Image::make(base_path().$path.'/'.$fileName)->resize('500', '362')
            ->save($thumbPathNew , 100);*/
        if($deleteFileWithName != ''){
            deletimage($thumbPath.$deleteFileWithName);
        }

    return $fileName;
}


function deletimage($deleteFileWithName){
    if(file_exists($deleteFileWithName)){
        \Illuminate\Support\Facades\File::delete($deleteFileWithName);
    }
}

function searchFields()
{
    return [
        'auto_price' => 'auto_price',
        'prix_de' => 'Prix min',
        'prix_a' => 'Prix max',
        'auto_marque' => 'auto_marque',
      //  'chambres' => 'Nombre de chambres',
        'auto_vitesse' => 'auto_vitesse ',
        'auto_year' => 'auto_year ',
        //'art_prix' => 'Prix',

    ];
}
function auto_month()
{
    $array = [

       'Janvier',
         'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
         'Août',
         'Septembre',
         'Octobre',
         'Novombre',
         'Décembre',
    ];
    return $array;
}

function admin()
{
    $array=[

        'client',
        'admin',
        'professionnel'
    ];

    return $array;
}
function validation(){
    $array = [
        'non valider',
        'valider',
    ];
    return $array;
}
function enpublic(){
    $array = [
        'non selectionner',
        'selectionner',
    ];
    return $array;
}
function magazine(){
    $array = [
        'non magazine',
        'magazine',
    ];
    return $array;
}
function existe(){
    $array = [
        'nouveau',
        'exsite',
    ];
    return $array;
}



function autos_carrosserie()
{
    $array = [

        ' Break ',
        ' Coupe ',
        ' Petite voiture ',
        ' Bus ',
        ' Limousine ',
        ' Pick-up ',
        ' Cabriolet ',
         ' MPV / minibus ',
        ' SUV/tout-terrain ',

    ];
    return $array;
}
function VU_carrosserie()
{
    $array = [
     'Plateau',
        'Fourgon',
        'Plateau cabine double',
        ' Bus ',
        ' Break ',

        'Fourgon cabine doulbe',
        'Plate-forme',
        ' Pick-up ',
        ' Bus ',
        'Fourgon vitré',
        ' Semi-remorques',
        ' Pick-up ',
        ' Cabine châssis ',
        ' Tribenne & Plateau ',


    ];
    return $array;
}
function moto_carrosserie()
{
    $array = [

        ' Attelage ',
        ' Supermoto / Trial ',
        ' Custom Bike ',
        ' Naked Bike ',
        ' ATV / Quad ',
        ' Enduro ',
        ' Motocross ',
        ' Bicyclette électrique ',
        ' Remorque ',
        'Touring',
        'Route',
        'Tricycle / Trike / Cabine',
        'Motoneige',
        'Scooter','Cruiser',
        'Vélomoteur',

    ];
    return $array;
}
function Camping_carrosserie()
{
    $array = [

        ' Autres ',
        ' caravane ',
        ' Semi-intégré ',
        'Cabine ',
        ' Fourgon',
        ' Pick-up ',
        'Capucine ',
        ' Camping car Pick-Up',
        'Intègré',


    ];
    return $array;
}
function Remorque_carrosserie()
{
    $array = [

        ' Ascenseur ',
        'Autres ',
        'Remorque pour voiture',
        'Plateau',
        'Remorque pour bateau',
        'Tribenne & Plateau ',
        ' Caisson isotherme et frigorifique',
        ' Remorque pour cheval ',
        ' Remorque pour moto ',
        'Réservoir',
        'Surbaissé',
        'Transport Bovins',
        'Auto Transporter',
        'Remorque pour vente',
        'Transporteur de bois',


    ];
    return $array;
}
function camion_carrosserie()
{
    $array = [

        ' Break ',
        ' Coupe ',
        ' Petite voiture ',
        ' Bus ',
        ' Limousine ',
        ' Pick-up ',
        ' Cabriolet ',
        ' MPV / minibus ',
        ' SUV/tout-terrain ',

    ];
    return $array;
}


function cv()
{
    $arr = [];

       for ($i = 40 ; $i <=300; $i+=10)
    {

        $arr[$i] = $i;
    }
        for ($i = 300 ; $i <=400; $i+=20)
        {
            $arr[$i] = $i;

        }
       for ($i = 400 ; $i <=700; $i+=50)
        {
            $arr[$i] = $i;

        }



    return $arr;
}
function prix()
{
    $arr = [];

       for ($i = 1000  ; $i <=5000 ; $i+=1000)
    {

        $arr[$i] = $i.""."Chf";
    }
        for ($i = 5000 ; $i <=30000; $i+=2500)
        {
            $arr[$i] = $i.""."Chf";

        }
       for ($i = 30000 ; $i <=50000 ; $i+=5000)
        {
            $arr[$i] = $i.""."Chf";

        }
    for ($i = 50000 ; $i <=300000  ; $i+=10000)
        {
            $arr[$i] = $i.""."Chf";

        }



    return $arr;
}

function porte()
{
    $array=[
        "n-1" => "2",
        "n-2" => "4",
        "n-3" => "5",
        


    ];
    return $array;
}
function ville()
{
    $array=[


        "n-1"=>"Zurich",
        "n-2"=>"Berne ",
        "n-3"=>"Lucerne",
        "n-4"=>"Uri",
        "n-5"=>"Schwytz",
        "n-6"=>"Obwald ",
        "n-7"=>"Nidwald",
        "n-8"=>"Glaris",
        "n-9"=>"Zoug ",
        "n-10"=>"Fribourg",
        "n-11"=>"Soleure",
        "n-12"=>"Bâle-Ville",
        "n-13"=>"Bâle-Campagne",
        "n-14"=>"Schaffhouse",
        "n-15"=>"Appenzell Rhodes-Extérieures",
        "n-16"=>"Appenzell Rhodes-Intérieures",
        "n-17"=>"Saint-Gall",
        "n-18"=>"Grisons",
        "n-19"=>"Argovie",
        "n-20"=>"Thurgovie",
        "n-21"=>"Tessin",
        "n-22"=>"Vaud",
        "n-23"=>"Valais",
        "n-24"=>"Neuchâtel",
        "n-25"=>"Genève",
        "n-26"=>"Jura",

    ];
    return $array;
}

function categorie()
{
    $array = [

        "n-1" => "Démonstration",
        "n-2" => "Neuf",
        "n-3" => "Occasion",



    ];
    return $array;
}
function type()
{
    $array = [

        "n-1" => "sport",



    ];
    return $array;
}
function couleuren()
{
    $array = [

        "n-1" => "rouge",
        "n-2" => "noir ",
        "n-3" => "vert",
        "n-4" => "blanc",

    ];
    return $array;
}
function couleurex()
{
    $array = [

        "n-1" => "rouge",
        "n-2" => "rouge bourdeau",
        "n-3" => "vert",
        "n-4" => "blanc",

    ];
    return $array;
}

function auto_carburan()
{
    $array = [

        "n-1" => "Bioéthanol",
        "n-2" => "Diesel",
        "n-3" => "Gaz",
        "n-4" => "Essence",
        "n-5" => "Gaz (LNG, LPG, GPL, CNG)",
        "n-6" => "Gaz liquide (LPG) / Essence",
        "n-7" => "Gaz naturel (CNG) / Essence",
        "n-8" => "Hybride",
        "n-9" => "Diesel/Electrique",
        "n-10" => "Essence/Electrique",
        "n-11" => "Hydrogéne",



    ];
    return $array;
}
function moto_carburan()
{
    $array = [

        "n-1" => "motoBioéthanol",
        "n-2" => "Diesel",
        "n-3" => "Gaz",
        "n-4" => "Essence",
        "n-5" => "Gaz (LNG, LPG, GPL, CNG)",
        "n-6" => "Gaz liquide (LPG) / Essence",
        "n-7" => "Gaz naturel (CNG) / Essence",
        "n-8" => "Hybride",
        "n-9" => "Diesel/Electrique",
        "n-10" => "Essence/Electrique",
        "n-11" => "Hydrogéne",



    ];
    return $array;
}

function  PoidsRemorque()
{
    $array = [

        "n-1" => "750",
        "n-2" => "1000",
        "n-3" => "1100",
        "n-4" => "1200",
        "n-5" => "1300",
        "n-6" => "1400",
        "n-7" => "1500",
        "n-8" => "1600",
        "n-9" => "1700",
        "n-10" => "1800",
        "n-11" => "1900",
        "n-12" => "2000",
        "n-13" => "2500",
        "n-14" => "3000",
        "n-15" => "3500",




    ];
    return $array;
}


function km()
{
    $arr = [];

    for ($i = 1000  ; $i <=5000 ; $i+=1000)
    {

        $arr[$i] = $i;
    }for ($i = 5000  ; $i <=10000 ; $i+=2500)
    {

        $arr[$i] = $i;
    }
    for ($i = 10000  ; $i <=200000 ; $i+=10000)
    {

        $arr[$i] = $i;
    } for ($i = 200000  ; $i <=220000 ; $i+=10000)
    {

        $arr[$i] = $i;
    }

    return $arr;
}
function Consommation()
{
    $arr = [];
    for ($i = 2.0  ; $i <=12.0 ; $i+=0.5 )
    {
        $arr[$i] = $i." "."l/100km  ";

    }
    for ($i = 12.0  ; $i <=20.0 ; $i++ )
    {
        $arr[$i] = $i." "."l/100km  ";

    }
    return $arr;
}
function Rayon()
{
    $arr = [];
    for ($i = 10  ; $i <=50 ; $i+=10 )
    {
        $arr[$i] = $i." "."km";

    }

    return $arr ;
}
function Emission_CO2()
{
    $arr = [];
    for ($i = 50  ; $i <=260 ; $i+=10 )
    {
        $arr[$i] = $i." "."g/km ";

    }
    for ($i = 260  ; $i <=560 ; $i+=20 )
    {
        $arr[$i] = $i." "."g/km ";

    }
    return $arr;
}
function Cylindree()
{
    $arr = [];

    for ($i = 600  ; $i <=2000 ; $i+=200)
    {

        $arr[$i] = $i." "."cm au cube  ";
    } for ($i = 2000  ; $i <=6500 ; $i+=500)
    {

        $arr[$i] = $i." "."cm au cube  ";
    }
    return $arr;
}
function normes()
{
    $array = [

        "n-1" => "Euro1",
        "n-2" => "Euro2",
        "n-3" => "Euro3",
        "n-4" => "Euro4",
        "n-5" => "Euro5",
        "n-6" => "Euro6",




    ];
    return $array;
}
function cathe_energeri()
{
    $array = [

        "n-1" => "A",
        "n-2" => "A-B ",
        "n-3" => "A-C ",
        "n-4" => "A-D",
        "n-5" => "A-E",
        "n-6" => "A-F",
        "n-7" => "A-G",


    ];
    return $array;
}

function auto_vitesse()
{
    $array = [

        //"n-1" => " Automatique",
        "n-1" => "automatique",
        "n-2" => " automatique séquentielle",
        "n-3" => " automatique variable",
        "n-4" => " automatique variable, séquentielle",
       // "n-6" => "manuel",
        "n-5" => " manuelle automatisée",
        "n-6" => " manuelle",
        "n-7" => " manuelle séquentielle",

    ];

    return $array;
}
function Transmission()
{
    $array = [

        //"n-1" => " Automatique",
        "n-1" => "automatique",
        "n-2" => " automatique séquentielle",
        "n-3" => " automatique variable",
        "n-4" => " automatique variable, séquentielle",
       // "n-6" => "manuel",
        "n-5" => " manuelle automatisée",
        "n-6" => " manuelle",
        "n-7" => " manuelle séquentielle",

    ];

    return $array;
}


function Roues()
{
    $array = [

        "n-1" => "4 roues motrices",
        "n-2" => "propulsion",
        "n-3" => "traction avant",


    ];
    return $array;
}


function vehicule()
{
    $array = [
        ' voiture tourisme ',
        ' véhicule utilitaire ',
        ' camion ',
        ' camping car ',
        ' remorque ',
        ' moto ',
    ];
    return $array;
}
function caracteristique()
{
    $array = [
        ' Expertisée',
        ' Véhicules non accidentés ',
        ' Avec garantie ',
    ];
    return $array;
}


function auto_year()
{
    $arr = [];
    for ($i = 2018; $i >= 1950; $i--){
        $arr[$i] = $i;
    }
    return $arr;
}
function auto_siege()
{
    $arr = [];
    for ($i = 1; $i <= 12; $i++){
        $arr[$i] = $i;
    }
    return $arr;
}