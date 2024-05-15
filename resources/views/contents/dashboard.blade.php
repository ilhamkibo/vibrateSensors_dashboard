@extends('layouts.main')

@section('header-title')
{{ $header }}
@endsection

@push('styles')
<style>
    .dot {
        height: 10px;
        width: 10px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
    }

    .dot-green {
        background-color: green;
    }

    .dot-red {
        background-color: red;
    }
</style>
@endpush

@section('contents')
<div class="container-fluid">
    <div class="row text-center p-3">
        <h4 id="status" class="col-md-12"></h4>
    </div>

    <div class="row">
        <!-- Kartu untuk Device 1 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-0">Device 1</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Kartu untuk Device 2 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-1">Device 2</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Ulangi struktur kartu untuk Device 3 hingga 15 -->
        <!-- Device 3 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-2">Device 3</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 4 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-3">Device 4</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 5 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-4">Device 5</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 6 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-5">Device 6</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 7 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-6">Device 7</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 8 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-7">Device 8</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 9 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-8">Device 9</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 10 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-9">Device 10</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 11 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-10">Device 11</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 12 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-11">Device 12</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 13 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-12">Device 13</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 14 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-13">Device 14</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
        </div>
        <!-- Device 15 -->
        <div class="col-sm-1 col-md-3 bg-transparent">
            <div class="card">
                <div class="card-header text-center" id="card-14">Device 15</div>
                <div class="card-body text-center">
                    <h3 class="p-0 m-0">-</h3>
                </div>
            </div>
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
    // const gaugeOptions = {
    //     chart: {
    //         type: 'solidgauge',
    //         backgroundColor: '#fff',
    //         width: 300, // Atur lebar kotak
    //         height: 300 // Atur tinggi kotak
    //     },

    //     title: null,

    //     pane: {
    //         center: ['50%', '70%'],
    //         size: '100%',
    //         startAngle: -90,
    //         endAngle: 90,
    //         background: {
    //             backgroundColor:
    //                 Highcharts.defaultOptions.legend.backgroundColor || '#eee',
    //             innerRadius: '60%',
    //             outerRadius: '100%',
    //             shape: 'arc'
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
    //             [0.1, '#55BF3B'], // green
    //             [0.5, '#DDDF0D'], // yellow
    //             [0.9, '#DF5353'] // red
    //         ],
    //         lineWidth: 0,
    //         tickWidth: 0,
    //         minorTickInterval: null,
    //         tickAmount: 2,
    //         title: {
    //             y: -70
    //         },
    //         labels: {
    //             y: 16
    //         }
    //     },

    //     plotOptions: {
    //         solidgauge: {
    //             dataLabels: {
    //                 y: 5,
    //                 borderWidth: 0,
    //                 useHTML: true
    //             }
    //         }
    //     }
    // };

    // // The speed gauge
    // const chartSpeed = Highcharts.chart('chart0', Highcharts.merge(gaugeOptions, {
    //     yAxis: {
    //         min: 0,
    //         max: 200,
    //         title: {
    //             text: 'Speed'
    //         }
    //     },

    //     credits: {
    //         enabled: false
    //     },

    //     series: [{
    //         name: 'Speed',
    //         data: [80],
    //         dataLabels: {
    //             format:
    //                 '<div style="text-align:center">' +
    //                 '<span style="font-size:25px">{y}</span><br/>' +
    //                 '<span style="font-size:12px;opacity:0.4">km/h</span>' +
    //                 '</div>'
    //         },
    //         tooltip: {
    //             valueSuffix: ' km/h'
    //         }
    //     }]

    // }));
    
    // // The RPM gauge
    // const chartRpm = Highcharts.chart('chart1', Highcharts.merge(gaugeOptions, {
    //     yAxis: {
    //         min: 0,
    //         max: 200,
    //         title: {
    //             text: 'Speed'
    //         }
    //     },

    //     credits: {
    //         enabled: false
    //     },

    //     series: [{
    //         name: 'Speed',
    //         data: [80],
    //         dataLabels: {
    //             format:
    //                 '<div style="text-align:center">' +
    //                 '<span style="font-size:25px">{y}</span><br/>' +
    //                 '<span style="font-size:12px;opacity:0.4">km/h</span>' +
    //                 '</div>'
    //         },
    //         tooltip: {
    //             valueSuffix: ' km/h'
    //         }
    //     }]

    // }));
    
    // // Bring life to the dials
    // setInterval(function () {
    //     // Speed
    //     let point,
    //         newVal,
    //         inc;

    //     if (chartSpeed) {
    //         point = chartSpeed.series[0].points[0];
    //         inc = Math.round((Math.random() - 0.5) * 100);
    //         newVal = point.y + inc;

    //         if (newVal < 0 || newVal > 200) {
    //             newVal = point.y - inc;
    //         }

    //         point.update(newVal);
    //     }

    //     // RPM
    //     if (chartRpm) {
    //         point = chartRpm.series[0].points[0];
    //         inc = Math.round((Math.random() - 0.5) * 100);
    //         newVal = point.y + inc;

    //         if (newVal < 0 || newVal > 200) {
    //             newVal = point.y - inc;
    //         }

    //         point.update(newVal);
    //     }
    // }, 2000);

