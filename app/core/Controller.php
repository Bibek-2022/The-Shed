<?php
    class Controller {
        protected function loadModel($model){
            if (file_exists(APP_ROOT.'models/'.$model.'.php')){
                require_once APP_ROOT.'models/'.$model.'.php';
                return new $model();
            }

            return null;
        }

        protected function loadView($view, $data = []){
            if (file_exists(APP_ROOT.'views/'.$view)){
                require_once APP_ROOT.'views/'.$view;
            }

            return null;
        }

        protected function upload($attachments, $record_id, $created_by){
            $attachment = $this->loadModel('AttachmentModel');
            $fileCount = count($attachments['files']['name']);

            for( $i=0 ; $i < $fileCount ; $i++ ) {
                // todo -- do sec checks here on each file before uploading anything
                
                //Get the temp file path
                $tempPath = $attachments['files']['tmp_name'][$i];

                // Do we have a temporary path for the current file?
                if ($tempPath != ""){
                    // Setup the new file path, replace whitespace with _
                    $newPath = "files/".str_replace(' ','_',$attachments['files']['name'][$i]);
                    // Upload the file
                    if(move_uploaded_file($tempPath, $newPath)) {
                        $attachment->catalogueAttachment($record_id, $attachments['files']['name'][$i],$newPath,$created_by);

                        // todo: indicate success flag
                    }
                }
            }
            // todo: return status
        }
    }
?>