<?php

namespace adrien\PlateformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{

	public function indexAction()
	{
		return $this->render('adrienPlateformBundle:Advert:index.html.twig', array("nom" => "Adrien"));
	}
	public function adrien_cvAction()
	{
		return $this->render('adrienPlateformBundle:Advert:adrien_cv.html.twig');
	}

	public function viewAction($id)
	{

		return new Response("Affichage de l'annonce d'id : ".$id);
	}

  // ... et la méthode indexAction que nous avons déjà créée
    // On récupère tous les paramètres en arguments de la méthode
	public function viewSlugAction($slug, $year, $_format)
	{
		return new Response(
			"On pourrait afficher l'annonce correspondant au
			slug '".$slug."', créée en ".$year." et au format ".$_format."."
			);
	}


}