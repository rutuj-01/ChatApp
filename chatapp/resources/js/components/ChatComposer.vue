<template>
		<div>
			<input type="text" placeholder="Start typing your message..." v-model="messageText" style="width:90%;" @keyup.enter="sendMessage" >
			<button class="btn btn-primary" @click="sendMessage">Send</button>
		</div>

</template>

	<script >
		export default{
			data(){
				return{
					messageText: ''
				}
			},
			methods:{
				 sendMessage(){
				 	this.$emit('messagesent',{
				 		message: this.messageText,
				 		user : 'John Bhau'
				 	})
				 	this.messageText='';
				 }
			}
		}

	</script>

