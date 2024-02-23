<?php
class PluginChartChartjs_4_4_1{
  function __construct() {
    wfPlugin::includeonce('wf/yml');
  }
  public function widget_include(){
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    wfDocument::renderElement($element);
  }
  public function widget_chart($data){
    /**
     * data
     */
    $data = new PluginWfArray($data);
    /**
     * config
     */
    $config = $data->get('data/config');
    $config = json_encode($config);
    /**
     * 
     */
    $id = $data->get('data/data/id');
    $height = $data->get('data/data/height');
    if(!$height){
      $height = 400;
    }
    /**
     * element
     */
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($data->get('data/data'), 'canvas');
    $element->setByTag(array('style' => array('height' => $height."px")), 'container');
    $element->setByTag(array('chart' => "const ctx_$id = document.getElementById('$id');  new Chart(ctx_$id, $config)"), 'script');
    wfDocument::renderElement($element);
  }
  public function page_demo(){
    wfPlugin::enable('chart/chartjs_4_4_1');
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    wfDocument::renderElement($element);
  }
  public function page_chart_bar_interval(){
    wfPlugin::enable('chart/chartjs_4_4_1');
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    wfDocument::renderElement($element);
  }
  public function page_chart_bar_ajax(){
    wfPlugin::enable('chart/chartjs_4_4_1');
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    wfDocument::renderElement($element);
  }
  public function page_chart_bar_ajax_data(){
    $chart = new PluginWfYml(__DIR__.'/element/chart_bar_ajax.yml');
    $chart->set('data/data/config/data/datasets/0/data/0', (int)date('H'));
    $chart->set('data/data/config/data/datasets/0/data/1', (int)date('i'));
    $chart->set('data/data/config/data/datasets/0/data/2', (int)date('s'));
    exit(json_encode($chart->get('data/data/config')));
  }
}