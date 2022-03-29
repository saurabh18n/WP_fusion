<?php
/*
	This application lets the users send message on flowroute API from portal
	Written By
	Saurabh Singh <saurabh18n@gmail.com>
*/
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";
	require_once "resources/paging.php";

if (permission_exists('webphone_view')) {
	//access granted
} else {
	echo "access denied";
	exit;
}

$user_uuid = $_SESSION['user_uuid'];

//Getting user extension from db

$sql = "SELECT extension,password FROM v_extensions a INNER JOIN  v_extension_users b ON a.extension_uuid = b.extension_uuid
WHERE b.user_uuid =  :userid LIMIT 1";
$parameters['userid'] = $user_uuid;
$database = new database;
$number = $database->select($sql, $parameters, 'all');

// echo '<pre>';
// print_r($_SESSION['WebPhone']['Hostname']['text']);
// exit;

echo '<!doctype html><html lang="en"><head><meta charset="utf-8"/><link rel="icon" href="./favicon.ico"/><meta name="viewport" content="width=device-width,initial-scale=1"/><meta name="theme-color" content="#000000"/><meta name="description" content="WebPhone- Sip Client"/><link rel="manifest" href="./resources/manifest.json"/><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"/><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><title>WebPhone</title><link href="./resources/static/css/2.0a9ec390.chunk.css" rel="stylesheet"><link href="./resources/static/css/main.983a75b5.chunk.css" rel="stylesheet"></head><body style="height:100vh"><div id="root"></div>';
	echo '<input type="hidden" id="name" value="'.$_SESSION['username'].'">';
    echo '<input type="hidden" id="username" value="'.$number[0]['extension'].'">';
    echo '<input type="hidden" id="password" value="'.$number[0]['password'].'">';
    echo '<input type="hidden" id="server" value="'.$_SESSION['WebPhone']['Hostname']['text'].'">';
    echo '<input type="hidden" id="port" value="'.$_SESSION['WebPhone']['Port']['text'].'">`;';

echo '<script>!function(e){function r(r){for(var n,l,p=r[0],f=r[1],i=r[2],c=0,s=[];c<p.length;c++)l=p[c],Object.prototype.hasOwnProperty.call(o,l)&&o[l]&&s.push(o[l][0]),o[l]=0;for(n in f)Object.prototype.hasOwnProperty.call(f,n)&&(e[n]=f[n]);for(a&&a(r);s.length;)s.shift()();return u.push.apply(u,i||[]),t()}function t(){for(var e,r=0;r<u.length;r++){for(var t=u[r],n=!0,p=1;p<t.length;p++){var f=t[p];0!==o[f]&&(n=!1)}n&&(u.splice(r--,1),e=l(l.s=t[0]))}return e}var n={},o={1:0},u=[];function l(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,l),t.l=!0,t.exports}l.m=e,l.c=n,l.d=function(e,r,t){l.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,r){if(1&r&&(e=l(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(l.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)l.d(t,n,function(r){return e[r]}.bind(null,n));return t},l.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(r,"a",r),r},l.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},l.p="./resources/";var p=this.webpackJsonpwebphone=this.webpackJsonpwebphone||[],f=p.push.bind(p);p.push=r,p=p.slice();for(var i=0;i<p.length;i++)r(p[i]);var a=f;t()}([])</script><script src="./resources/static/js/2.0ed40652.chunk.js"></script><script src="./resources/static/js/main.f8d2d6f7.chunk.js"></script></body></html>';
?>
