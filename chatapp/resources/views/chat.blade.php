@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>ChatRoom</title>
</head>
<body>
	<div class="container">
		ChatRoom
		<!-- <chat-message></chat-message> -->
		<chat-log :messages="messages"></chat-log>
		<chat-composer v-on:messagesent="addMsg"></chat-composer>
	</div>
</body>
</html>

@endsection