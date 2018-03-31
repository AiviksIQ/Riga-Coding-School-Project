<footer>
      
    <br>
    <p>Posted by: AiviksIQ</p>
    <br>
    
</footer>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
       $('#reg-form').submit(function(){
            var errors = [];
            $('.errors ul').html('');
            $('.has-error').removeClass('has-error');
            if ($('input[name="username"]').val() == '') {
                errors.push('Please enter username');
                $('input[name="username"]').addClass('has-error');
            }
            if ($('input[name="password"]').val() == '') {
                errors.push('Please enter password');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password"]').val().length < 8) {
                errors.push('Password must be at least 8 symold');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password2"]').val() == '') {
                errors.push('Please retype the password');
                $('input[name="password2"]').addClass('has-error');
            }
            if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
                errors.push('Passwords must match');
                $('input[name="password"]').addClass('has-error');
                $('input[name="password2"]').addClass('has-error');
            }
            if ($('input[name="first_name"]').val() == '') {
                errors.push('Please enter first name');
                $('input[name="first_name"]').addClass('has-error');
            }
            //if ($('select[name="country"]').val() == 0) {
               // errors.push('Please select coutnry');
               // $('select[name="country"]').addClass('has-error');
           // }
           // if ($('input[name="agree"]').is(":checked") == false) {
                //errors.push('Please agree with this amazng stuff');
               // $('input[name="agree"]').addClass('has-error')
           // }
            if (errors.length > 0) {
                // handle errors
                for (var index = 0; index < errors.length; index++) {
                    var element = errors[index];
                    $('.errors ul').append('<li>' + element + '</li>');
                }
                $('.errors').show();
                return false;
            }
        });
    </script>

                <!--chat-->

 <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    <script>
        var app = new Vue({
            el: '#chat',
            data: {
                messages: [
                ],
                newMessageUsername: "",
                newMessageText: "",
            },
            methods: {
                sendMessage: function(){
                    var newStuffToAdd = {
                        username: this.newMessageUsername, // Peteris
                        text: this.newMessageText, // some text
                        date: new Date()
                    }
                    
                    this.messages.push(newStuffToAdd);
                    this.newMessageText = '';
                }
            }
        })
    
    </script>

                <!--maps-->

    <script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="JS/fancybox/jquery.fancybox-1.3.4.js"></script>

<script>

$('.image-col a').fancybox();
</script>

</body>
</html>