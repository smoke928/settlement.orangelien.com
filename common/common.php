<?php

function debug($var, $label=null, $silent_return=false) {
    $output = '<pre>';
    if ($label) {
        $output .= '<strong>'.$label.'</strong> : ';
    }
    $output .= print_r($var, true);
    $output .= '</pre>';
    if ($silent_return) {
        return $output;
    } else {
        echo $output;
    }
}

function ddebug($key, $value=null, $more1=null, $more2=null) {
    if (is_array($value) || is_object($value)) $value = print_r($value, true);
    $data['key'] = $key;
    if ($value) $data['value'] = $value;
    if ($more1) $data['more1'] = $more1;
    if ($more2) $data['more2'] = $more2;
    Yii::$app->db->createCommand()->insert('testlog', $data)->execute();
}

function getClassAndFunction(\Exception $e) {
    $trace = $e->getTrace();
    $result = 'Class: "';
    if($trace[0]['class'] != '') {
        $result .= $trace[0]['class'];
        $result .= '->';
    }
    $result .= $trace[0]['function'];
    $result .= '();<br />';
    return $result;
}

function makePrettyValue(\Exception $e) {
    $result = 'Exception Code: ';
    $result .= $e->getCode();
    $result .= ' Line: ';
    $result .= $e->getLine();
    $result .= ' Message: ';
    $result .= $e->getMessage();
    return $result;
}

function autoVersion($webPath) {
    $fullPath = getcwd().'/'.$webPath;
    if (!file_exists($fullPath)) {
        return $webPath;
    }
    return $webPath.'?v='.filemtime($fullPath);
}

function requestIsFromHere() {
    $refererURLParts = parse_url($_SERVER['HTTP_REFERER']);
    return $refererURLParts['host'] == $_SERVER['SERVER_NAME'];
}

if (!getenv('APP_ENVIRONMENT')) {
    throw new Exception('+++ APP_ENVIRONMENT not defined on server as environment variable +++');
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$envMap['development'] = 'dev';
$envMap['staging'] = 'test';
$envMap['production'] = 'prod';
define('YII_ENV', $envMap[getenv('APP_ENVIRONMENT')]);

$envDebugMode['dev'] = true;
$envDebugMode['test'] = true;
$envDebugMode['prod'] = false;
define('YII_DEBUG', $envDebugMode[YII_ENV]);


foreach (glob(__DIR__.'/../vialok.security.lib/classes/*.php') as $filename) {
    include_once $filename;
}