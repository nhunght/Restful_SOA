<div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    @if (Auth::guest())
                        <li><a href="{{url('auth/login')}}">Login</a>
                        </li>
                        <li><a href="{{url('register')}}">Register</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                        <li><a href="#">Recently viewed</a>
                        </li>
                        @else
                
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              
                        <li><a href=" {{ URL::to('logout') }} ">Logout</a></li>
                        @endif
                </ul>
            </div>
        </div>

        <!-- <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <?php //echo  Form::open(array('url' => URL::to('auth/login'), 'class' => 'login-form')) ; ?>

                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        <?php //echo Form::close() ?>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div> -->

    </div>