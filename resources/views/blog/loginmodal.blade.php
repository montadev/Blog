 <!-- Modal -->

                                  <div class="modal fade"  id="logmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">

                                             
                                            <div class="login-box-body">
                                           

                                                <span id="login-success"></span>
                                        

                                            <form method="POST" action="{{route('login.abbonne') }}">
                                                     @csrf

                                                      @if ($errors->has('email'))

                                                        <span class="invalid-feedback " role="alert">
                                                            <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif


                                              <div class="form-group has-feedback">

                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                <span class="fa fa-envelope form-control-feedback"></span>

                                                 <span class="invalid-feedback " role="alert">
                                                            <strong style="color:#f2595c;" id="error-email"></strong>
                                                        </span>
                                                              
                                              </div>


                                              <div class="form-group has-feedback">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                <span class="fa fa-lock form-control-feedback"></span>
                                                @if ($errors->has('password'))
                                                         <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                             @endif
                                                             <span class="invalid-feedback" role="alert">
                                                             <strong style="color:#f2595c;" id="error-password"></strong>
                                                        </span>
                                              </div>


                                              <div class="row">
                                                <div class="col-xs-8">
                                                  <div class="checkbox icheck">
                                                    <label>
                                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                  </div>
                                                </div>
                                                <!-- /.col -->
                                                
                                                <!-- /.col -->
                                              </div>

                                              <div class="row">

                                                  <div class="col-xs-4">
                                                  <button type="submit" id="liginmodal" class="btn btn-primary btn-block btn-flat">login</button>
                                                </div>

                                                <div class="col-xs-4">
                                                <button type="button" class="btn btn-primary btn-block btn-flat" data-toggle="modal" data-target="#inscritmodal" data-whatever="@mdo" id="hermi">Inscription</button>
                                                </div>



                                              </div>
                                            </form>

                                          
                                            <a href="{{ route('password.request') }}" style="color:#0066ff">I forgot my password</a>
                                </div>
                                               


                                          </div>
                                         
                                        </div>
                                      </div>
                                   </div>

                              <!-- end -->