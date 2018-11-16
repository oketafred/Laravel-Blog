@extends('main')

@section('title')
  Contact
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <hr>
      <form autocomplete="off">

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" name="subject" class="form-control" id="subject">
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" class="form-control" placeholder="Type your message here...!"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Send Message</button>
        </div>

      </form>
    </div>
  </div>
@endsection