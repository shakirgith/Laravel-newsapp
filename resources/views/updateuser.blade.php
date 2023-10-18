@extends('layouts.master')
@section('meta_title', 'Add Contact Query Page')
@section('content')
    


<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Update Contact us Queries</h4>
                </div>
               
                    {{-- @if(session()->has('updatemsg'))
                        <div class="alert alert-success">
                        {{session()->get('updatemsg')}}
                        </div>
                        @endif --}}

                <form action="{{ route('update.contactinfo', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control p-4" name="name" value="{{ $data->user_name }}" placeholder="Your Name" required="required"/>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control p-4" name="email" value="{{ $data->user_email }}" placeholder="Your Email" required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control p-4" name="subject" value="{{ $data->user_subject }}" placeholder="Subject" required="required"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="message" value="{{ $data->user_message }}" placeholder="Message" required="required"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                            type="submit">Update</button>
                    </div>
                </form>
                
            </div>
            
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection




























