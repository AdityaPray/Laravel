@extends('layouts.app')

@section('content')
    <div class="container">
        <x-card 
            image="https://via.placeholder.com/150" 
            title="Judul Card" 
            content="Ini adalah konten dari card." 
            link="#"/>
            
        <x-alert type="success" message="Ini adalah pesan sukses!"/>
    </div>
@endsection
