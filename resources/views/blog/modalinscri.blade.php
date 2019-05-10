 <!-- Modal -->

                                  <div class="modal fade" id="inscritmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">

                                              <div id="inscription">
                                                  
                                              </div>

                                       <form method="POST" action="{{route('inscription.abbonne') }}">
                                                     @csrf

                                                      
                                             <div class="form-group has-feedback">

                                                <input  id="name-r" type="name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus placeholder="Nom">
                                                <span class="fa fa-user form-control-feedback"></span>

                                                

                                                        <span class="invalid-feedback " role="alert">
                                                            <strong style="color:#f2595c;" id="error-name"></strong>
                                                        </span>
                                                    
                                                              
                                              </div>

                                              <div class="form-group has-feedback">

                                                <input id="email-r" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus placeholder="Email">
                                                <span class="fa fa-envelope form-control-feedback"></span>

                                                

                                                        <span class="invalid-feedback " role="alert">
                                                            <strong style="color:#f2595c;" id="error-email-inscri"></strong>
                                                        </span>
                                                        <p></p>
                                                    
                                                              
                                              </div>


                                              <div class="form-group has-feedback">
                                                <input id="password-r" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de Passe" >
                                                <span class="fa fa-lock form-control-feedback"></span>

                                                
                                                         <span class="invalid-feedback" role="alert">
                                                             <strong style="color:#f2595c;" id="error-password-inscri"></strong>
                                                        </span>
                                                           
                                              </div>


                                             <div class="form-group has-feedback">
                                                <input  id="password-r-c" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirmation-Mot-de-Passe">
                                                <span class="fa fa-lock form-control-feedback"></span>
                                                
                                              </div>



                                          

                                              

                                             
                                            </form>     



                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-primary " id="register">Inscription</button>
                                          </div>
                                        </div>
                                      </div>
                                   </div>

                              <!-- end -->