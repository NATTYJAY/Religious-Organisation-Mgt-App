$(document).ready(function(){

    $(document).on('click', '.messaage', function(){
            id_r = $(this).attr("id");
              $.get('/messages/'+id_r, function (datas) {
                $('#phone').val(datas.get['phone']);
                 $('.name').text(datas.get['name']);
                 $('#qmessage').modal('show');
                });
  });

     $('#wizard3').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            transitionEffect: "fade",
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            stepsOrientation: 1,
            labels: {
                finish: "Finish"
            },
            onFinished: function (event, currentIndex) {
                if(currentIndex == 6){
                    $('#wizard3').find('a[href="#finish"]').remove();
                    $('#wizard3 .actions li:first-child').append('<div class="row"><div class="col-md-12"><br><button type="submit" id="userBtxlogin1" class = "btn-lg btn-success col-md-12">Submit Now</button> <button type="button" class="btn btn-default col-md-12 round btn-min-width mr-1 mb-1" hidden="hidden" id="logremove1"><b>Processing Please Wait...</b></button></div></div>');
                    $('#formcreated').on('submit',function(e){
                         e.preventDefault();
                                 $.ajax({  
                                url:"/services",  
                                type: "POST",  
                                data: new FormData(this), 
                                cache:false, 
                                contentType: false,  
                                processData:false,
                                dataType : "Json",
                                beforeSend: function() {
                                    $('#userBtxlogin1').attr("hidden", "hidden");
                                    $('#logremove1').removeAttr('hidden');                              
                                },
                                complete: function(){ 
                                    $('#userBtxlogin1').removeAttr("hidden");
                                    $('#logremove1').attr("hidden", "hidden");
                                },  
                                success: function(data){  
                                    //console.log(data.success);
                                   if(data.success == 11){
                                        $('#msg').addClass('alert alert-success textcenter');
                                        $('#msg').html('<strong>Success ! Data sent for review! Please View,Confirm and Save <a href="/services">here</a> </strong> ');
                                        setTimeout(function(){
                                            $('#msg').removeClass('alert alert-danger textcenter');
                                            $('#msg').html('');
                                            location.reload();
                                                }, 
                                        5000);
                                   }else if(data.success == 12){
                                        $('#msg').addClass('alert alert-danger textcenter');
                                        $('#msg').html('<strong>Data could not be sent !</strong> ');
                                   }

                                   else{
                                        $('#msg').addClass('alert alert-danger textcenter');
                                        $('#msg').html('<strong>Data Could not be Sent !. Please try again later</strong> ');
                                   }
                                }  
                           });

                           
                    });
                }else{
                    //$('#wizard3').find('<button type="button" id="submit" class = "btn btn-info">Submit Now !</button>').remove();
                }
            }
        });
