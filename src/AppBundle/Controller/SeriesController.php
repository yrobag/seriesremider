<?php

namespace AppBundle\Controller;


use AppBundle\Service\ReminderService;
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
     * @param ReminderService $reminderService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($id, ReminderService $reminderService)
    {
        $url = 'http://api.tvmaze.com/shows/' . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $series = json_decode(curl_exec($ch));
        $options = $reminderService->getOptionsCodes();

        if($series->id){
            return $this->render('seriesreminder/series/show.html.twig', [
                'series' => $series,
                'options' =>$options,
            ]);
        }
        var_dump($series);die;

    }


    /**
     * @Route("/save")
     * @param ReminderService $reminderService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function saveAction(Request $request, ReminderService $reminderService)
    {
        var_dump($_POST);die;
    }



}
