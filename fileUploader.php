<?php
class  FileUploader{
    private static $target_directory = "/uploads";
    private static $size_limit = 5000;
    private $uploadOk = false;
    private $file_original_name;
    private $file_type;
    private $file_size;
    private $final_file_name;

    public function setOriginalName(){
        $this->file_original_name = $name;
    }

    public function getOriginalName(){
        $this->file_original_name;
    }

    public function setFileType($type){
        $this->file_type = $type;
    }

    public function getFileType($type){
        $this->file_type;
    }

    public function setFileSize(){
        $this->file_size = $size;
    }

    public function getFileSize(){
        $this->file_size;
    }

    public function setFinalFileName($final_file_name){
        $this->final_file_name = $final_name;
    }

    public function getFinalFileName($final_file_name){
        $this->final_file_name;
    }

    public function uploadFile(){}
    public function fileAlreadyExists(){}
    public function saveFilePathto(){}
    public function moveFile(){}
    public function fileTypeIsCorrect(){}
    public function fileSizeIsCorrect(){}
    public function fileWasSelected(){}
}