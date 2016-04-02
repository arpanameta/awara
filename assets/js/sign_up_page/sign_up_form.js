var HSS = HSS || {};

HSS.Sign_up = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
HSS.Sign_up.prototype={
    initialize:function(){
        this.sign_up_form();
    },

    sign_up_form: function() {
        var self = this;
        $(".sign_up").validate({
            rules: {
                fname: {
                    required: true
                },
                lname:{
                    required: true
                },
                email: {
                    required : true,
                    email : true
                },
                confirm_email: {
                    required: true,
                    email : true
                },
                gender: {
                    required: true
                },
                month:{
                    required: true
                },
                day:{
                    required: true
                },
                year:{
                        required: true
                }
            },
            messages : {
                fname: {
                    required: 'Enter your first name'
                },
                lname: {
                    required: 'Enter your last name'

                },
                email: {
                    required : 'Enter your email',
                    email : 'Enter valid email'
                },
                confirm_email: {
                    required : 'Enter your email',
                    email : 'Enter valid email'
                },
                gender: {
                    required: 'plz select gender'
                },
                month: {
                    required: 'plz select month'
                },
                day: {
                    required: 'plz select day'
                },
                year:{
                    required: 'pls select year'
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    url: "home/user_registration",
                    type: "POST",
                    dataType: "JSON",
                    data:{
                        fname: $(".fname").val(),
                        lname: $(".lname").val(),
                        email: $(".email").val(),
                        password: $(".password").val(),
                        gender: $(".gender").val(),
                        month: $(".month").val(),
                        day: $(".day").val(),
                        year:$(".year").val()
                    },
                    beforeSend: function(data) {
                        $(".sign_up_button").html('Processing...');
                    },
                    error: function(data){
                        console.log(data);
                    },
                    success: function (data) {
                        //$(".sign_up_button").html('Sign Up Free!');
                        //console.log(data);
                        if(data.status==200) {                        
                            window.location = self.base_url;                       
                        }
                    else if(data.status==401) {
                        console.log(data);
                        // $.smallBox({
                        //     title: data.msg,
                        //     content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                        //     color: "#c26565",
                        //     iconSmall: "fa fa-thumbs-down bounce animated",
                        //     timeout: 4000
                        // });
                    }
                    }
                });
                // alert('successfull validated');
            },
            errorPlacement: function(error, element) {
                $( element ).closest( "form" ).find( element.attr( 'class' )).addClass('error_class');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('error_class');
                //$(element).closest('.input-wrap').find('.error-span').css('opacity',0);
                //$(element).closest('.textarea-wrap').find('.error-span').css('opacity',0);
            }
        });
    },
    
}
