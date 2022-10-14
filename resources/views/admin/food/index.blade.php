@extends('admin.layouts.food-master')

@section('title', 'Admin Dashboard')

@push('styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('all-assets/admin/app-assets/vendors/css/chartist.min.css') }}"> --}}
@endpush


@section('content')

<div class="row justify-content-center">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-blackberry">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">{{ $totalPost }}</h3>
                    <span>Total Posts</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="icon-pie-chart font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="31.23333485921224" x2="31.23333485921224" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="52.46666971842448" x2="52.46666971842448" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="73.70000457763672" x2="73.70000457763672" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="94.93333943684895" x2="94.93333943684895" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="116.16667429606119" x2="116.16667429606119" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="137.40000915527344" x2="137.40000915527344" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="158.63334401448566" x2="158.63334401448566" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="179.8666788736979" x2="179.8666788736979" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="201.10001373291016" x2="201.10001373291016" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="222.33334859212238" x2="222.33334859212238" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="243.56668345133463" x2="243.56668345133463" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="264.8000183105469" x2="264.8000183105469" y1="15" y2="70" class="ct-grid ct-horizontal"></line></g><g><g class="ct-series ct-series-a"><path d="M10,51.667C31.233,60.833,31.233,60.833,31.233,60.833C52.467,33.333,52.467,33.333,52.467,33.333C73.7,42.5,73.7,42.5,73.7,42.5C94.933,15,94.933,15,94.933,15C116.167,42.5,116.167,42.5,116.167,42.5C137.4,33.333,137.4,33.333,137.4,33.333C158.633,42.5,158.633,42.5,158.633,42.5C179.867,24.167,179.867,24.167,179.867,24.167C201.1,38.833,201.1,38.833,201.1,38.833C222.333,33.333,222.333,33.333,222.333,33.333C243.567,46.167,243.567,46.167,243.567,46.167C264.8,46.167,264.8,46.167,264.8,46.167" class="ct-line"></path><line x1="10" y1="51.66666666666667" x2="10.01" y2="51.66666666666667" class="ct-point" ct:value="50"></line><line x1="31.23333485921224" y1="60.833333333333336" x2="31.24333485921224" y2="60.833333333333336" class="ct-point" ct:value="45"></line><line x1="52.46666971842448" y1="33.333333333333336" x2="52.476669718424475" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="73.70000457763672" y1="42.5" x2="73.71000457763672" y2="42.5" class="ct-point" ct:value="55"></line><line x1="94.93333943684895" y1="15" x2="94.94333943684896" y2="15" class="ct-point" ct:value="70"></line><line x1="116.16667429606119" y1="42.5" x2="116.1766742960612" y2="42.5" class="ct-point" ct:value="55"></line><line x1="137.40000915527344" y1="33.333333333333336" x2="137.41000915527343" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="158.63334401448566" y1="42.5" x2="158.64334401448565" y2="42.5" class="ct-point" ct:value="55"></line><line x1="179.8666788736979" y1="24.166666666666664" x2="179.8766788736979" y2="24.166666666666664" class="ct-point" ct:value="65"></line><line x1="201.10001373291016" y1="38.83333333333333" x2="201.11001373291015" y2="38.83333333333333" class="ct-point" ct:value="57"></line><line x1="222.33334859212238" y1="33.333333333333336" x2="222.34334859212237" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="243.56668345133463" y1="46.16666666666667" x2="243.57668345133462" y2="46.16666666666667" class="ct-point" ct:value="53"></line><line x1="264.8000183105469" y1="46.16666666666667" x2="264.81001831054687" y2="46.16666666666667" class="ct-point" ct:value="53"></line></g></g><g class="ct-labels"></g></svg></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-ibiza-sunset">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">{{ $totalProduct }}</h3>
                    <span>Total Products</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="icon-bulb font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="31.23333485921224" x2="31.23333485921224" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="52.46666971842448" x2="52.46666971842448" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="73.70000457763672" x2="73.70000457763672" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="94.93333943684895" x2="94.93333943684895" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="116.16667429606119" x2="116.16667429606119" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="137.40000915527344" x2="137.40000915527344" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="158.63334401448566" x2="158.63334401448566" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="179.8666788736979" x2="179.8666788736979" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="201.10001373291016" x2="201.10001373291016" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="222.33334859212238" x2="222.33334859212238" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="243.56668345133463" x2="243.56668345133463" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="264.8000183105469" x2="264.8000183105469" y1="15" y2="70" class="ct-grid ct-horizontal"></line></g><g><g class="ct-series ct-series-a"><path d="M10,51.667C31.233,60.833,31.233,60.833,31.233,60.833C52.467,33.333,52.467,33.333,52.467,33.333C73.7,42.5,73.7,42.5,73.7,42.5C94.933,15,94.933,15,94.933,15C116.167,42.5,116.167,42.5,116.167,42.5C137.4,33.333,137.4,33.333,137.4,33.333C158.633,42.5,158.633,42.5,158.633,42.5C179.867,24.167,179.867,24.167,179.867,24.167C201.1,38.833,201.1,38.833,201.1,38.833C222.333,33.333,222.333,33.333,222.333,33.333C243.567,46.167,243.567,46.167,243.567,46.167C264.8,46.167,264.8,46.167,264.8,46.167" class="ct-line"></path><line x1="10" y1="51.66666666666667" x2="10.01" y2="51.66666666666667" class="ct-point" ct:value="50"></line><line x1="31.23333485921224" y1="60.833333333333336" x2="31.24333485921224" y2="60.833333333333336" class="ct-point" ct:value="45"></line><line x1="52.46666971842448" y1="33.333333333333336" x2="52.476669718424475" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="73.70000457763672" y1="42.5" x2="73.71000457763672" y2="42.5" class="ct-point" ct:value="55"></line><line x1="94.93333943684895" y1="15" x2="94.94333943684896" y2="15" class="ct-point" ct:value="70"></line><line x1="116.16667429606119" y1="42.5" x2="116.1766742960612" y2="42.5" class="ct-point" ct:value="55"></line><line x1="137.40000915527344" y1="33.333333333333336" x2="137.41000915527343" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="158.63334401448566" y1="42.5" x2="158.64334401448565" y2="42.5" class="ct-point" ct:value="55"></line><line x1="179.8666788736979" y1="24.166666666666664" x2="179.8766788736979" y2="24.166666666666664" class="ct-point" ct:value="65"></line><line x1="201.10001373291016" y1="38.83333333333333" x2="201.11001373291015" y2="38.83333333333333" class="ct-point" ct:value="57"></line><line x1="222.33334859212238" y1="33.333333333333336" x2="222.34334859212237" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="243.56668345133463" y1="46.16666666666667" x2="243.57668345133462" y2="46.16666666666667" class="ct-point" ct:value="53"></line><line x1="264.8000183105469" y1="46.16666666666667" x2="264.81001831054687" y2="46.16666666666667" class="ct-point" ct:value="53"></line></g></g><g class="ct-labels"></g></svg></div>

            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-green-tea">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 mb-0">{{ $totalOutlate }}</h3>
                    <span>Total Outlates</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="icon-graph font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="31.23333485921224" x2="31.23333485921224" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="52.46666971842448" x2="52.46666971842448" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="73.70000457763672" x2="73.70000457763672" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="94.93333943684895" x2="94.93333943684895" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="116.16667429606119" x2="116.16667429606119" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="137.40000915527344" x2="137.40000915527344" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="158.63334401448566" x2="158.63334401448566" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="179.8666788736979" x2="179.8666788736979" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="201.10001373291016" x2="201.10001373291016" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="222.33334859212238" x2="222.33334859212238" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="243.56668345133463" x2="243.56668345133463" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="264.8000183105469" x2="264.8000183105469" y1="15" y2="70" class="ct-grid ct-horizontal"></line></g><g><g class="ct-series ct-series-a"><path d="M10,51.667C31.233,60.833,31.233,60.833,31.233,60.833C52.467,33.333,52.467,33.333,52.467,33.333C73.7,42.5,73.7,42.5,73.7,42.5C94.933,15,94.933,15,94.933,15C116.167,42.5,116.167,42.5,116.167,42.5C137.4,33.333,137.4,33.333,137.4,33.333C158.633,42.5,158.633,42.5,158.633,42.5C179.867,24.167,179.867,24.167,179.867,24.167C201.1,38.833,201.1,38.833,201.1,38.833C222.333,33.333,222.333,33.333,222.333,33.333C243.567,46.167,243.567,46.167,243.567,46.167C264.8,46.167,264.8,46.167,264.8,46.167" class="ct-line"></path><line x1="10" y1="51.66666666666667" x2="10.01" y2="51.66666666666667" class="ct-point" ct:value="50"></line><line x1="31.23333485921224" y1="60.833333333333336" x2="31.24333485921224" y2="60.833333333333336" class="ct-point" ct:value="45"></line><line x1="52.46666971842448" y1="33.333333333333336" x2="52.476669718424475" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="73.70000457763672" y1="42.5" x2="73.71000457763672" y2="42.5" class="ct-point" ct:value="55"></line><line x1="94.93333943684895" y1="15" x2="94.94333943684896" y2="15" class="ct-point" ct:value="70"></line><line x1="116.16667429606119" y1="42.5" x2="116.1766742960612" y2="42.5" class="ct-point" ct:value="55"></line><line x1="137.40000915527344" y1="33.333333333333336" x2="137.41000915527343" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="158.63334401448566" y1="42.5" x2="158.64334401448565" y2="42.5" class="ct-point" ct:value="55"></line><line x1="179.8666788736979" y1="24.166666666666664" x2="179.8766788736979" y2="24.166666666666664" class="ct-point" ct:value="65"></line><line x1="201.10001373291016" y1="38.83333333333333" x2="201.11001373291015" y2="38.83333333333333" class="ct-point" ct:value="57"></line><line x1="222.33334859212238" y1="33.333333333333336" x2="222.34334859212237" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="243.56668345133463" y1="46.16666666666667" x2="243.57668345133462" y2="46.16666666666667" class="ct-point" ct:value="53"></line><line x1="264.8000183105469" y1="46.16666666666667" x2="264.81001831054687" y2="46.16666666666667" class="ct-point" ct:value="53"></line></g></g><g class="ct-labels"></g></svg></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-pomegranate">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">{{ $totalPromotion }}</h3>
                    <span>Total Promotions</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="icon-wallet font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="31.23333485921224" x2="31.23333485921224" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="52.46666971842448" x2="52.46666971842448" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="73.70000457763672" x2="73.70000457763672" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="94.93333943684895" x2="94.93333943684895" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="116.16667429606119" x2="116.16667429606119" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="137.40000915527344" x2="137.40000915527344" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="158.63334401448566" x2="158.63334401448566" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="179.8666788736979" x2="179.8666788736979" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="201.10001373291016" x2="201.10001373291016" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="222.33334859212238" x2="222.33334859212238" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="243.56668345133463" x2="243.56668345133463" y1="15" y2="70" class="ct-grid ct-horizontal"></line><line x1="264.8000183105469" x2="264.8000183105469" y1="15" y2="70" class="ct-grid ct-horizontal"></line></g><g><g class="ct-series ct-series-a"><path d="M10,51.667C31.233,60.833,31.233,60.833,31.233,60.833C52.467,33.333,52.467,33.333,52.467,33.333C73.7,42.5,73.7,42.5,73.7,42.5C94.933,15,94.933,15,94.933,15C116.167,42.5,116.167,42.5,116.167,42.5C137.4,33.333,137.4,33.333,137.4,33.333C158.633,42.5,158.633,42.5,158.633,42.5C179.867,24.167,179.867,24.167,179.867,24.167C201.1,38.833,201.1,38.833,201.1,38.833C222.333,33.333,222.333,33.333,222.333,33.333C243.567,46.167,243.567,46.167,243.567,46.167C264.8,46.167,264.8,46.167,264.8,46.167" class="ct-line"></path><line x1="10" y1="51.66666666666667" x2="10.01" y2="51.66666666666667" class="ct-point" ct:value="50"></line><line x1="31.23333485921224" y1="60.833333333333336" x2="31.24333485921224" y2="60.833333333333336" class="ct-point" ct:value="45"></line><line x1="52.46666971842448" y1="33.333333333333336" x2="52.476669718424475" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="73.70000457763672" y1="42.5" x2="73.71000457763672" y2="42.5" class="ct-point" ct:value="55"></line><line x1="94.93333943684895" y1="15" x2="94.94333943684896" y2="15" class="ct-point" ct:value="70"></line><line x1="116.16667429606119" y1="42.5" x2="116.1766742960612" y2="42.5" class="ct-point" ct:value="55"></line><line x1="137.40000915527344" y1="33.333333333333336" x2="137.41000915527343" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="158.63334401448566" y1="42.5" x2="158.64334401448565" y2="42.5" class="ct-point" ct:value="55"></line><line x1="179.8666788736979" y1="24.166666666666664" x2="179.8766788736979" y2="24.166666666666664" class="ct-point" ct:value="65"></line><line x1="201.10001373291016" y1="38.83333333333333" x2="201.11001373291015" y2="38.83333333333333" class="ct-point" ct:value="57"></line><line x1="222.33334859212238" y1="33.333333333333336" x2="222.34334859212237" y2="33.333333333333336" class="ct-point" ct:value="60"></line><line x1="243.56668345133463" y1="46.16666666666667" x2="243.57668345133462" y2="46.16666666666667" class="ct-point" ct:value="53"></line><line x1="264.8000183105469" y1="46.16666666666667" x2="264.81001831054687" y2="46.16666666666667" class="ct-point" ct:value="53"></line></g></g><g class="ct-labels"></g></svg></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bar Chart -->
<!-- Bar Chart -->

</div>

<div class="row mt-3">
  <div class="col-sm-12">
      <div class="card">
          <div class="card-header card-header-top-line">
              <h4 class="card-title text-center">Last twelve months user visits on website</h4>
          </div>
          <div class="card-content">
              <div class="card-body chartjs">
                  <canvas id="todayTepmMeasuredChart" width="400" height="150"></canvas>
              </div>
          </div>
      </div>
  </div>
</div> 


@endsection


@push('scripts')

<!--Chart.js-->
<script src="{{ asset('all-assets/common/Chart/Chart.min.js') }}"></script>


<script>

  var ctx2 = document.getElementById('todayTepmMeasuredChart').getContext('2d');
  var myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: {
          //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          labels: [
                  @php 

                  foreach ($bar_chart_data as $level )
                  { 
                    
                   $lavel = date("F", mktime(0, 0, 0, $level->month, 1)).'-'.$level->year;
                   
                   echo '"'. $lavel .'"'.','; 
                    
                  }
                   
                  @endphp

                  ],
          datasets: [{
              label: 'Total Visits',
              data: [
                      @php 
                        foreach ($bar_chart_data as $data )
                        { 
                          echo '"'.$data->total.'"'.','; 
                        } 
                      @endphp
                    ],
              backgroundColor: [
                                  @php
                                    for ($i=0; $i <= $bar_chart_data->count(); $i++) {
                                        echo  "'#". substr(md5(rand()), 0, 6)."',";
                                        }
                                  @endphp 
                               ],
              borderColor: [],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });



    


</script>
    
@endpush
