

const getOptionChart1 = () => {
  return {
    xAxis: {
      type: 'category',
      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    yAxis: {
      type: 'value'
    },
    series: [
      {
        data: [150, 230, 224, 218, 135, 147, 260],
        type: 'line'
      }
    ]
  };
};


const getOptionChart2 = () => {
  return {
    tooltip: {
      trigger: 'item'
    },
    legend: {
      top: '5%',
      left: 'center'
    },
    series: [
      {
        name: 'Cantidad de Equipos',
        type: 'pie',
        radius: ['40%', '70%'],
        avoidLabelOverlap: false,
        padAngle: 5,
        itemStyle: {
          borderRadius: 10
        },
        label: {
          show: false,
          position: 'center'
        },
        emphasis: {
          label: {
            show: true,
            fontSize: 40,
            fontWeight: 'bold'
          }
        },
        labelLine: {
          show: false
        },
        data: [
          { value: 1048, name: 'Polar' },
          { value: 735, name: 'Provincial' },
          { value: 580, name: 'Seguros Venezuela' },
          { value: 484, name: 'Bigott' },
          { value: 300, name: 'CAF' }
        ]
      }
    ]
  };
};


const initCharts = () => {
  const chart1 = echarts.init(document.getElementById("chart1"));
  const chart2 = echarts.init(document.getElementById("chart2"));

  chart1.setOption(getOptionChart1());
  chart2.setOption(getOptionChart2());

};

window.addEventListener("load", () => {
  initCharts();

});