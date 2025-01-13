<?php
class UserModel {
    public function getLoggedUser() {
        if (isset($_SESSION['user_id'])) {
            $db = Database::getConnection();
            $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$_SESSION['user_id']]);
            return $stmt->fetch();
        }
        return null;
    }
}
?>