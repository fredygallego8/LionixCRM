<?php

class LXAccountsAfterRetrieveMethods
{
    public function setLinksToUploadedFiles($bean, $event, $arguments)
    {
        if (isset($_REQUEST['module'],$_REQUEST['action']) && $_REQUEST['module'] == 'Accounts' && $_REQUEST['action'] == 'DetailView') {
            global $sugar_config;
            $url = $sugar_config['site_url'];
            $files_fields = $sugar_config['lionixcrm']['modules']['accounts']['upload_files_fields'];
            foreach ($files_fields as $ff) {
                $json_to_show = json_decode(html_entity_decode($bean->{$ff['field_name']}));
                $url = "{$json_to_show->note_link}";
                $bean->{$ff['field_name']} = "<a href=\"$url\">{$json_to_show->note_name}</a>";
            }
        }
    }
}
