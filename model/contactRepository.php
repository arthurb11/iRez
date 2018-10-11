<?php



function dbConnect() {
    try
    {
        return new PDO('mysql:host=localhost;dbname=irez;charset=utf8','root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function insertContactInDatabase() {
    try
    {
        $bdd = dbConnect();

        $request = $bdd ->
        prepare('INSERT INTO contact(`lastname`, `firstname`, `tel`, `email`) VALUES(:lastname, :firstname, :tel, :email)');
 
        $isRequestOk = $request -> execute(array(
            'lastname'=>$_POST['name'], 
            'firstname'=>$_POST['first_name'], 
            'tel'=>$_POST['tel'], 
            'email'=>$_POST['email'] 
        ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}


function isContactExist($email) {

    try 
    {
        $bdd = dbConnect();
        $request = $bdd -> prepare("SELECT email FROM contact WHERE email = '".$email."'") ;

        $response = $request->fetch();

        return $response;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}



// function isTel($tel) {

//     try 
//     {
//         $bdd = dbConnect();

//         $request = $bdd -> prepare("SELECT tel FROM contact WHERE tel = '".$tel."'") ;
//         $response = $request->fetch();
//         return $response;
//     }
//     catch(Exception $e)
//     {
//         die('Erreur : '.$e->getMessage());
//     }
    
// }

// function insertTel() {

//     try 
//     {
//         $bdd = dbConnect();

//         $request = $bdd -> prepare("INSERT INTO contact(`tel`) VALUES(:tel)");
 
//         $isRequestOk = $request -> execute(array(
//             'tel'=>$_POST['tel'] 
//         ));

//         if (!$isRequestOk) {
//             die('pas ok au niveau du tel insert');
//         }
//     }
//     catch(Exception $e)
//     {
//         die('Erreur : '.$e->getMessage());
//     }
// }




    
