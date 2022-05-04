<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('admin', 'Home::index_admin',['filter' => 'auth']);
$routes->get('weather', 'Home::apiWeather',['filter' => 'auth']);


// NEWS
$routes->get('news','News::index',['filter' => 'auth']);
$routes->get('add-news','News::add_news_page',['filter' => 'auth']);
$routes->post('insert-news','News::insertProcess',['filter' => 'auth']);
$routes->get('edit-news/(:any)','News::edit_news_page/$1',['filter' => 'auth']);
$routes->post('update-news/(:any)','News::editNews/$1',['filter' => 'auth']);
$routes->get('delete-news/(:any)','News::deleteNews/$1',['filter' => 'auth']);

// KATEGORI
$routes->get('kategory','Kategori::index',['filter' => 'auth']);
$routes->get('add-kategory','Kategori::add_kategori_page',['filter' => 'auth']);
$routes->post('insert-category','Kategori::insertProses',['filter' => 'auth']);
$routes->get('delete-category/(:any)','Kategori::deleteCategory/$1',['filter' => 'auth']);
$routes->get('edit-category/(:any)','Kategori::edit_kategori_page/$1',['filter' => 'auth']);
$routes->post('update-category/(:any)','Kategori::updateProses/$1',['filter' => 'auth']);

// PROFILE
$routes->get('visimisi','Profile::visimisi_page',['filter' => 'auth']);
// $routes->get('visimisi/(:any)','Profile::visimisi_page/$id');
$routes->get('logo','Profile::logo_page',['filter' => 'auth']);
$routes->get('datapers','Profile::datapers_page',['filter' => 'auth']);
$routes->get('mediasosial','Profile::mediasosial_page',['filter' => 'auth']);
$routes->post('update-vm/(:any)','Profile::editVisimisi/$1',['filter' => 'auth']);
$routes->post('update-data/(:any)','Profile::editData/$1',['filter' => 'auth']);
$routes->post('update-socmed/(:any)','Profile::editSocmed/$1',['filter' => 'auth']);
$routes->post('update-logo/(:any)','Profile::editLogo/$1',['filter' => 'auth']);

// ANGGOTA
$routes->get('anggota','Anggota::index',['filter' => 'auth']);
$routes->get('add-anggota','Anggota::anggota_add_page',['filter' => 'auth']);
$routes->get('edit-anggota/(:any)','Anggota::anggota_edit_page/$1',['filter' => 'auth']);
$routes->post('insert-anggota','Anggota::insertProcess',['filter' => 'auth']);
$routes->post('update-anggota/(:any)','Anggota::editAnggota/$1',['filter' => 'auth']);
$routes->get('delete-anggota/(:any)','Anggota::deleteAnggota/$1',['filter' => 'auth']);

// JABATAN ANGGOTA
$routes->get('jabatan','Jabatan::index',['filter' => 'auth']);
$routes->get('add-jabatan','Jabatan::jabatan_add_page',['filter' => 'auth']);
$routes->post('insert-jabatan','Jabatan::insertProcess',['filter' => 'auth']);
$routes->get('delete-jabatan/(:any)','Jabatan::deleteJabatan/$1',['filter' => 'auth']);
$routes->get('edit-jabatan/(:any)','Jabatan::edit_jabatan_page/$1',['filter' => 'auth']);
$routes->post('update-jabatan/(:any)','Jabatan::editJabatan/$1',['filter' => 'auth']);

// PENULIS
$routes->get('penulis','Penulis::index',['filter' => 'auth']);
$routes->get('add-penulis','Penulis::penulis_add_page',['filter' => 'auth']);
$routes->post('insert-penulis','Penulis::insertProses',['filter' => 'auth']);
$routes->get('delete-penulis/(:any)','Penulis::deletePenulis/$1',['filter' => 'auth']);
$routes->get('edit-penulis/(:any)','Penulis::edit_penulis_page/$1',['filter' => 'auth']);
$routes->post('update-penulis/(:any)','Penulis::updateProses/$1',['filter' => 'auth']);

// LOGIN LOGOUT
$routes->post('proses_login','Login::prosesLogin');
$routes->get('login','Login::index');
$routes->get('proses_logout','Login::logout');


// FRONTEND PERS
$routes->get('world-news','feNews::worldNews');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * 
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
