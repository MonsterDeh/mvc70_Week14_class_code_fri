<?php

namespace Core;

class View {
    private $viewPath = __DIR__ . "/../views/";

    public function show($path, array $data = []) 
    {
        foreach ($data as $key => $val) {
            $$key = $val;
        }

        ob_start();
        include $this->viewPath . "layouts/main.php";
        $layout = ob_get_clean();

        include $this->viewPath . $path . ".php";
        $content = ob_get_contents();
        ob_end_clean();


        echo str_replace('{{content}}', $content, $layout);
    }
}