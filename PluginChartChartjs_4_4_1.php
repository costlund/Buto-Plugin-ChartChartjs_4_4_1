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
    /**
     * element
     */
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($data->get('data/data'), 'canvas');
    $element->setByTag(array('style' => array('height' => '300px')), 'container');
    $element->setByTag(array('chart' => "console.log($config);  const ctx_$id = document.getElementById('$id');  new Chart(ctx_$id, $config)"), 'script');
    wfDocument::renderElement($element);
  }
  public function page_demo(){
    /**
     * 
     */
    wfPlugin::enable('chart/chartjs_4_4_1');
    /**
     * 
     */
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    wfDocument::renderElement($element);
  }
}