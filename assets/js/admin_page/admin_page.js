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
                url: "admin-page/show-user-details",
                type: "GET",
                dataType: "JSON",
                beforeSend: function() {
                },
                success: function (data) {
                    console.log($data);
                    // for(var i=0;i<data.length;i++) {
                    //     var row = "<tr><td>"+[i+1]+"</td><td>" + data[i].fname + "</td><td>" + data[i].lname + "</td><td>" + data[i].email +"</td><td class='td-middle-left'>"+data[i].status+"</td><td>"+data[i].status+"</td><td><select class='user-status form-control' data-user-id='"+data[i].id+"'><option>Action</option><option value='Working'>Working</option><option value='Archive'>Archive</option></select></td><td><button class='btn btn-primary employees-status-update' id='"+data[i].id+"' type='button'>Update</button></td></tr>";
                    //     $("#employess_data_json").append(row);
                    // }
                    self.update_status();
                },
                complete: function () {
                    //self.table_filter($("#datatable_fixed_column"));
                },
                error: function(data) {
                    console.log(data);
                }
            });

    },
    
}