</script>

<script>
    // var broker = "broker.emqx.io";
    // var topic = "toho";
    // var client = new Paho.MQTT.Client(broker, 8083, "web-client-" + Math.random().toString(16).substr(2, 8));

    // client.onConnectionLost = function (responseObject) {
    //     if (responseObject.errorCode !== 0) {
    //         document.getElementById("status").innerHTML = "Connection lost: " + responseObject.errorMessage;
    //     }
    // };

    // client.onMessageArrived = function (message) {
    //     var messageList = document.getElementById("message-list");
    //     var listItem = document.createElement("li");
    //     listItem.appendChild(document.createTextNode(message.payloadString));
    //     console.log(message.payloadString)
    //     messageList.insertBefore(listItem, messageList.firstChild);

    //     // Update toggle button based on received message
    //     updateToggleButton(message.payloadString);
    // };

    // client.connect({
    //     onSuccess: function () {
    //         document.getElementById("status").innerHTML = "Connected to MQTT broker";
    //         client.subscribe(topic);
    //     },
    //     onFailure: function (message) {
    //         document.getElementById("status").innerHTML = "Connection failed: " + message.errorMessage;
    //     }
    // });

    var broker = "broker.emqx.io";
    var topics = ["vibrate1", "vibrate2", "vibrate3", "vibrate4", "vibrate5", "vibrate6", "vibrate7", "vibrate8", "vibrate9", "vibrate10", "vibrate11", "vibrate12", "vibrate13", "vibrate14", "vibrate15"];
    var clients = [];
    let alertSw = false;

    // Create MQTT clients for each topic
    topics.forEach(function (topic, index) {
        var client = new Paho.MQTT.Client(broker, 8083, "web-client-" + index);

        client.onConnectionLost = function (responseObject) {
            if (responseObject.errorCode !== 0) {
                document.getElementById("status").innerHTML = '<span class="dot dot-red"></span>Connection lost: ' + responseObject.errorMessage;
            }
        };

        client.onMessageArrived = function (message) {
            var { sensorValue, Status } = JSON.parse(message.payloadString);
            var cardId = "card-" + index;
            var deviceName = "Device " + (index + 1);
            var card = document.getElementById(cardId);
            
            console.log("🚀 ~ 0:", sensorValue, alertSw)
            if (sensorValue === true && sensorValue !== alertSw ) {
                showDeviceMissingAlert(`${deviceName} ${Status}!`)
                console.log("🚀 ~ 1:", sensorValue, alertSw)
                alertSw = true;
            } else if (sensorValue === false) {
                console.log("🚀 ~ 2:", sensorValue, alertSw)
                alertSw = false;
            }

            // Update card background color based on received value
            card.className = "card-header text-center"+ (sensorValue === false ? " bg-info" : " bg-red");

            // Update card body text based on received value
            card.nextElementSibling.querySelector("h3").innerHTML = Status;
        };

        client.connect({
        onSuccess: function () {
            document.getElementById("status").innerHTML = '<span class="dot dot-green"></span>Connected to MQTT broker';
            client.subscribe(topic);
        },
        onFailure: function (message) {
            document.getElementById("status").innerHTML = '<span class="dot dot-red"></span>Connection failed: ' + message.errorMessage;
        }
    });

        clients.push(client);
    });

    function showDeviceMissingAlert(title) {
        // Swal.fire({
        //     icon: "warning",
        //     showConfirmButton: false,
        //     timer: 1500
        // });
        Swal.fire({
            position: "top-end",
            title: title,
            icon: "warning"
        });
    }

</script>
@endpush