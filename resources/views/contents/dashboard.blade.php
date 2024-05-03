@extends('layouts.main')

@section('header-title')
{{ $header }}
@endsection

@section('contents')
<div class="container-fluid">
    Dashboard page
    <div class="row ">
        <div class="col-4 bg-transparent">
            <div id="chart0"></div>
        </div>
        <div class="col-4">
            <div id="chart1"></div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    //gauge chart options
    // var gaugeOptions = {
    //     chart: {
    //         type: 'solidgauge',
    //         height: (9 / 16 * 100) + '%' // 16:9 ratio
    //     },
    //     title: null,
    //     pane: {
    //         center: ['50%', '85%'],
    //         size: '140%',
    //         startAngle: -90,
    //         endAngle: 90,
    //         background: {
    //         backgroundColor:
    //             Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
    //         innerRadius: '60%',
    //         outerRadius: '100%',
    //         shape: 'arc'
    //         }
    //     },
    //     exporting: {
    //         enabled: false
    //     },
    //     tooltip: {
    //         enabled: false
    //     },
    //     // the value axis
    //     yAxis: {
    //         stops: [
    //         [0.5, '#55BF3B'], // green
    //         [0.5, '#DDDF0D'], // yellow
    //         [0.9, '#DF5353'] // red
    //         ],
    //         lineWidth: 0,
    //         tickWidth: 0,
    //         minorTickInterval: null,
    //         tickAmount: 2,
    //         title: {
    //         y: -50
    //         },
    //         labels: {
    //         y: 16
    //         }
    //     },
    //     plotOptions: {
    //         solidgauge: {
    //         dataLabels: {
    //             y: 5,
    //             borderWidth: 0,
    //             useHTML: true
    //         }
    //         }
    //     }
    // };

    // var chart0 = Highcharts.chart('chart0', Highcharts.merge(gaugeOptions, {
    //     yAxis: {
    //         min: 0,
    //         max:  100,
    //         title: {
    //         text: ''
    //         }
    //     },
        
    //     credits: {
    //         enabled: false
    //     },
        
    //     series: [{
    //         name: '',
    //         data: [0],
    //         dataLabels: {
    //             format:
    //                 '<div style="text-align:center">' +
    //                 '<span style="font-size:20px">{y}</span><br/>' +
    //                 `<span style="font-size:12px;opacity:0.4">METER</span>` +
    //                 '</div>'
    //         },
    //         tooltip: {
    //             valueSuffix: ' km/h'
    //         }
    //     }]

    // }));

    // test gauge
    const gaugeOptions = {
        chart: {
            type: 'solidgauge',
            backgroundColor: '#336699',
            width: 300, // Atur lebar kotak
            height: 300 // Atur tinggi kotak
        },

        title: null,

        pane: {
            center: ['50%', '70%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor:
                    Highcharts.defaultOptions.legend.backgroundColor || '#eee',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },

        exporting: {
            enabled: false
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
                [0.1, '#55BF3B'], // green
                [0.5, '#DDDF0D'], // yellow
                [0.9, '#DF5353'] // red
            ],
            lineWidth: 0,
            tickWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
                y: -70
            },
            labels: {
                y: 16
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };

    // The speed gauge
    const chartSpeed = Highcharts.chart('chart0', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 200,
            title: {
                text: 'Speed'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Speed',
            data: [80],
            dataLabels: {
                format:
                    '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">km/h</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: ' km/h'
            }
        }]

    }));
    
    // The RPM gauge
    const chartRpm = Highcharts.chart('chart1', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 200,
            title: {
                text: 'Speed'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Speed',
            data: [80],
            dataLabels: {
                format:
                    '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">km/h</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: ' km/h'
            }
        }]

    }));
    

    // Bring life to the dials
    setInterval(function () {
        // Speed
        let point,
            newVal,
            inc;

        if (chartSpeed) {
            point = chartSpeed.series[0].points[0];
            inc = Math.round((Math.random() - 0.5) * 100);
            newVal = point.y + inc;

            if (newVal < 0 || newVal > 200) {
                newVal = point.y - inc;
            }

            point.update(newVal);
        }

        // RPM
        if (chartRpm) {
            point = chartRpm.series[0].points[0];
            inc = Math.random() - 0.5;
            newVal = point.y + inc;

            if (newVal < 0 || newVal > 5) {
                newVal = point.y - inc;
            }

            point.update(newVal);
        }
    }, 2000);

</script>
@endpush