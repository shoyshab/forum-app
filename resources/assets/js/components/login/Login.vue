<template>
<v-container>
  <v-form @submit.prevent="login">

    <v-text-field
      v-model="form.email"
      label="Email"
      type="email"
      required
    ></v-text-field>
  	
  	<v-text-field
  	  v-model="form.password"
  	  type="password"
  	  label="Password"
  	  required
  	></v-text-field>

  	<v-btn type="submit" color="green">Login</v-btn>
		<router-link to="/signup"><v-btn color="gray">Sugn up</v-btn></router-link>

  </v-form>
</v-container>
</template>

<script>
	export default{
		data(){
			return {
				form:{
					email:null,
					password:null,
				}
			}
		},
		created(){
        if(User.loggedIn()){
            this.$router.push({name:'forum'})
        }
    },
		methods:{
			login(){
				// alert('login');
				User.login(this.form)
			}			
		}
	}
</script>

<style>

	
</style>