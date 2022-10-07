window.Apex = {
  dataLabels: {
    enabled: false
  }
};

var spark1 = {
  chart: {
    id: 'sparkline1',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'purple',
    data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  title: {
    style: {
      fontSize: '26px'
    }
  },
  colors: ['#734CEA']
}

var spark2 = {
  chart: {
    id: 'sparkline2',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'green',
    data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  title: {
    style: {
      fontSize: '26px'
    }
  },
  colors: ['#34bfa3']
}

var spark3 = {
  chart: {
    id: 'sparkline3',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'red',
    data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  colors: ['#f4516c'],
  title: {
    style: {
      fontSize: '26px'
    }
  },
  xaxis: {
    crosshairs: {
      width: 1
    },
  }
}

var spark4 = {
  chart: {
    id: 'sparkline4',
    type: 'line',
    height: 80,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'teal',
    data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  colors: ['#4eaafa'],
  title: {
    style: {
      fontSize: '26px'
    }
  },
  xaxis: {
    crosshairs: {
      width: 1
    },
  }
}

new ApexCharts(document.querySelector("#spark1"), spark1).render();
new ApexCharts(document.querySelector("#spark2"), spark2).render();
new ApexCharts(document.querySelector("#spark3"), spark3).render();
new ApexCharts(document.querySelector("#spark4"), spark4).render();

var optionsBar = {
  chart: {
    type: 'bar',
    height: 350,
    width: '100%',
    stacked: true,
    foreColor: '#999'
  },
  plotOptions: {
    bar: {
      dataLabels: {
        enabled: false
      },
      columnWidth: '75%',
      endingShape: 'rounded'
    }
  },
  colors: ["#00C5A4", '#F3F2FC'],
  series: [{
    name: "Sessions",
    data: [20, 16, 24, 28, 26, 22, 15, 5, 14, 16, 22, 29, 24, 19, 15, 10, 11, 15, 19, 23],
  }, {
    name: "Views",
    data: [20, 16, 24, 28, 26, 22, 15, 5, 14, 16, 22, 29, 24, 19, 15, 10, 11, 15, 19, 23],
  }],
  labels: [15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 1, 2, 3, 4],
  xaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      show: false
    },
    labels: {
      show: false,
      style: {
        fontSize: '14px'
      }
    },
  },
  grid: {
    xaxis: {
      lines: {
        show: false
      },
    },
    yaxis: {
      lines: {
        show: false
      },
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    labels: {
      show: false
    },
  },
  legend: {
    floating: true,
    position: 'top',
    horizontalAlign: 'right',
    offsetY: -36
  },
  tooltip: {
    shared: true
  }

}

var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
chartBar.render();



var optionsDonutTop = {
  chart: {
    height: 250,
    type: 'donut',
  },
  plotOptions: {
    pie: {
      size: 76,
      donut: {
        size: '72%',
      },
      dataLabels: {
        enabled: false
      }
    }
  },
  colors: ['#775DD0', '#00C8E1', '#FFB900'],
  series: [2, 7, 5],
  labels: ['Social Media', 'Blog', 'External'],
  legend: {
    show: false
  }
}

var chartDonut2 = new ApexCharts(document.querySelector('#donutTop'), optionsDonutTop);
chartDonut2.render().then(function () {
  // window.setInterval(function () {
  //   chartDonut2.updateSeries([getRandom(), getRandom(), getRandom()])
  // }, 800)
});




function generateData(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

    series.push([x, y, z]);
    baseval += 86400000;
    i++;
  }
  return series;
}

function getRandom() {
  return Math.floor(Math.random() * (80 - 1 + 1)) + 1;
}


var options = {
  chart: {
    height: 360,
    type: 'bubble',
    sparkline: {
      enabled: true
    },
  },
  plotOptions: {
    bubble: {
      dataLabels: {
        enabled: false
      }
    }
  },
  colors: ["#734CEA", "#34bfa3", "#f4516c", "#00c5dc"],
  series: [{
      name: 'Facebook',
      data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
        min: 10,
        max: 60
      })
    },
    {
      name: 'Twitter',
      data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
        min: 10,
        max: 60
      })
    },
    {
      name: 'Youtube',
      data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
        min: 10,
        max: 60
      })
    },
    {
      name: 'LinkedIn',
      data: generateData(new Date('11 Feb 2017 GMT').getTime(), 20, {
        min: 10,
        max: 60
      })
    }
  ],
  fill: {
    opacity: 0.8,
    gradient: {
      enabled: false
    }
  },
  xaxis: {
    tickAmount: 12,
    type: 'category',
    min: -50,
    max: 850
  },
  yaxis: {
    max: 70
  }
}

var chart = new ApexCharts(
  document.querySelector("#bubbleChart"),
  options
);

// a small hack to extend height in website sample dashboard
chart.render().then(function () {
  var ifr = document.querySelector("#wrappe");
});