<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = 'welcome';
$route['translate_uri_dashes'] = TRUE;

//controller admin
$route['opok'] = 'admin';
//controller admin
$route['M3GlVDtGPhSIywdOb4Do'] = 'Home';

$route['disparoki'] = 'auth';
//controller berita
$route['Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-apOCTu0m6DNT3G1w5bFq'] = 'Berita';
//controller detail berita
$route['br1(:num)5t/detail-pengumuman-KhmmqOdAo8ke86DOVcla'] = 'Berita/detail/$1';
//controller cari berita
$route['cari-pengumuman-pgqdrf7hmhysjdm4eos3/(:any)'] = 'Berita/cari/$2';
//controller galeri
$route['Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-8Z6iygjfhfgBvQFWt1OQ'] = 'Galeri';
//controller kontak
$route['Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-iwAuR0baOjR4tc2t9wfh'] = 'Kontak';
//controller profil
$route['Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-OcXpeRqt1DVZVG6yibaH'] = 'Profil';
//controller admin
$route['Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-HwsrQY8KpqXhVviVjxyZQ59Pns4JvXQHXIsvP1y0LNhihpufwwKUa06Ccdi7my91i3dBioODlQfPKV4vng5p63j3OhFX'] = 'Admin';
