@extends('layouts.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add a user</div>
            <div class="panel-body">
                <div class="col-md-6">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input id="first_name" class="form-control" type="text" name="first_name"
                                   :value="old('first_name')" required autofocus autocomplete="first_name"/>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" class="form-control" type="text" name="last_name"
                                   :value="old('last_name')" required autofocus autocomplete="last_name"/>
                        </div>

                        <div class="form-group">
                            <label for="tel">Telephone</label>
                            <input id="tel" class="form-control" type="text" name="tel"
                                   :value="old('tel')" required autofocus autocomplete="tel"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email"
                                   :value="old('email')" required/>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address"
                                   :value="old('address')" required/>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password"
                                   required autocomplete="new-password"/>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" class="form-control" type="password"
                                   name="password_confirmation" required autocomplete="new-password"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
@endsection()
