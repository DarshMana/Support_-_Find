@extends('layouts.app')

@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<body style='background-color:#22223a'>

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="row justify-content-center">
                <h1 style="color:#999999"center><b>How Can We Help You?</b></h1>
                </div>
        </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-sm-10 row justify-content-right">
            <div class="row justify-content-center">


                <div class="container" >
                  <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              What is Support&Fynd?
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Support&Fynd helps people to find different types of professionals and non-professionals and get their required services done.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What happens after I submit the required service?
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Support&Fynd will share your details with professionals/non-professionals who provide the services you requested. They will connect with you by phone or email to discuss pricing, venue and scheduling. You can review the professionals/non-professionals you hire, track the locations and give feedbacks.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Do I need to pay to use Support&Fynd to contact professions?
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          There is no cost to pay to use Support&Fynd.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              How does Support&Fynd get paid if this is a free service?
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body">
                              Service professionals pay, advertising fees to participate in Support&Fynd’s network and also to popup their details in the site. These fees do not affect your estimate.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How can I contact the professionals/non-professionals?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                You must register as a member in Support&Fynd to review contact details of professionals/non-professionals. If it is an urgent matter then you can directly send them a message using the chat feature on the website and communicate.
                            </div>
                          </div>
                        </div>
                          <div class="card">
                              <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How do I review a professional/non-professional?
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    You can select the required service category and select the professional/non-professional from list and review them
                                </div>
                              </div>
                          </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                      Will Support&Fynd will cancel member status of a profession upon a customer complaint?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                  <div class="card-body">
                                      Customer feedback is vital to the quality of service which member professions provide.We evaluate the both sides of the situation and then make a final decision. We reserve the right to remove a service professional from our network against any undesirable leaning that occurs.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                  <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                          When do I submit feedbacks?
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Once your required service is complete, you can always visit the Support&Fynd website and give feedbacks on your selected professional’ service.
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            What are ratings?
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                      <div class="card-body">
                                          Your ratings help us to keep track of the quality of services provided by our memberprofessionals. It will be helpful for other consumers to make the right choice and as wellas to improve the quality of service we offer.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                      <div class="card-header" id="headingTen">
                                        <h5 class="mb-0">
                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            How do I join Support&Fynd as a service professional?
                                          </button>
                                        </h5>
                                      </div>
                                      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                        <div class="card-body">
                                            For all service professionals, Support&Fynd is free to join. You can create an account by clicking the registration button. Build your profile including your basic details and career experiences. Then, start receiving job requests without any cost.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingEleven">
                                          <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                              I live outside the Sri Lanka; can I register as a professional?
                                            </button>
                                          </h5>
                                        </div>
                                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                                          <div class="card-body">
                                              We only accept Pros from the Sri Lanka.
                                          </div>
                                        </div>
                                      </div>
                                      
                             
                  </div>
                </div>
              </div>

        </div>
    </div>
</div>


<br><br><br><br>
</body>

@endsection