<?php
    function isCurrent($str) {
        $uri = Request::path();
        $uri = explode('/', $uri);
        // dd($uri);

        if (!isset($uri[1])) {
          $uri[1] = '';
        }

        if ($uri[0] == $str) {
            return 'active';
        } elseif($uri[1] == $str) {
            return 'active';
        }

        return '';
    }
?>