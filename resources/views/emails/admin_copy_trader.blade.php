@component('mail::message')
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
# Dear Admin

## New Trader Has Been Copied

<h4>Details</h4>
<table style="width:100%">
    <tr>
        <th>User:</th>
        <td>{{ $trader->user->name }}</td>
    </tr>
    <tr>
        <th>Trader:</th>
        <td>{{ $trader->trader->name }}</td>
    </tr>
    <tr>
        <th>Trader Position:</th>
        <td>{{ $trader->trader->position }}</td>
    </tr>
</table>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
