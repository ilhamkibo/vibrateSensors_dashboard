@extends('layouts.main')

@section('header-title')
{{ $header }}
@endsection
@section('contents')
<div class="container-fluid">
    <div class="row justify-content-center pt-2">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form>
                        @csrf
                        <div class="form-row">
                            <div class="col-3">
                                {{-- <label for="device">Date</label> --}}
                                <input type="date" class="form-control" name="date" placeholder="First name">
                            </div>
                            <div class="col-3">
                                {{-- <label for="device">Device</label> --}}
                                <label class="mr-sm-2 sr-only" for="device">Preference</label>
                                <select class="custom-select mr-sm-2" id="device" name="device">
                                    <option value="" selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Device</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->device }}</td>
                                    <td>{{ $data->value === 0 ? "Off" : "On" }}</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No Data Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <canvas id="myChart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let datas  = <?php echo json_encode($datas); ?>;

    // Membuat array labels dan data
    const barPerLabels = datas.map(item => new Date(item.created_at).toLocaleTimeString('en-GB', {hour12: false}));
    const dataChart = datas.map(item => item.value);

    const barPerData = {
        labels: barPerLabels,
        datasets: [{
                label: "Device 1",
                data: dataChart,
                backgroundColor: "#a14f65",
                borderColor: "#a14f65",
                borderwidth: 1,
                tension: 0,
                pointRadius: 1
            }]
    };

    // barPerData.datasets[0].data = barPerData.datasets[0].data.map(item => {
    //     const localDate = new Date(item.x);
    //     localDate.setHours(localDate.getHours() - 7); 

    //     return {
    //         x: localDate.toISOString(), 
    //         y: item.y
    //     };
    // });


    const barPerConfig = {
        type: 'line',
        data: barPerData,
        options: {
            animation: true,
            maintainAspectRatio: false,
            plugins: {
                legend:{
                    display: true,
                },
                title: {
                display: true,
                    text: 'Vibrate Monitoring'
                },
                // zoom: {
                //     pan: {
                //         enabled: true,
                //     },
                //     zoom: {
                //         wheel: {
                //             enabled: true,
                //             modifierKey: 'ctrl',
                //         },
                //         pinch: {
                //             enabled: true,
                //         }
                //     }
                // }
            },
            scales: {
                x: {
                    display: true,
                    // min: setTime2HourBefore,
                    // max: setTime1HourAfter,
                    // type: 'time',
                    // time: {
                    //     unit: "minute",
                    //     displayFormats: {
                    //         hour: 'HH:mm',
                    //         minute: 'HH:mm'
                    //     }
                    // },
                },
                y: {
                    display: true,
                    max: 2,
                    ticks: {
                        stepSize: 0.1,
                    }
                },
            },
        }
    };

    const barPer = new Chart(
        document.getElementById('myChart'),
        barPerConfig
    );
</script>

@endpush