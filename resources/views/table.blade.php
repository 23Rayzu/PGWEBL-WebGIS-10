@extends('layout.template')

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
        }

        .table th, .table td {
            vertical-align: middle;
            word-break: break-word;
        }

        .col-id { width: 60px; }
        .col-name { width: 150px; }
        .col-desc { width: 250px; }
        .col-image { width: 120px; }
        .col-date { width: 160px; }
    </style>
@endsection

@section('content')
    <div class="container mt">

        {{-- POINTS TABLE --}}
        <h4>Points</h4>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-id">No</th>
                        <th class="col-name">Name</th>
                        <th class="col-desc">Descriptions</th>
                        <th class="col-image">Image</th>
                        <th class="col-date">Created At</th>
                        <th class="col-date">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($points as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td>
                            @if($p->image)
                                <img src="{{ asset('storage/images/'.$p->image) }}" alt="" class="img-thumbnail" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($p->created_at)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->updated_at)->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- POLYLINES TABLE --}}
        <h4>Polylines</h4>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-id">No</th>
                        <th class="col-name">Name</th>
                        <th class="col-desc">Descriptions</th>
                        <th class="col-image">Image</th>
                        <th class="col-date">Created At</th>
                        <th class="col-date">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($polylines as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td>
                            @if($p->image)
                                <img src="{{ asset('storage/images/'.$p->image) }}" alt="" class="img-thumbnail" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($p->created_at)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->updated_at)->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- POLYGONS TABLE --}}
        <h4>Polygons</h4>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-id">No</th>
                        <th class="col-name">Name</th>
                        <th class="col-desc">Descriptions</th>
                        <th class="col-image">Image</th>
                        <th class="col-date">Created At</th>
                        <th class="col-date">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($polygons as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td>
                            @if($p->image)
                                <img src="{{ asset('storage/images/'.$p->image) }}" alt="" class="img-thumbnail" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($p->created_at)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->updated_at)->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
