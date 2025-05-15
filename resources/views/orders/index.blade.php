@extends('layouts.app')

@section('content')
    <h2>Transfer Sifarişləri</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <label>Başlanğıc Məkan:</label>
        <input type="text" name="start_location">
        <label>Son Məkan:</label>
        <input type="text" name="end_location">
        <label>Avtomobil Növü:</label>
        <input type="text" name="car_type">
        <label>Götürülmə Tarixi:</label>
        <input type="datetime-local" name="pickup_time">
        <button type="submit">Sifarişi Yarat</button>
    </form>
@endsection