<?php

namespace Drupal\bubble_sort_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class BubbleSortModuleController extends ControllerBase {
  
    public function index() {

        return [
            '#theme' => 'bubble_sort_module_page_theme',
//            '#from' => $from,
//            '#to' => $to,
        ];
    }
    
    public function reset() {
      
        $this->setRandomNumberArray(null);

        $build = [
            '#type' => 'markup',
            '#markup' => $this->t("reset"),
        ];
  
        return new Response(render($build));
    }

    public function initializeArray() {
  
        $request = \Drupal::request()->request;
        $rangeMin = $request->get('range-min');
        $rangeMax = $request->get('range-max');
        $maxNumber = $request->get('max-number');
  
        $randomArray = $this->randomNumberArray($rangeMin, $rangeMax, $maxNumber);
        $markup = $this->getMarkUp($randomArray);
        $this->setRandomNumberArray($randomArray);

        $build = [
            '#type' => 'markup',
            '#markup' => $this->t($markup),
        ];
  
        return new Response(render($build));
    }

    public function displaySorting() {
  
        $randomArray = $this->getRandomNumberArray();
        $markup = $this->getProgressBar($randomArray);
  
        $build = [
              '#type' => 'markup',
              '#markup' => $this->t($markup),
        ];
    
        return new Response(render($build));
    }

    public function sortingAlgorithm() {
  
        $randomArray = $this->getRandomNumberArray();
        $randomArray = $this->bubbleSort($randomArray);
        $randomArrayValues = $this->bubbleSortValues($randomArray);

        $this->setRandomNumberArray($randomArray);
        $markup = $this->getProgressBar($randomArray, $randomArrayValues);
  
        $build = [
              '#type' => 'markup',
              '#markup' => $this->t($markup),
        ];
    
        return new Response(render($build));
    }
  
    function bubbleSort($arr) {
      
        $size = count($arr) - 1;
        
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                
                if ($arr[$k] > $arr[$j]) {
                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                    return $arr;
                }
            }
        }
      
        return $arr;
    }
  
    function bubbleSortValues($arr) {
      
        $size = count($arr) - 1;
        
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                
                if ($arr[$k] > $arr[$j]) {
                    return [$arr[$k], $arr[$j]];
                }
            }
        }
        
        return;
    }

    private function randomNumberArray($rangeMin, $rangeMax, $maxNumber) {
        
        $rangeMin = !empty($rangeMin) ? $rangeMin : 0;
        $rangeMax = !empty($rangeMax) ? $rangeMax : 100;
        $maxNumber = !empty($maxNumber) ? $maxNumber : 10;
      
        $random = range($rangeMin, $rangeMax);
        shuffle($random);
        return array_slice($random , 0, $maxNumber);
    }

    private function getMarkUp($randomArray) {
        $markup = '';
        
        foreach ($randomArray as $key => $value) {
            $markup .= '<li class="list-group-item"><span class="badge">' . $key . '</span> ' . $value . ' </li>';
        }
        
        return $markup;
    }

    private function getProgressBar($randomArray, $randomArrayValues = []) {
        $markup = '';
        
        foreach ($randomArray as $key => $value) {
          
            $success = in_array($value, $randomArrayValues) ? 'progress-bar-success' : '';
          
            $markup .= '<div class="progress">
                        <div
                            class="progress-bar ' . $success . '"
                            role="progressbar"
                            aria-valuenow="' . $value . '"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width:' . $value . '%">
                        <span class=""><span class="badge">' . $key . '</span>  [ ' . $value . ' ]</span>
                        </div>
                        </div>';
        }
        
        return $markup;
    }

    private function setRandomNumberArray($data) {
        $tempstore = \Drupal::service('user.private_tempstore')->get('bubble_sort_module');
        $tempstore->set('random_number_array', $data);
    }

    private function getRandomNumberArray() {
        $tempstore = \Drupal::service('user.private_tempstore')->get('bubble_sort_module');
        return $tempstore->get('random_number_array');
    }

}
