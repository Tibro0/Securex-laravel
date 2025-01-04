@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Contact Form Message</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Contact Form Message</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Contact Form Message</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.contact-form-message.update', $contactFormMessage->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" name="your_name" value="{{ $contactFormMessage->your_name }}"
                            class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="text" name="your_email" value="{{ $contactFormMessage->your_email }}"
                            class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" value="{{ $contactFormMessage->subject }}" class="form-control"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label>message</label>
                        <textarea name="message" class="form-control" readonly>{!! $contactFormMessage->message !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Seen</label>
                        <select name="seen" class="form-control">
                            <option @selected($contactFormMessage->seen === 'yes') value="yes">Yes</option>
                            <option @selected($contactFormMessage->seen === 'no') value="no">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
