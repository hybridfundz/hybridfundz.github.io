//Team chart
    var ctx = document.getElementById("team-chart");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["2013", "2014", "2015", "2016", "2017", "2018"],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [{
                data: [0, 3, 1, 3, 0, 3],
                label: "Total",
                backgroundColor: 'transparent',
                borderColor: '#ddbb00',
                borderWidth: 2,
                pointStyle: 'circle',
                pointRadius: 3,
                pointBorderColor: '#ddbb00',
                pointBackgroundColor: '#ddbb00',
                    }, {
                label: "Death",
                data: [0, 2, 5, 0, 3, 0],
                backgroundColor: 'transparent',
                borderColor: '#5b8c0e',
                borderWidth: 2,
                pointStyle: 'circle',
                pointRadius: 3,
                pointBorderColor: '#5b8c0e',
                pointBackgroundColor: '#5b8c0e',
                    }, {
                label: "Recover",
                data: [1, 0, 2, 0, 2, 0],
                backgroundColor: 'transparent',
                borderColor: '#1283a8 ',
                borderWidth: 2,
                pointStyle: 'circle',
                pointRadius: 3,
                pointBorderColor: '#1283a8 ',
                pointBackgroundColor: '#1283a8 ',
                    }] 
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: true,
            },
            legend: {
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                        }]
            },
            title: {
                display: false,
            }
        }
    });