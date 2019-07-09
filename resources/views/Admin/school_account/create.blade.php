@extends('layouts.admin.app')

@section('create_school_nav', 'active')

@section('title', 'Admin | School Accounts')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">Create Account</h4>
                            <p class="card-category">Create a profile</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('admin/school_account') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                   class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            @if($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                   class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            @if($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" value="{{ old('password') }}"
                                                   class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                            @if($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Confirm Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Package</label>
                                            <div class="select-menu">
                                                <select class="selecter"
                                                        class="form-control form-control-sm {{ $errors->has('package') ? ' is-invalid' : '' }}">
                                                    <option selected="selected">Choose...</option>
                                                    <option value="free" {{ old('package') === 'free' ? 'selected' : '' }}>free</option>
                                                    <option value="silver" {{ old('package') === 'silver' ? 'selected' : '' }}>Silver
                                                    </option>
                                                    <option value="golden" {{ old('package') === 'golden' ? 'selected' : '' }}>Golden
                                                    </option>
                                                    @if($errors->has('package'))
                                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('package') }}</strong>
                                </span>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">School Type</label>
                                            <div class="select-menu">
                                                <select class="selecter" name="school_type"
                                                        class="form-control form-control-sm {{ $errors->has('school_type') ? ' is-invalid' : '' }}">
                                                    <option>Choose...</option>
                                                    <option value="driving" {{ old('school_type') === 'driving' ? 'selected' : '' }}>
                                                        Driving
                                                    </option>
                                                    <option value="theory" {{ old('school_type') === 'theory' ? 'selected' : '' }}>Theory
                                                    </option>
                                                    <option value="both" {{ old('school_type') === 'both' ? 'selected' : '' }}>Both</option>
                                                    @if($errors->has('school_type'))
                                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('school_type') }}</strong>
                                </span>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group width100">
                                            <label class="bmd-label-floating">Package date</label>
                                            <div class="marginex12"></div>
                                            <input type="text" class="date-view1" name="date"
                                                   class="form-control form-control-sm {{ $errors->has('date') ? ' is-invalid' : '' }}"
                                                   value="01/01/2018 - 01/15/2018"/>
                                            @if($errors->has('date'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="marginex8"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating width100">Phone number</label>
                                            <input type="number" name="phone"
                                                   class="form-control form-control-sm {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                                            @if($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nationalities</label>
                                            <div class="select-menu">
                                                <select class="selecter" name="nationalities[]" multiple="multiple"
                                                        class="form-control form-control-sm {{ $errors->has('nationalities') ? ' is-invalid' : '' }}">
                                                    <option>All</option>
                                                    @foreach(\App\Country::all() as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('nationalities'))
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nationalities') }}</strong>
                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Type in an address</label>
                                            <input id="geocomplete" name="address"
                                                   class="form-control form-control-sm {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                                   type="text" placeholder=""
                                                   value=""/>
                                            @if($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                            @endif
                                            <input id="find" class="search" type="button" value="find"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">latitude</label>
                                            <input class="form-control form-control-sm {{ $errors->has('latitude') ? ' is-invalid' : '' }}"
                                                   name="latitude" type="text" value="">
                                            @if($errors->has('latitude'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('latitude') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">longitude</label>
                                            <input class="form-control form-control-sm {{ $errors->has('longitude') ? ' is-invalid' : '' }}"
                                                   name="longitude" type="text" value="">
                                            @if($errors->has('longitude'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('longitude') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                        <div class="mb30"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="map_canvas"></div>
                                        <button type="submit" class="btn btn-primary pull-right">create Profile</button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
