<?php
class checkLogin extends newUser
{ 
    public function checkLogin():bool
    {
        if (empty(parent::getLogin()))
        {
            exit ("Insert Login");
        }
        else
        {
            include ("./php/database/connect.php");
            $sql = "SELECT id FROM user WHERE login='$login'";
            $result = mysqli_query($db, $sql);
            $myrow = mysqli_fetch_array($result);
            if (!empty($myrow['id'])) 
                {
                print ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
                return false;    
                }
            else
            {
                return true;
            }
        }
    }
}
?>