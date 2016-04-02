var AWARA = AWARA || {};

AWARA.Index = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
AWARA.Index.prototype={
    initialize:function(){
        this.sign_up_form();
    },

    sign_up_form: function() {
        var self = this;

        $.backstretch([
        "assets/images/1(1).jpg",
        "assets/images/1(5).jpg",
        "assets/images/1(6).jpg",
        "assets/images/1(7).jpg",
        "assets/images/1(9).jpg"
        ], {
            fade: 750,
            duration: 4000
        });


        $(".sign_up_btn").click(function(){
            $(".sign_up_form").removeClass('hidden');
        });

           $(".sign_up_button").click(function(){
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
           });

    },
    
}
