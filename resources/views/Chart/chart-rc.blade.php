@extends('template.base')

@section('title', 'Chart Review dan Komentar')

@section('dila')

<!-- Page header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Chart Review dan Komentar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Back</a></li>
                    <li class="breadcrumb-item active">Chart Review dan Komentar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- End Header -->

<!-- Content -->
<section class="content">
    <div class="container-fluid">
        <h1 class="text-center">Data Review</h1>
        <div id="container"></div>
    </div>
</section>



<!-- Script Chart -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var produk = <?php echo json_encode($rc) ?>;

    Highcharts.chart('container', {
        title: {
            text: 'Chart Data Review dan Komentar'
        },
        subtitle: {
            text: 'Review dan Komentar'
        },
        xAxis: {
            categories: ['review', 'komentar']
        },
        yAxis: {
            title: {
                text: 'Jumlah Review dan Komentar'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Produk',
            data: rc
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>

@endsection