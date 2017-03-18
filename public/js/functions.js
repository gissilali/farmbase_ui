

	new Vue({
		el:'#form',

		data:{
			password:"",
			password_confirmation:"",
			email:"",
			name:"",
			error:{

				email:false,
				password:false,
				password_confirmation:false,
				name:false
			},
			error_message:{

				password:"",
				password_confirmation:"",
				email:"",
				name:"",

			},
			validated:{

				email:false,
				password:false,
				password_confirmation:false,
				name:false,
			}
		},

		methods:{
			nameValidate(name){
				if(name.trim()==0){

					this.error.name=true;
					this.validated.name=false;
					this.error_message.name="Name is required"
				}
				else if(!name.trim()==0){

					this.error.name=false;

					this.validated.name=true;
					this.error_message.name=""

				}
			},

			passwordValidate(password){
				if(password.length<6){
					this.error.password=true;
					this.error_message.password="Password must be atleast 6 characters";
					this.validated.password=false;
				}
				else if(password.length>=6){
					this.error.password=false;
					this.error_message.password="";
					this.validated.password=true;
				}
				
			},

			passwordConfirmation(password,password_confirmation){
				if(password==password_confirmation){

					this.validated.password_confirmation=true;
					this.error.password_confirmation=false;
					this.error_message="";

				}
				else if (password!=password_confirmation) {

					this.validated.password_confirmation=false;

					this.error.password_confirmation=true;

					this.error_message.password_confirmation="password does not match";
				}
			},

			emailConfirmation(email){

				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				
				if(email==''){
					this.error.email=true;

					this.error_message.email="email is required"
				}
				else if (!re.test(email)){
					    this.error.email=true;

						this.error_message.email="Email is invalid";

						this.validated.email=false;
				}else{
					
						this.error.email=false;

						this.error_message.email="";

						this.validated.email=true;
				}

			}
		},
	});