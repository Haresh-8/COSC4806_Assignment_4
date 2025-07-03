<?php
class ReminderModel {
    public function getByUser($user_id) {
        $db = db_connect();
        $stmt = $db->prepare("SELECT * FROM reminders WHERE user_id = ? ORDER BY created_at DESC");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
