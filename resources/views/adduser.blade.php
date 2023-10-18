@extends('layouts.master')
@section('meta_title', 'Add Contact Query Page')
@section('content')
    


<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Add Contact us Queries</h4>
                </div>
               
                    @if(session()->has('msg'))
                        <div class="alert alert-success">
                        {{session()->get('msg')}}
                        </div>
                        @endif

                <form action="{{ route('addContacts') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control p-4" name="name" placeholder="Your Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control p-4" name="subject" placeholder="Subject" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" name="file" id="chooseFile" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="message" placeholder="Message" ></textarea>
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




