/*Editing wizard form here*/
$('#wizard5').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            transitionEffect: "fade",
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            stepsOrientation: 1,
            labels: {
                finish: "Finish"
            },
            onFinished: function (event, currentIndex) {
                if(currentIndex == 6){
                    $('#wizard5').find('a[href="#finish"]').remove();
                    $('#wizard5 .actions li:first-child').append('<div class="row"><div class="col-md-12"><br><button type="submit" class = "btn-lg btn-success col-md-12" id="userBtxlogin">Update Data !</button><button type="button" class="btn btn-default col-md-12 round btn-min-width mr-1 mb-1" hidden="hidden" id="logremove"><b>Processing Please Wait...</b></button></div></div>');
                    $('#formedited').on('submit',function(e){
                         e.preventDefault();
                         // token = $('#_token').val();

                         idr = $('#idrpp').val();
                                 $.ajax({  
                                url:"/services/"+idr,  
                                type: "POST",  
                                data: new FormData(this), 
                                contentType: false,  
                                processData:false,
                                dataType : "Json", 
                                cache:false, 
                                 beforeSend: function() {
                                    $('#userBtxlogin').attr("hidden", "hidden");
                                    $('#logremove').removeAttr('hidden');                              
                                },
                                complete: function(){ 
                                    $('#userBtxlogin').removeAttr("hidden");
                                    $('#logremove').attr("hidden", "hidden");
                                },
                                success: function(data){
                               if(data.success == 55){
                                    $('#msg2').addClass('alert alert-success textcenter');
                                    $('#msg2').html('<strong>Data Successfully Saved !</strong> ');
                                    setTimeout(function(){
                                        $('#msg2').removeClass('alert alert-danger textcenter');
                                        $('#msg2').html('');
                                        window.location.href = '/services';
                                            }, 
                                    3000);
                               }else if(data.success == 66){
                            $('#msg2').addClass('alert alert-danger mb-2');
                            $('#msg2').html('<p><b>Application Failed. Try Again Later</b></p>');
                            }else if(data.success == 442){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b>SMS Sending Failed</b></p>');
                                setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success == 443){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b>Invalid username/password combination</b></p>');
                                setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success == 444){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Credit exhausted!</b></p>');
                                setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success == 445){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b>Gateway unavailable</b></p>');
                                setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success == 446){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Invalid schedule date format</b></p>');
                                setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success == 447){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Unable to schedule</b></p>');
                                setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==448){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Username is empty</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==449){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b>Password is empty</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==450){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Recipient is empty</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==451){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Message is empty !</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==452){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Sender is empty !</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==453){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> One or more required fields are empty!</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==454){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b> Sender ID not allowed!</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.success ==455){
                                $('#msg2').addClass('alert alert-danger mb-2');
                                $('#msg2').html('<p><b>Check Your Internet Connection!</b></p>');
                                    setTimeout(function(){$('#msg2').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }
                                }  
                           });
                    });
                }else{
                    //$('#wizard3').find('<button type="button" id="submit" class = "btn btn-info">Submit Now !</button>').remove();
                }
            }
        });

                    $('#acceptform').on('submit',function(e){
                         e.preventDefault();
                         token = $('#_token').val();
                         id_ = $('#id_serve').val();
                                 $.ajax({  
                                url:"/guest/"+id_,  
                                type: "POST",  
                                data: new FormData(this), 
                                contentType: false,  
                                processData:false,
                                dataType : "Json",  
                                success: function(data){
                                   if(data.success == 'goodone'){
                                        $('#msg4').addClass('alert alert-success textcenter');
                                        $('#msg4').html('<strong> Confirmed !</strong> ');
                                        setTimeout(function(){
                                            $('#msg4').removeClass('alert alert-danger textcenter');
                                            $('#msg4').html('');
                                            window.location.href = '/guest';
                                                }, 
                                        2000);
                                   }else{
                                        $('#msg4').addClass('alert alert-danger textcenter');
                                        $('#msg4').html('<strong>Unconfirmed !. Please try again later</strong> ');
                                   }
                                }  
                           });
                    });


                      $('#messageform').on('submit',function(e){
                         e.preventDefault();
                         $.ajaxSetup({ 
                            headers: { 
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') 
                                    }
                             });
                                 $.ajax({  
                                url:"/mssg",  
                                type: "POST",  
                                data: new FormData(this), 
                                contentType: false,  
                                processData:false,
                                dataType : "Json",  
                                beforeSend: function() {
                                    $('#send').attr("hidden", "hidden");
                                    $('#close').attr("hidden", "hidden");
                                    $('#show').removeAttr('hidden');                              
                                },
                                complete: function(){ 
                                    $('#send').removeAttr("hidden");
                                     $('#close').removeAttr('hidden');
                                    $('#show').attr("hidden", "hidden");
                                },
                                success: function(data){
                         if(data.vomit == 4411){
                        $('#messagealert').addClass('alert alert-success textcenter');
                        $('#messagealert').html('<strong> Message Sent !</strong> ');
                        setTimeout(function(){
                            $('#messagealert').removeClass('alert alert-danger textcenter');
                            $('#messagealert').html('');
                            // window.location.href = '/services';
                                }, 
                        3000);
                           }else if(data.vomit == 4421){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>SMS Sending Failed</b></p>');
                                setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit == 4431){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b> Invalid username/password combination</b></p>');
                                setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit == 4441){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b> Credit exhausted!</b></p>');
                                setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit == 4451){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Gateway unavailable</b></p>');
                                setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit == 4461){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Invalid schedule date format</b></p>');
                                setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit == 4471){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b> Unable to schedule!</b></p>');
                                setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit ==4481){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Username is empty!</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit ==4491){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Password is empty !</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit ==4501){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b> Recipient is empty !</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit ==4511){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b> Message is empty !</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit ==4521){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Sender is empty !</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }else if(data.vomit ==4531){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>One or more required fields are empty !</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }
                            else if(data.vomit ==4541){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Sender ID not allowed !</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }
                            else if(data.vomit ==4551){
                                $('#messagealert').addClass('alert alert-danger mb-2');
                                $('#messagealert').html('<p><b>Something Went Wrong. please check Your Internet Connection!</b></p>');
                                    setTimeout(function(){$('#messagealert').removeClass('alert alert-danger mb-2').html('');}, 6000);
                            }
                                }  
                           });
                    });
});