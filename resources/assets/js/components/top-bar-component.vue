<template>
    <div class="top-bar">
                 <a href="/"><img src="images/auction_logo.png" alt="" id="isobar_logo" class="top-bar-left"></a>
                 <!-- <div class="top-bar-center">
                     <div class="form-group">
                       <input id="searchbar" type="text" class="form-control" placeholder="Search" name="search" data-list=".col-md-2">
                    </div>
                  </div>-->
                 <div class="top-bar-right">
                 <!-- <button id="admin">
                 <a href="{{url('/login')}}">Login</a>
                 </button> -->
                 <a href="/admin" id="admin">Admin</a>
                 
                 <button id="contact" v-on:click="openModal">{{contact}}</button>
                 </div>
    </div>
    

</template>

<script>
    export default {
      methods: {
        openModal() {
            var popup = new Foundation.Reveal($('#contact_form'));
            popup.open();
        }
      },
       mounted:function() {
             console.log('mounted top-bar component');
        },

       data(){
            return{
                contact:'Contact us',
                cart:'Cart',
                email:'Enter your email'
            }
        }
       
    }
</script>
