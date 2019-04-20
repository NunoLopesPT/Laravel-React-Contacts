@extends('layouts/app')

@section('title', 'Contacts List')

@section('content')
    <h1>Contacts</h1>
    <div class="clearfix">
        <a href="{{ url('/contacts/create') }}" class="btn btn-lg btn-outline-success float-right my-2">
            <i class="fa fa-plus"></i> Create
        </a>
    </div>
    <div>
        <ul class="list-group">
        @foreach($contacts as $contact)
            <li class="list-group-item">
                <b>{{ $contact->first_name }} {{ $contact->last_name }}</b> <small>({{ $contact->phone_number }})</small>
                <form method="POST" action="{{ url("contacts/{$contact->id}") }}" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-outline-danger float-right mx-2">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                <a href="#" class="btn btn-outline-warning float-right mx-2">
                    <i class="fa fa-edit"></i>
                </a>
            </li>
        @endforeach
        </ul>
    </div>
@stop
