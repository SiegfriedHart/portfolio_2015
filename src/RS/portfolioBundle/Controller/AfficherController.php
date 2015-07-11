<?php

// src/RS/portfolioBundle/Controller/afficherController.php => Tout les controlleur sont dans /controller du Bundle et NomController

namespace RS\portfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AfficherController extends Controller
{
   
    public function indexAction()
    {
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:index.html.twig', array(
      // le contrôleur passe les variables nécessaires au template !
      'test' => 'valtest'
                
        ));
        }
    
    public function contactAction()
    {
        //$contentcontact = $this->get('templating')->render('RSportfolioBundle:Afficher:contact.html.twig');
        //return new Response($contentcontact);
        
        //EQUIVAUT A LA SUITE EN UNE SEULE LIGNE AVEC RENDERRESPONSE
        
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:contact.html.twig', array());
    }
    
    public function portfolioviewAction($id)
    {
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:portfolio.html.twig', array('id' => $id));
    }
    public function portfolioAction()
    {
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:portfolio.html.twig');
    }
    public function menuAction()
    {
        $menu = array (
        array('titles' => 'Profil', 'class' => 'first', 'path' => 'profil'),
        array('titles' => 'Portfolio', 'class' => 'activ', 'path' => 'portfoliohome'),
        array('titles' => 'Contact', 'class' => 'last', 'path' => 'contact')    
        );
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:menu.html.twig', array('menu' => $menu));
    }
    
    public function menufooterAction()
    {
        $menufooter = array (
        array('titles' => 'Profil', 'class' => '', 'path' => 'profil'),
        array('titles' => 'Portfolio', 'class' => '', 'path' => 'portfoliohome'),
        array('titles' => 'Contact', 'class' => '', 'path' => 'contact'), 
        array('titles' => 'Mentions Légales', 'class' => '', 'path' => 'mentions-legales')
        );
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:menufooter.html.twig', array('menufooter' => $menufooter));
    }
    public function mentionlegalesAction()
    {
    
        return $this->get('templating')->renderResponse('RSportfolioBundle:Afficher:mentionlegales.html.twig', array ());
    }
}
  