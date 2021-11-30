@extends('Layouts.member')

@section('memberOperation')

<br><br>
<h3 class="text-center text-info">Member Operation</h3>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Member</button>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    

          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Member</h4>
            </div>

            <div class="modal-body">






            <div class="container">
           
              <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
              <div class="col-md-6">
              <form id="ajaxform">
                   @csrf
                  <div class="form-group">
                      <label>Name:</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name" >
                      <span class="text-danger error-text name_err"></span>
                  </div>

                  <div class="form-group">
                      <label>Email:</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                      <span class="text-danger error-text email_err"></span>
                  </div>

                  <div class="form-group">
                      <strong>Phone Number:</strong>
                      <input type="text" name="phonenumber" class="form-control" placeholder="Enter Phone Num" >
                      <span class="text-danger error-text  phonenumber_err"></span>
                    </div>
                  <div class="form-group">
                      <strong>password:</strong>
                      <input type="password" name="password" class="form-control" placeholder="Enter Your password" >
                      <span class="text-danger error-text password_err"></span>
                  </div>

                  <div class="form-group">
                      <strong>Address:</strong>
                      <input type="text" name="address" class="form-control" placeholder="Enter Your address" >
                      <span class="text-danger error-text address_err"></span>
                  </div>
                  <div class="form-group">
                      <strong>Date of birth:</strong>
                      <input type="date" name="dob" class="form-control" >
                      <span class="text-danger error-text dob_err"></span>
                  </div>
                 

                  <div class="form-group">
                      <button type = "submit" class="btn btn-success save-data">Save</button>
                  </div>
              </form>
              </div>
          </div>


        </div>
    </div>
  </div>
</div>


<div class="container">
  <table border='1' class="table" id='userTable' style='border-collapse: collapse;'>
       <thead>
        <tr>
          <th>Serial</th>
          <th>Name</th>
          <th>Email</th>
          <th>password</th>
          <th>Address</th>
          <th>phone Number</th>
          <th>Dob</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
       </thead>
       <tbody>
          
       </tbody>
  </table>

</div>

  <script>
    $(document).ready(function(){
    $.ajax({
        url: '/memberList',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
            
                var name = response[i].name;
                var email = response[i].email;
                var password = response[i].password;
                var address = response[i].address;
                var phonenumber = response[i].phonenumber;
                var dob = response[i].dob;

                var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "<td align='center'>" + password + "</td>" +
                    "<td align='center'>" + address + "</td>" +
                    "<td align='center'>" + phonenumber + "</td>" +
                    "<td align='center'>" + dob + "</td>"+
                    '<td align="center"><button type="button" name="remove" id="'+phonenumber+'" class="btn btn-sucesscd">Edit</button></td>'+
                    '<td align="center"><a herf ="/member/delete/'+phonenumber+'" type="button" name="remove" class="btn btn-danger btn_remove">X</a></td>'
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
});
</script>




  <script type="text/javascript">
        $(document).ready(function() {
            $(".save-data").click(function(e){
                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var name = $("input[name=name]").val();
                var email = $("input[name=email]").val();
                var phonenumber= $("input[name=phonenumber]").val();
                var address = $("input[name=address]").val();
                var dob = $("input[name=dob]").val();
                var password = $("input[name=password]").val()

                $.ajax({
                    url: "{{route('memberReg') }}",
                    type:'POST',
                    data:{
                      name:name,
                      email:email,
                      phonenumber:phonenumber,
                      address:address,
                      dob:dob,
                      password:password,
                      _token:_token
                    },
                    success: function(data) {
                      console.log(data.error)
                        if($.isEmptyObject(data.error)){
                            alert("Registration Complate");
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            }); 

            function printErrorMsg (msg) {
              $.each( msg, function( key, value ) {
              console.log(key);
                $('.'+key+'_err').text(value);
              });
        }
        });

    </script>


@endsection