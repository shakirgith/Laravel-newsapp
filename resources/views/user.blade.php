@extends('layouts.master')
@section('meta_title', 'Add User with File Upload Query Page')
@section('content')
    


<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Add User with File Queries</h4>
                </div>
               
                    @if(session()->has('msg'))
                        <div class="alert alert-success">
                        {{session()->get('msg')}}
                        </div>
                        @endif


                        {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                      @endif
                      @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif --}}

                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name" value="{{old('name')}}" />
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}" />
                        @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                       
                      
                        <input class="form-control" type="file" name="file" id="file" />
                        @error('file')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="desc" id="desc" placeholder="Message" value="{{old('desc')}}"></textarea>
                        @error('desc')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                            type="submit">Send Message</button>
                    </div>
                </form>
                
            </div>
            
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection



























