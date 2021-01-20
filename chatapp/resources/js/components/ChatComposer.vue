<template>
		<div>
			<input type="text" placeholder="Start typing your message..." v-model="messageText" style="width:90%;" @keyup.enter="sendMessage" >
			<button class="btn btn-primary" @click="sendMessage">Send</button>
		</div>

</template>

	<script >
		export default{
			props:['current_user'],
			data(){

				return{
					messageText: ''
				}
			},
			methods:{
				 sendMessage(){
				 	this.$emit('messagesent',{
				 		message: this.messageText,
				 		user : {
				 			 name: this.current_user
				 		}
				 	})
				 	this.messageText='';
				 	console.log(name);
				 	
				 }
			}
		}

	</script>

