<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$viewdefs ['Project'] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'modules/Project/Project.js',
        ),
        1 =>
        array (
          'file' => 'modules/Project/js/custom_project.js',
        ),
      ),
      'form' =>
      array (
        'buttons' =>
        array (
          0 =>
          array (
            'customCode' => '<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'; {/if}"/>',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => ' {$APP.LBL_EDIT_BUTTON_LABEL} ',
              'htmlOptions' =>
              array (
                'id' => 'edit_button',
                'class' => 'button',
                'accessKey' => '{$APP.LBL_EDIT_BUTTON_KEY}',
                'name' => 'Edit',
                'onclick' => '{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'; {/if}',
              ),
            ),
          ),
          1 =>
          array (
            'customCode' => '<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="button" name="Delete" id="delete_button" value="{$APP.LBL_DELETE_BUTTON_LABEL}" onclick="project_delete(this);"/>',
            'sugar_html' =>
            array (
              'type' => 'button',
              'id' => 'delete_button',
              'value' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'htmlOptions' =>
              array (
                'title' => '{$APP.LBL_DELETE_BUTTON_TITLE}',
                'accessKey' => '{$APP.LBL_DELETE_BUTTON_KEY}',
                'id' => 'delete_button',
                'class' => 'button',
                'onclick' => 'project_delete(this);',
              ),
            ),
          ),
          2 =>
          array (
            'customCode' => '<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" type="submit" name="Duplicate" id="duplicate_button" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'projecttemplateseditview\'; this.form.return_id.value=\'{$id}\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'; this.form.return_id.value=\'{$id}\';{/if}""/>',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_DUPLICATE_BUTTON_LABEL}',
              'htmlOptions' =>
              array (
                'title' => '{$APP.LBL_DUPLICATE_BUTTON_TITLE}',
                'accessKey' => '{$APP.LBL_DUPLICATE_BUTTON_KEY}',
                'class' => 'button',
                'name' => 'Duplicate',
                'id' => 'duplicate_button',
                'onclick' => '{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'projecttemplateseditview\'; this.form.return_id.value=\'{$id}\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'; this.form.return_id.value=\'{$id}\';{/if}',
              ),
            ),
          ),
          3 =>
          array (
            'customCode' => '<input title="{$APP.LBL_VIEW_GANTT_TITLE}" class="button" type="button" name="view_gantt" id="view_gantt" value="{$APP.LBL_GANTT_BUTTON_LABEL}" onclick="javascript:window.location.href=\'index.php?module=Project&action=view_GanttChart&record={$id}\'"/>',
          ),
          4 => 
          array (
            'customCode' => '<input title="{$APP.LBL_VIEW_DETAIL}" class="button" type="button" name="view_detail" id="view_detail" value="{$APP.LBL_DETAIL_BUTTON_LABEL}" onclick="javascript:window.location.href=\'index.php?module=Project&action=DetailView&record={$id}\'"/>',
          ),
        ),
      ),
      'useTabs' => false,
      'tabDefs' =>
      array (
        'LBL_PROJECT_INFORMATION' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array (
      'lbl_project_information' =>
      array (
        0 =>
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'estimated_start_date',
            'label' => 'LBL_DATE_START',
          ),
          1 => 'priority',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'estimated_end_date',
            'label' => 'LBL_DATE_END',
          ),
          1 => 'override_business_hours',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 =>
          array (
            'name' => 'am_projecttemplates_project_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
