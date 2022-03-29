<?php
include 'auth.php';
class menu_fetch extends auth{
    public function menu_components()
    {
        $user_id ='1';
        $sql = "SELECT name, link From menu INNER JOIN permission ON menu.id = permission.menu_id where permission.user_id=:user_id";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['user_id'=>$user_id]);
        $menu_fetched = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $menu_fetched;

    }
    function PageName() {
        return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
      }
}
?>