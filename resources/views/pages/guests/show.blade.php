@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Detail - Guests
        </h3>
        
    </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.guests.index')}}" class="btn btn-sm btn-secondary mb-2"> Back </a>
                    <table class="table table-striped table-brodered">
                        <tr>
                            <th>ID</th>
                            <td><Strong>#{{ $guests->id}}</Strong></td>
                        </tr>
                        <tr>
                            <td>Guests Name</td>
                            <td>{{ $guests->fullname }}</td>
                        </tr>
                        <tr>
                            <td>From Guests</td>
                            <td>{{ $guests->from }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $guests->phonenumber }}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{ $guests->email }}</td>
                        </tr>
                        <tr>
                            <td>Note</td>
                            <td>{{ $guests->note }}</td>
                        </tr>
                        <tr> 
                            <td>Created_at</td>
                            <td>{{ Carbon\Carbon::parse ( $guests->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
                        </tr>
                        <tr>
                        <td>Update_at</td>
                            <td>{{ Carbon\Carbon::parse ( $guests->update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    
</div>
@endsection