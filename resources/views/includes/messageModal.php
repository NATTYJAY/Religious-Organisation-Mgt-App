<div class="modal fade text-left" id="qmessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                          aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header bg-success white">
                                  <h4 class="modal-title" id="myModalLabel9"><i class="typcn typcn-document-add"></i>Send Message</h4> <h5 class="badge badge-info">TO</h5><h2 class="badge badge-warning name"></h2>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form id="messageform" method="POST">
                                  <div class="modal-body">
                                    <!--  <input type="text" class="form-control" name="_token" value="{{csrf_token()}}"> -->

                                                                            
                                    <!--  <input type="hidden" class="form-control" id="ff" name="_method" value="POST"> -->
                                  <!--   <fieldset class="form-group floating-label-form-group">
                                      <label for="email"> <h5><i class="typcn typcn-document-add"></i>Select EMployee ID</h5></label>
                                      <select class="select2 form-control" id="id_h5_single" style="width:100%;">
                                                <option value="">Susan</option>
                                                <option value="">Mfoniso</option>
                                                <option value="">Sylvia</option>
                                      </select>
                                    </fieldset>
                                     <div class="form-group pb-1">
                                          <input type="checkbox" id="switchery" class="switchery" checked/>
                                          <label for="switchery"> <h5><i class="fa fa-arrow-left"></i>Send To All</h5></label>
                                    </div> -->
                                     <input type="text" hidden="hidden"  class="form-group" id="phone" name="phone" />
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="title1"><h5><i class="typcn typcn-message"></i>Message</h5></label>
                                      <textarea class="form-control" id="title1" rows="3" name="messagesend" placeholder="Type your Message Here"></textarea>
                                    </fieldset>
                                  </div>
                                  <div id="messagealert" role="alert">
                                  </div>
                                  <div class="modal-footer">
                                    <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                                    value="close" id="close">
                                    <button type="submit" class="btn btn-success btn-lg" id="send">Send <i class="typcn typcn-document-add"></i></button>
                                    <button type="button" class="btn btn-primary btn-lg" hidden="hidden" id="show" disabled="disabled"><b>Processing Please Wait...</b></button>
                                  </div>
                                </form>
                              </div>
                            </div>
                      </div>