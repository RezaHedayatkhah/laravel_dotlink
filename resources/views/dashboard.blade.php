@extends('layout')

@section('content')
    <div class="container text-white">
        <div class="d-flex flex-column">
            <h1> سلام {{ Auth::user()->name }}</h1>

            <canvas id="myChart" class="card-color rounded px-1" style="height: 300px;"></canvas>
            <div>
        </div>


        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>

        const xValues = @json($views);
        const yValues = [];

        let titles = @json($titles);
        titles.forEach(title => {
            yValues.push(title.slice(0, 10));
        });

        const myChart = new Chart("myChart", {
            type: "line",
            data: {
                labels: yValues,
                datasets: [{
                    label:'بازدید ها',
                    borderColor: "rgb(0, 0, 255)",
                    data: xValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'تعداد بازدید جدیدترین لینک ها'
                }
            }
        });
    </script>
@endsection
