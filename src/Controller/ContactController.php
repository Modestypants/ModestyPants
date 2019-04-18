<?php



namespace App\Controller;


use App\Form\FormcontactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;



class ContactController extends AbstractController

{
    /**

     * @Route("/contact", name="contact")

     * @param Request $request

     * @return RedirectResponse | Response

     */

    public function index(Request $request):Response

    {



    }

}