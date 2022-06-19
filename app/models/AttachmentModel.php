<?php
    class AttachmentModel extends Database {
        private $dbConnection;

        public $attachment_id;
        public $record_attached_to_id; // have this from controller
        public $file_name;
        public $display_location;
        public $attachment_url;
        public $created_at;
        public $created_by; // have this from controller
        public $flag_archive;

                                //catalogueAttachment($record_id, $attachments['files']['name'][$i], 
                                            //'display location', $newPath, $created_by);

        public function getAttachmentsBySQL($sql){
            $matchingAttachments = null;

            $this->dbConnection = $this->getConnection();
            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            if ($result && $result->num_rows > 0){
                $matchingAttachments = [];

                while($row = $result->fetch_assoc()) {
                    $attachment = new AttachmentModel();

                    $attachment->attachment_id = $row['attachment_id'];
                    $attachment->record_attached_to_id = $row['record_attached_to_id'];
                    $attachment->file_name = $row['file_name'];
                    $attachment->display_location = $row['display_location'];
                    $attachment->attachment_url = $row['attachment_url'];
                    $attachment->created_at = $row['created_at'];
                    $attachment->created_by = $row['created_by'];
                    $attachment->flag_archive = $row['flag_archive'];

                    array_push($matchingAttachments, $attachment);
                }

            }

            return $matchingAttachments;
        }

        public function catalogueAttachment($record_id, $file_name, $path, $created_by){
            $this->dbConnection = $this->getConnection();
            $display_location = $this->getDisplayLocation($record_id);

            $sql = "INSERT INTO the_shed.attachments (
                record_attached_to_id,
                file_name,
                display_location,
                attachment_url,
                created_by,
                flag_archive)
                VALUES (
                    '$record_id',
                    '$file_name',
                    '$display_location',
                    '$path',
                    '$created_by',
                    '0'
                )";

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();
            
            return $result;
        }

        public function archiveAttachment($attachment){
            //todo
        }

        private function getDisplayLocation($record_id){
            $base = round($record_id,-6);
            $displayName = null;

            $result = $this->dbConnection->query("SELECT display_name FROM the_shed.table_bases
                                                  WHERE base = '$base'");

            if($row = $result->fetch_assoc())
                $displayName = $row['display_name'];

            return $displayName;
        }
    }
?>