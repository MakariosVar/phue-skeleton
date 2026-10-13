<?php

declare(strict_types=1);

namespace App\Controllers;

use Phue\Core\Request;
use Phue\Core\Response;
use Phue\Core\Routing\Attribute\Route;
use function Phue\Core\t;

/**
 * WebController handles primary HTTP routes and orchestrates page rendering.
 *
 * @package App\Controllers
 */
#[Route('/')]
class WebController extends Controller
{
    #[Route('/', methods: ['GET'])]
    public function index(): Response
    {
        return $this->ui->render('Pages/Home');
    }
}