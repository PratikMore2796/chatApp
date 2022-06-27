@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            navigation
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">Ask Questions on PHP Problems </div>
                <div class="card-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="card-footer">
                    <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                </div>
            </div>
        </div>
        <div class="col-sm">
            Google Ads
        </div>
    </div>
    
</div>
@endsection