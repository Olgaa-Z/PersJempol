<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['url', 'file', 'form'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        //load session library
		$this->x = \Config\Services::session();
		$this->uri = service("uri");
        #ini buat load library validation
		$this->validation =  \Config\Services::validation();
        $this->db = \Config\Database::connect();

        $this->admin = model('\App\Models\AdminModel');
        $this->newsmodel = model('App\Models\NewsModel');
        $this->anggotamodel = model('App\Models\AnggotaModel');
        $this->jabatanmodel = model('App\Models\JabatanModel');
        $this->kategorimodel = model('App\Models\KategoriModel');
        $this->penulismodel = model('App\Models\PenulisModel');
        $this->profilmodel = model('App\Models\ProfileModel');
    }
}
