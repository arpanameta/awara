var AWARA = AWARA || {};

AWARA.Admin = function (base_url) {
    this.base_url=base_url;
    this.initialize();
}
AWARA.Admin.prototype={
    initialize:function(){
        this.user_details();
    },

    user_details: function() {
        var self = this;
            $.ajax({
                url: self.base_url+"hotels-table/show-hotel-details",
                type: "GET",
                dataType: "JSON",
                beforeSend: function() {
                },
                success: function (data) {
                    // console.log("inside success");
                    // console.log(data);
                    for(var i=0;i<data.length;i++) {
                        var row = "<tr><td>"+[i+1]+"</td><td>" + data[i].hotels_name + "</td><td>" + data[i].hotel_price + "</td><td>" + data[i].phone +"</td><td><a href='admin/city/"+data[i].id+"'><button class='btn btn-primary'>Edit</button></a></td></tr>";
                        $("#hotel_data_json").append(row);
                    }
                    self.update_status();
                },
                complete: function () {
                    //self.table_filter($("#datatable_fixed_column"));
                },
                error: function(data) {
                     console.log("inside error");
                    console.log(data);
                }
            });
    },
    update_status:function() {
        $('.user-status-update').click(function() {
            var button_clicked = $(this);
            var row= $(this).closest('tr');
            var select = row.find('.user-status');
            var status = select.val();
            var user_tab_id = select.attr('data-user-id');
            $.ajax({
                url: "user-table/user-status-update-call",
                type: "POST",
                dataType: "JSON",
                data:{
                    status:  status,
                    user_tab_id: user_tab_id
                },
                beforeSend: function() {
                    button_clicked.html('Updating..');
                },
                success: function (data) {
                    if(data.status==200) {
                        row.find('td').eq(4).html(status);
                        // $.smallBox({
                        //     title: data.msg,
                        //     content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                        //     color: "#296191",
                        //     iconSmall: "fa fa-thumbs-up bounce animated",
                        //     timeout: 4000
                        // });
                        button_clicked.html('Update');
                    }
                    else {
                        $.smallBox({
                            title: data.msg,
                            content: "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                            color: "#c26565",
                            iconSmall: "fa fa-thumbs-down bounce animated",
                            timeout: 4000
                        });
                    }
                }
            });
        });
    }
    
}
