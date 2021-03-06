<?php

class LXUsersBeforeLogOutMethods
{
    public function setNewTrackerRecord(&$bean, $event, $arguments)
    {
        global $current_user;
        $user_id = $_SESSION['authenticated_user_id'];
        $user_name = $current_user->user_name;
        $session_id = session_id();
        $query = "
        INSERT INTO tracker
        (monitor_id, user_id, module_name, item_id, item_summary, date_modified, `action`, session_id, visible, deleted)
        VALUES('logout-logic-hook', '{$user_id}', 'Logout', '{$user_id}', 'Log Out performed by {$user_name}', utc_timestamp(), 'login', '$session_id', 0, 0);
        ";
        $bean->db->query($query);
    }
}
