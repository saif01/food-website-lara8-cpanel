@extends('admin.layouts.food-master')

@section('title', 'Admin Visitor Dashboard')

@push('styles')
<link rel="stylesheet" href="{{ asset('all-assets/common/export-datatable/css/1.10.21/dataTables.bootstrap4.min.css') }}">
@endpush



@section('content')

<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitor Hit Information
                    
                    </h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard table-responsive">
                        <table id="jsDataTable" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Register</th>
                                    <th>IP Address</th>
                                    <th>OS Virson</th>
                                    <th>Browser Name</th>
                                    <th>Device Type</th>
                                    <th>Country Name</th>
                                    <th>Region Name</th>
                                    <th>City Name</th>
                                    <th>Zip  Code</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_data as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{  date("F j, Y", strtotime($data->created_at)) }}</td>
                                        <td>{{ $data->ip }}</td>
                                        <td>{{ $data->os }}</td>
                                        <td>{{ $data->browser }}</td>
                                        <td>{{ $data->device }}</td>
                                        <td>{{ $data->country_name }}</td>
                                        <td>{{ $data->region_name }}</td>
                                        <td>{{ $data->city_name }}</td>
                                        <td>{{ $data->zip_code }}</td>
                                        <td>{{ $data->latitude }}</td>
                                        <td>{{ $data->longitude }}</td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection


@push('scripts')

<script src="{{ asset('all-assets/common/export-datatable/js/1.10.21/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('all-assets/common/export-datatable/js/1.10.21/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>




<script type="text/javascript">


    $(document).ready(function(){


        //All Data
        $('#jsDataTable').DataTable({
            pagingType: "full_numbers",
            stateSave: true,
            order: [[ 1, "desc" ]],
        });


    

    });



</script>


@endpush
