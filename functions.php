<?php
function redirectTo($path)
{
    header("Location:" . $path . "");
    exit();
}
function sessionStart()
{
    if (session_id() == '') {
        session_start();
    }
}
function login($email, $password)
{
    if (isset($email) && isset($password)) {
        global $con;
        $stmt = $con->prepare("SELECT * FROM users where email=? and password=? limit 1");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $user = $stmt->get_result()->fetch_object();
        
        if (count($user)==1) {
            // try {

            sessionStart();
            $_SESSION['user_id'] = $user->id;
            return true;
            // } catch (\Exception $e) {
            //     logout();
            // }

        } else {
            return false;
        }

        
    }
}
function logout(){
    sessionStart();

    session_unset();
    session_destroy();
    redirectTo(BASE_URL."/admin/login.php");
}
function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
