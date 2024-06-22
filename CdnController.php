<?php
//namespace App\Controllers\CDN;
//use App\Controllers\BaseController;

class CdnController extends BaseController{
    public function cdn() {
        $uri_string = uri_string();
        if(strlen($uri_string) > 0){
            $file_path = ROOTPATH . "public/site-assets/{$uri_string}";
            if (file_exists($file_path)) {
                $file = new \CodeIgniter\Files\File($file_path);
                $content = $file->openFile('r');
                $mime_type = $file->getMimeType();
                return $this->response->setContentType($mime_type)->setBody(file_get_contents($file_path));
            } else {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('File not found: ' . esc($uri_string));
            }
        }else{
            return $this->response->setStatusCode(400);
        }
    }
}
?>
