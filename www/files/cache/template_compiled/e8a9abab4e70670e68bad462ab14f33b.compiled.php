<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/editor/skins/fckplus_SimpleWhite/editor.css--><?php $__tmp=array('modules/editor/skins/fckplus_SimpleWhite/editor.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="text/javascript">
    var editor_path = "<?php echo $__Context->editor_path ?>";
</script>
<!--#Meta:modules/editor/skins/fckplus_SimpleWhite/fckeditor.js--><?php $__tmp=array('modules/editor/skins/fckplus_SimpleWhite/fckeditor.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/js/editor_common.js--><?php $__tmp=array('modules/editor/tpl/js/editor_common.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/fckplus_SimpleWhite/js/xe_interface.js--><?php $__tmp=array('modules/editor/skins/fckplus_SimpleWhite/js/xe_interface.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- 자동저장용 폼 -->
<?php if($__Context->enable_autosave){ ?>
<input type="hidden" name="_saved_doc_srl" value="<?php echo $__Context->saved_doc->document_srl ?>" />
<input type="hidden" name="_saved_doc_title" value="<?php echo htmlspecialchars($__Context->saved_doc->title) ?>" />
<input type="hidden" name="_saved_doc_content" value="<?php echo htmlspecialchars($__Context->saved_doc->content) ?>" />
<input type="hidden" name="_saved_doc_message" value="<?php echo $__Context->lang->msg_load_saved_doc ?>" />
<?php } ?>
<div class="xeEditor">
        <?php if($__Context->enable_autosave){ ?>
        <p class="editor_autosaved_message" id="editor_autosaved_message_<?php echo $__Context->editor_sequence ?>">&nbsp;</p>
        <?php } ?>
    <!-- 에디터 출력 -->
    <textarea id="fckeditor_<?php echo $__Context->editor_sequence ?>">qweqwe</textarea>
    <?php if($__Context->enable_component){ ?>
    <!-- 확장 컴포넌트 출력 -->
    <div style="display:none" id="editorExtension_<?php echo $__Context->editor_sequence ?>">
        <ul id="editor_component_<?php echo $__Context->editor_sequence ?>" class="editorComponent">
            <?php if($__Context->component_list&&count($__Context->component_list))foreach($__Context->component_list as $__Context->component_name => $__Context->component){ ?>
                <li><?php if($__Context->component->component_icon){ ?><img src="/modules/editor/components/<?php echo $__Context->component_name ?>/component_icon.gif" alt="" width="13" height="12"/><?php } ?> <a href="#" onclick="return false;" id="component_<?php echo $__Context->editor_sequence ?>_<?php echo $__Context->component_name ?>"> <?php echo $__Context->component->title ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
<script type="text/javascript">//<![CDATA[
    var fck_<?php echo $__Context->editor_sequence ?>;
    var auto_saved_msg = "<?php echo $__Context->lang->msg_auto_saved ?>";
    if(document.getElementById("comment_<?php echo $__Context->editor_sequence ?>") == null || document.getElementById("comment_<?php echo $__Context->editor_sequence ?>").style.display != 'none') {
        fck_<?php echo $__Context->editor_sequence ?> = editorStart_fck(
            fck_<?php echo $__Context->editor_sequence ?>
            ,document.getElementById("fckeditor_<?php echo $__Context->editor_sequence ?>")
            ,<?php echo $__Context->editor_sequence ?>
            ,"<?php echo $__Context->editor_content_key_name ?>"
            ,"<?php echo $__Context->editor_height ?>px"
            ,"<?php echo $__Context->editor_primary_key_name ?>"
            ,editor_path
            );
    }
    function getEditorExtension(editor_sequence){
        return document.getElementById('editorExtension_'+editor_sequence).innerHTML;
    };
//]]></script>
    <?php if($__Context->allow_fileupload){ ?>
        <!-- 첨부파일 영역 -->
        <!--#Meta:modules/editor/tpl/js/uploader.js--><?php $__tmp=array('modules/editor/tpl/js/uploader.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
        <!--#Meta:modules/editor/tpl/js/swfupload.js--><?php $__tmp=array('modules/editor/tpl/js/swfupload.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
        <script type="text/javascript">//<![CDATA[
            editorUploadInit(
                {
                    "editorSequence" : <?php echo $__Context->editor_sequence ?>,
                    "sessionName" : "<?php echo session_name() ?>",
                    "allowedFileSize" : "<?php echo $__Context->file_config->allowed_filesize ?>",
                    "allowedFileTypes" : "<?php echo $__Context->file_config->allowed_filetypes ?>",
                    "allowedFileTypesDescription" : "<?php echo $__Context->file_config->allowed_filetypes ?>",
                    "insertedFiles" : <?php echo (int)$__Context->files_count ?>,
                    "replaceButtonID" : "swfUploadButton<?php echo $__Context->editor_sequence ?>",
                    "fileListAreaID" : "uploaded_file_list_<?php echo $__Context->editor_sequence ?>",
                    "previewAreaID" : "preview_uploaded_<?php echo $__Context->editor_sequence ?>",
                    "uploaderStatusID" : "uploader_status_<?php echo $__Context->editor_sequence ?>"
                }
            );
        //]]></script>
        <!-- 파일 업로드 영역 -->
        <div id="fileUploader_<?php echo $__Context->editor_sequence ?>" class="fileUploader">
            <div class="preview" id="preview_uploaded_<?php echo $__Context->editor_sequence ?>"></div>
            <div class="fileListArea">
                <select id="uploaded_file_list_<?php echo $__Context->editor_sequence ?>" multiple="multiple" class="fileList" title="Attached File List"><option></option></select>
            </div>
            <div class="fileUploadControl">
                <span class="button" id="swfUploadButton<?php echo $__Context->editor_sequence ?>"><button type="button"><?php echo $__Context->lang->edit->upload_file ?></button></span>
                <span class="button"><button type="button" onclick="removeUploadedFile('<?php echo $__Context->editor_sequence ?>');return false;"><?php echo $__Context->lang->edit->delete_selected ?></button></span>
                <span class="button"><button type="button" onclick="insertUploadedFile('<?php echo $__Context->editor_sequence ?>');return false;"><?php echo $__Context->lang->edit->link_file ?></button></span>
            </div>
            <div class="file_attach_info" id="uploader_status_<?php echo $__Context->editor_sequence ?>"><?php echo $__Context->upload_status ?></div>
        </div>
    <?php } ?>
</div>
