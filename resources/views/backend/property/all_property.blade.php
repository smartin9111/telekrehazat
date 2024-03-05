@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">




        <nav class="page-breadcrumb">

            <ol class="breadcrumb">

                <a href="{{ route('add.property') }}" class="btn btn-inverse-info"> Add Property </a>
            </ol>

        </nav>




        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">

                        <h6 class="card-title">Property All </h6>




                        <div class="table-responsive">

                            <table id="dataTableExample" class="table">

                                <thead>

                                    <tr>

                                        <th>Sl </th>

                                        <th>Image </th>

                                        <th>Type Plan Name </th>

                                        <th>Company Name </th>

                                        <th>Price</th>

                                        <th>Start Date of Ad </th>

                                        <th>Status </th>

                                        <th>Action </th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($property as $key => $item)
                                        <tr>

                                            <td>{{ $key + 1 }}</td>

                                            <td><img src="{{ asset($item->property_thambnail) }}"
                                                    style="width:70px; height:40px;"> </td>

                                            <td>{{ $item->typePlanName }}</td>

                                            <td>{{ $item->company_name }}</td>

                                            <td>{{ $item->priceGross  }}</td>

                                            <td>{{ $item->created_at }}</td>

                                            <td>

                                                @if ($item->status == 1)
                                                    <span class="badge rounded-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">InActive</span>
                                                @endif




                                            </td>

                                            <td>


                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>




    </div>
@endsection
