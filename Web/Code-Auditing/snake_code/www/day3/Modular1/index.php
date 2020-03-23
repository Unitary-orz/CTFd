<?php
include "../flag.php";
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
show_source(__FILE__);
class LanguageManager {
    public function loadLanguage() {
        $lang = $this->getBrowserLanguage();
        $sanitizedLang = $this->sanitizeLanguage($lang);
        require_once("$sanitizedLang");
    }

    private function getBrowserLanguage() {
        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?: 'en';
        return $lang;
    }

    private function sanitizeLanguage($language) {
        return str_replace('../', '', $language);
    }
}

(new LanguageManager())->loadLanguage();

