<template>
    <div class="container login-container">
        <div class="row">
            <div class="offset-md-3 col-md-6 login-form-1">
                <h3>Login Form</h3>
                <form @submit.prevent="save">
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone No *" value="" v-model="login.phone"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password *" value="" v-model="login.password"/>
                    </div>
                    <div class="form-group">
                        <button class="btnSubmit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                login:{
                    phone:'',
                    password:''
                }
            }
        },
        methods: {
            save() {
                axios.post('/sign-in', this.$data.login)
                    .then((response) => window.location.href='http://localhost:8000/welcome')
                    .catch((error) => console.log(error))
            }
        }
    }
</script>

<style scoped>
    .login-container{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .col-md-6{
        border: solid 1px blue;
    }
    .login-form-1{
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
    .login-form-1 h3{
        text-align: center;
        color: #333;
    }
    .login-container form{
        padding: 10%;
    }
    .btnSubmit
    {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        border: none;
        cursor: pointer;
    }
    .login-form-1 .btnSubmit{
        font-weight: 600;
        color: #fff;
        background-color: #0062cc;
    }
    .login-form-1 .ForgetPwd{
        color: #0062cc;
        font-weight: 600;
        text-decoration: none;
    }
</style>
