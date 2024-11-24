<?php 

class App {
    protected $controller = "Home",
              $method = "index",
              $params = [];
    public function __construct() {
        $url = $this->parseUrl(); // misal = home/index = menangkap string sesudah /public/

        // Controllers
        if(isset($url[0])) {
            if(file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once("../app/controllers/" . $this->controller . '.php');   
        $this->controller = new $this->controller; // mengubah controller dengan yang baru
        
        // Method  / apakah method ini ada di controller?
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            // jika false maka menghasilkan index
        }

        // Params // Mengambil sisa array / $url
        if(!empty($url)) {
            $this->params = array_values($url);
        }

         // Jalankan Controller dan method dan params jika ad
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseUrl () {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/'); // menghapus / diakhir url
            $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan karakter2 aneh di url
            $url = explode('/',$url);
            return $url;
        }
    }
}