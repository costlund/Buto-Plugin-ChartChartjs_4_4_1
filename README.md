# Buto-Plugin-ChartChartjs_4_4_1

<ul>
<li><a href="https://www.chartjs.org">https://www.chartjs.org</a></li>
<li><a href="https://github.com/chartjs/awesome#integrations">https://github.com/chartjs/awesome#integrations</a></li>
</ul>

<a name="key_0"></a>

## Settings



<a name="key_1"></a>

## Usage



<a name="key_1_0"></a>

### Push

<pre><code>var graph = Chart.getChart('my_chart_id')
graph.data.labels.push('New data')
graph.data.datasets[0].data.push(10);      
graph.update();</code></pre>

<a name="key_1_1"></a>

### Update

<pre><code>var graph = Chart.getChart('my_chart_id')
graph.data.datasets[0].data[0] = graph.data.datasets[0].data[0]+100;
graph.data.labels[0] = 'Update ('+graph.data.datasets[0].data[0]+')';
graph.update();</code></pre>

<a name="key_2"></a>

## Pages



<a name="key_2_0"></a>

### page_demo



<a name="key_2_1"></a>

### page_chart_bar_interval



<a name="key_3"></a>

## Widgets



<a name="key_3_0"></a>

### widget_chart

<p>Display a chart.</p>
<pre><code>type: widget
data:
  plugin: chart/chartjs_4_4_1
  method: chart
  data:</code></pre>
<p>Se example files /element/chart_*.</p>
<pre><code>    data:
      id: my_chart_id
      height: 300 (optional, default 400)
    config:
      type: bar
      data:
        datasets:
          -
            label: 'My lable'
            data:
              - 
                "x": '2021-11-01 00:00:00'
                "y": 50
              - 
                "x": '2021-11-03'
                "y": 60
      options:
        responsive: true
        maintainAspectRatio: false
        scales:
          x:
            type: 'time'
            time:
              unit: day
          "y": {}</code></pre>

<a name="key_3_1"></a>

### widget_include

<p>Include in html head section.</p>
<pre><code>type: widget
data:
  plugin: chart/chartjs_4_4_1
  method: include</code></pre>

<a name="key_4"></a>

## Event



<a name="key_5"></a>

## Construct



<a name="key_5_0"></a>

### __construct



<a name="key_6"></a>

## Methods



