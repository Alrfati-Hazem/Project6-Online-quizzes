@extends("site.layout.master")
@section("head")
<link rel="stylesheet" href="{{asset("site/css/contact.css")}}" />
@endsection
@section("content")
    <div class="container contact">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-info d-flex flex-column align-items-center">
            <img
              src="https://image.ibb.co/kUASdV/contact-image.png"
              width="70px"
              alt="image"
            />
            <h2 class="mb-5">Contact Us</h2>
            <h4 class="text-center">We would love to hear from you !</h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="contact-form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="fname">
                First Name:
              </label>
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  id="fname"
                  placeholder="Enter First Name"
                  name="fname"
                />
                <div class="nameReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lname">
                Last Name:
              </label>
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  id="lname"
                  placeholder="Enter Last Name"
                  name="lname"
                />
                <div class="lnameReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <label id="Email" class="control-label col-sm-2" for="email">
                Email:
              </label>
              <div class="col-sm-10">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter email"
                  name="email"
                />
                <div class="emailReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <label id="Comment" class="control-label col-sm-2" for="comment">
                Comment:
              </label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <div class="commentReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="sub-button btn btn-default mt-3">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
