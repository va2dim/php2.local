<?php

namespace App;


class Config
{
    use Singletone;
    public $data;

    protected function __construct() {
        $file = __DIR__ . '/../config.txt';
        //echo $file;
        if (file_exists($file)) {
            //$this->data = preg_split ('/[=;]/',file_get_contents($file));
            //var_dump($this->data['dbname']['host']);
            //$this->data
            //$setting = preg_split ('/^[*$]/',preg_quote(file_get_contents($file)));
            $matches = preg_split ('/\;/',(file_get_contents($file)));

            //$matches = preg_split ('/\[([^\s]+)\]/',(file_get_contents($file)));
            //$matches = preg_split ('/(?<=\[)[^\s]+(?=\])/',(file_get_contents($file)));
            //preg_match('/(?P<settingBlock>\[.+\])/', file_get_contents($file), $matches);
            //var_dump(file_get_contents($file));
            //preg_match('/[\[.+\]/]', file_get_contents($file), $matches);
            //preg_match('/\=/', file_get_contents($file), $matches);
//            var_dump($matches);

            //$setting = preg_match ('/(^\[.*\])/',(file_get_contents($file)));
            //$setting = trim (preg_split ('/[=;\n]/',file_get_contents($file)), ';');

            //var_dump($setting);
            //echo "##\n";
            //print_r(array_merge($this->data));
            //return $this->data;
        }

        foreach ($matches as $line) {
            //$l = preg_split('/=/', $line);
            $l = explode('=', $line);
            //var_dump($l);
            //echo trim($l[0]).'='. trim(next($l))."\n";

            if (!empty($l[0])) {
                $this->data[trim($l[0])] = trim(next($l));
            }
        }
        //var_dump($this->data);
        //echo $this->data['dbname']['host'];
        //var_dump(array_merge($this->data));
        //echo $this->data['dbname']['host'];
    }

}