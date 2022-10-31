@extends('layoutsdash.master')

@section('dashboard')


<div class="content-wrapper" style="min-height: 671px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3> </h3>
            
                      <p>New Orders</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
            
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>44</h3>
            
                      <p>User Registrations</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
            
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-chart-pie"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
            </div>
            <div id="container"></div>
            <div id="container1"></div>

        <!-- pembungkus-->
        </div>
    </div>
</div>
@stop

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('container', {
      chart: {
          type: 'line'
      },
      title: {
          text: 'Jumlah karyawan berdasarkan lokasi kantor'
      },
      xAxis: {
          categories: [
              'Jakarta',
              'Jogja',
              
          ],
          crosshair: true
      },
      yAxis: {
          min: 0,
          title: {
              text: ' '
          }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y}orang </b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'Jumlah karyawan',
          data: {!! json_encode($user) !!}

      }]
  });
</script>

<script>
Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: ' <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>ini nilai</b> {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: {!! json_encode($user) !!}
    }]
});
</script>



@stop
