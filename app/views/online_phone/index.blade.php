@extends('template.skeleton')

@section('title')
{{ Auth::user()->username.' | '._('Online phones') }}
@stop

@section('content')

	<div class="container">

		<h1>{{ _('Online Phones') }}</h1>
        <p>Last update: {{ count($online_phones) > 0 ? $online_phones[0]->created_at : ''}}</p>

		@include('template.messages')

		<table id="enable_pagination" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                <thead><tr>
                    <th>{{ _('E164 Phone Number') }}</th>
                    <th>{{ _('Local Phone Number') }}</th>
                    <th>{{ _('Domain') }}</th>
                    <th>{{ _('Description') }}</th>
                </tr></thead><tbody>
                @foreach ($online_phones as $online_phone)
                <tr>
                    <td>+{{ Config::get('settings.global_prefix') }}-{{ $online_phone->domain->prefix }}-{{ $online_phone->username }}</td>
                    <td>{{ $online_phone->username }}</td>
                    <td>{{ $online_phone->sip_server }}</td>
                    <td>{{ $online_phone->phonenumber->description }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
		
	</div>
@stop
