@extends('layouts.app')

@section('content')
<template>
	<div>
		<p> {{ msg.message }}</p>
		<p>{{ msg.user.name }}</p>
		<hr>
	</div>
</template>

<script>
	export default{
		props:['msg']
	}	
</script>
@endsection