<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\VatCalculation;
use App\Form\Type\VatCalculatorFormType;

class VatCalculatorController extends AbstractController
{
    private $calculation;
    private $session;

    public function __construct(private RequestStack $requestStack) { 
       
        $this->calculation = new VatCalculation();
        $this->session = $this->requestStack->getSession();
    }

    #[Route('/', name: 'vat_calculator_form')]
    public function submitForm(Request $request, RequestStack $requestStack): Response
    {
        $form = $this->createForm(VatCalculatorFormType::class, $this->calculation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {

            $history = $this->session->get('history');

            $history[] =  [
                'rate' => $this->calculation->getRate(), 
                'amount' => $this->calculation->getAmount(),
                'inc_vat' => $this->calculation->getAmountIncludedVat(),
                'exl_vat' => $this->calculation->getAmountExcludingVat(),
                'vat' => $this->calculation->getVatAmount()
            ];
    
            $this->session->set('history', $history);
        }

        return $this->render('vat_calculator/form.html.twig', [
            'history' => $this->session->get('history'),
            'form' => $form,
        ]);
    }

    #[Route('/export', name: 'export_as_csv')]
    public function exportHistory(): Response {     

        $output = '';
        foreach ($this->session->get('history') as $line) {
            $output .= implode(',', $line) . PHP_EOL;
        }

        $response = new Response($output);
        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }

    #[Route('/clear', name: 'clear_history')]
    public function clear(): RedirectResponse {     

       $this->session->set('history', []);
       return $this->redirectToRoute('vat_calculator_form');
    }
}