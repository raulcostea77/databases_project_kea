<template>
    
    <div class="tiny reveal" id="contact_form">
        
        <form method="post" action="/" @submit.prevent="sendClientData">
            <button id="contactFormClose" class="close-button" data-close aria-label="Close modal" type="button">
                  <span aria-hidden="true">&times;</span>
            </button>
            <span class="error" v-if="!email">You must enter your email</span>
            <input v-model="email" type="email" placeholder="Your email">
            <span class='error' v-if="!question">You must enter a message</span>
            <textarea v-model="question" id="question" placeholder="Your questions"></textarea>
            <button type="submit" class="tiny radius" id="sendContactDetails" v-show="question&&email">Send email</button> 

        
        </form>
    
    </div>
    

</template>

<script>
    export default {
        data(){
            return{
                email:'',
                question:''
            }
        },
        computed:{
            formData(){
                return{
                    email:this.email,
                    question:this.question
                }
            }
        },
         mounted:function() {
             console.log('mounted contact-form component');
            
        },

        methods:{
            sendClientData: function(){
                this.$http.post('/', this.formData).then(function(response) {
                // console.log(response);
                var popup =new Foundation.Reveal($('#contact_form'));
                popup.close();
                document.getElementsByClassName("reveal-overlay")[0].style.display="none";
              }, function() {
                  console.log('failed');
              });
          }
            }
        }
    
        
</script>
