<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



/**
 * Game controller.
 *
 * @Route("series")
 */
class SeriesController extends Controller
{

    /**
     * @Route("/{id}", name="show_series", requirements={"id"="\d+"})
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($id)
    {
        $url = 'http://api.tvmaze.com/shows/' . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $series = json_decode(curl_exec($ch));

        if($series->id){
            return $this->render('seriesreminder/series/show.html.twig', [
                'series' => $series
            ]);
        }
        var_dump($series);die;

    }



}
