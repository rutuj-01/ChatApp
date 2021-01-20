@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>ChatRoom</title>
</head>
<body>
	<div class="container">
		<h1>ChatRoom</h1>
		<!-- <chat-message></chat-message> -->
		<chat-log :messages="messages"></chat-log>
		<chat-composer current_user="{{ Auth::user()->name }}" v-on:messagesent="addMsg"></chat-composer>
	</div>
</body>
</html>

@endsection