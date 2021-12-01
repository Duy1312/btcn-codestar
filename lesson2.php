
<?php
$userListInput = [
    [
        "username" => "Karl",
        "language" => "en"
    ], [
        "username" => "Tam",
        "language" => "vi"
    ], [
        "username" => "Kazuki",
        "language" => "ja"
    ]
];

function showMessege($username, $language)
{

    $message ='';
    
  
            if($language == "vi"){
                $message = 'Xin chào ' . $username;
            } elseif($language== "en"){
                $message ='Hello ' . $username;
            } elseif($language == "ja"){
                $message = 'konbawa ' . $username;
            } else {
                $message = 'not found';
            }
            return $message;
        
}
    function getWelcomeMessage($username, $userList){
    
        foreach ($userList as $user) {
            if( $username === $user["username"]) {
                return showMessege($username, $user["language"]); 
            }
        }
    
        return '';
    }
    echo getWelcomeMessage("Kazuki", $userListInput)."<br>";
 

    ?>
