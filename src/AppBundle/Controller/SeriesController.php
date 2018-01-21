<?php

namespace AppBundle\Controller;


use AppBundle\Service\ReminderService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
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
        $notificationType = $reminderService->getReminderOptionForUser($this->getUser(), $id);


        if($series->id){
            return $this->render('seriesreminder/series/show.html.twig', [
                'series'            =>  $series,
                'options'           =>  $options,
                'notification_type' =>  $notificationType,
            ]);
        }

        return $this->forward('homepage');

    }


    /**
     * @Route("/save")
     * @param ReminderService $reminderService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function saveAction(Request $request, ReminderService $reminderService)
    {
        if($this->getUser()){
            $data = [
                'userId'    => $this->getUser()->getId(),
                'seriesId'  => (int) $request->get('id'),
                'code'      => (int) $request->get('code'),
            ];
            try{
                $reminderService->createReminder($data);
            }catch (Exception $e){
                return $this->json([
                    'status'    => 400,
                    'message'   => 'Something went wrong while saving to database!',
                ]);
            }

            return $this->json([
                'status'    => 200,
                'message'   => 'Your reminders list was updated successfully!',
            ]);
        }
        return $this->json([
            'status'    => 300,
        ]);
    }



}
