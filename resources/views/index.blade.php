@extends('layout.master')

@section('content')
    <img class="img-fluid" src="{{ asset('public/image/slider1.png') }}" alt="">
    <div class="row py-3" style="background-color: #fff; padding-left:10px;">
        @if(Session::get('group_check')=='jc')
        <div class="row" style="width:100%;">
            
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-7 col-md-pull-5  m-b-120">
                <div class="col-md-9">
                    <h2 class="m-b-40  m-t-80">
                        Easily find quality freelancers
                    </h2>         
                    <p class="text-long m-b-40">
                        On IT Republic you’ll find a range of top talent, from programmers 
                        to designers, writers, customer support reps, and more.
                    </p> 
                    <ul class="text-short m-b-40">
                        <li>
                            <strong>Start by posting a job.</strong> 
                            Tell us about your project and the specific skills required. 
                            <a href="" 
                            target="_blank">Learn how.</a>
                        </li>
                        <li>
                            <strong>IT Republic analyzes your needs.</strong> 
                            Our search functionality uses data science to highlight 
                            freelancers based on their skills, helping you find talent that’s a good match.
                        </li>
                        <li>
                            <strong>We send you a shortlist of likely candidates.</strong> 
                            You can also search our site for talent, and freelancers 
                            can view your job and submit proposals too.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 float-md-right">
                        <img src="{{ asset('public/image/howto1.png') }}"
                        width="100%" alt="">
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-7 float-md-left">
                        <img src="{{ asset('public/image/howto2.jpg') }}"
                        width="65%" alt="">
            </div>
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120" style="padding-top:40px;">
                <h2 class="m-b-40  m-t-80">
                    Hire the best freelancer
                </h2>         
                <p class="text-long m-b-40">
                    Invite favorite candidates to submit bids, then review and hire your favorite.
                </p> 
                <ul class="text-short m-b-40">
                    <li>
                        <strong>Browse profiles.</strong> 
                        View finalists’ IT Republic profiles to see client ratings, portfolios, 
                        Job Success scores, and more. 
                    </li>
                    <li>
                        <strong>Review proposals.</strong> 
                        Our search functionality uses data science to highlight 
                        freelancers based on their skills, helping you find talent that’s a good match.
                        <a href="" 
                        target="_blank">Learn how.</a>
                    </li>
                    <li>
                        <strong>Schedule a chat.</strong> 
                        Ask specific questions, determine who’s the best fit, and contract.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" style="width:100%;">
            
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-7 col-md-pull-5  m-b-120" style="padding-top:40px;">
                <div class="col-md-9">
                    <h2 class="m-b-40  m-t-80">
                        Work efficiently, effectively
                    </h2>         
                    <p class="text-long m-b-40">
                        Each project includes an online workspace shared by your team and your 
                        freelancer, allowing you to:
                    </p> 
                    <ul class="text-short m-b-40">
                        <li>
                            <strong>Send and receive files.</strong> 
                            Deliver digital assets in a secure environment.</a>
                        </li>
                        <li>
                            <strong>Share feedback in real time.</strong> 
                            Use IT Republic Messages to communicate via text, chat, or video.
                            <a href="" 
                            target="_blank">Learn how.</a>
                        </li>
                        <li>
                            <strong>Use our mobile app.</strong> 
                            Many features can be accessed on your mobile phone when on the go.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 float-md-right">
                        <img src="{{ asset('public/image/howto3.jpg') }}"
                        width="100%" alt="">
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-7 float-md-left">
                        <img src="{{ asset('public/image/howto5.jpg') }}"
                        width="80%" alt="">
            </div>
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120" style="padding-top:20px;">
                <h2 class="m-b-40  m-t-80">
                    Pay easily, with peace of mind
                </h2>         
                <p class="text-long m-b-40">
                    Pay your freelancer by the hour, or a fixed price for the entire project. 
                    On fixed-price jobs, use our licensed escrow service to release funds as pre-set milestones are met.
                </p> 
                <ul class="text-short m-b-40">
                    <li>
                        <strong>Simplified global payments.</strong> 
                        We deliver payments to freelancers in over 170 countries.
                    </li>
                    <li>
                        <strong>Includes IT Republic Payment Protection.</strong> 
                        Only pay for work you authorize.
                    </li>
                    <li>
                        <strong>Invoicing and reporting.</strong> 
                        Access your invoices and transaction history on IT Republic.
                    </li>
                </ul>
            </div>
        </div>
        @elseif(Session::get('group_check')=='jf')
        <div class="row" style="width:100%;">
            
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-7 col-md-pull-5  m-b-120">
                <div class="col-md-9">
                    <h2 class="m-b-40  m-t-80">
                        Find rewarding projects
                    </h2>         
                    <p class="text-long m-b-40">
                        IT Republic is a great place to find more clients, 
                        and to run and grow your own freelance business.
                    </p> 
                    <ul class="text-short m-b-40">
                        <li>
                            <strong>Freedom to work on ideal projects.</strong> 
                            On IT Republic, you run your own business and choose your own clients and projects. 
                            Just complete your profile and we’ll highlight ideal jobs. 
                            Also search projects, and respond to client invitations.
                        </li>
                        <li>
                            <strong>Wide variety and high pay.</strong> 
                            Clients are now posting jobs in hundreds of skill categories, 
                            paying top price for great work.
                        </li>
                        <li>
                            <strong>More and more success.</strong> 
                            The greater the success you have on projects, 
                            the more likely you are to get hired by clients that use IT Republic.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 float-md-right">
                        <img src="{{ asset('public/image/howto1.png') }}"
                        width="100%" alt="">
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-7 float-md-left">
                        <img src="{{ asset('public/image/howto2.jpg') }}"
                        width="65%" alt="">
            </div>
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120" style="padding-top:40px;">
                <h2 class="m-b-40  m-t-80">
                    Get hired quickly
                </h2>         
                <p class="text-long m-b-40">
                IT Republic makes it easy to connect with clients and begin doing great work.
                </p> 
                <ul class="text-short m-b-40">
                    <li>
                        <strong>Streamlined hiring.</strong> 
                        IT Republic’s sophisticated algorithms highlight projects you’re a great fit for.
                    </li>
                    <li>
                        <strong>Top Rated and Rising Talent programs.</strong> 
                        Enjoy higher visibility with the added status of prestigious programs.
                    </li>
                    <li>
                        <strong>Do substantial work with top clients.</strong> 
                        IT Republic pricing encourages freelancers to use IT Republic for repeat relationships with their clients.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" style="width:100%;">
            
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-7 col-md-pull-5  m-b-120" style="padding-top:40px;">
                <div class="col-md-9">
                    <h2 class="m-b-40  m-t-80">
                        Work efficiently, effectively
                    </h2>         
                    <p class="text-long m-b-40">
                    With IT Republic, you have the freedom and flexibility to control when, where, 
                    and how you work. Each project includes an online 
                    workspace shared by you and your client, allowing you to:
                    </p> 
                    <ul class="text-short m-b-40">
                        <li>
                            <strong>Send and receive files.</strong> 
                            Deliver digital assets in a secure environment.</a>
                        </li>
                        <li>
                            <strong>Share feedback in real time.</strong> 
                            Use IT Republic Messages to communicate via text, chat, or video.
                        </li>
                        <li>
                            <strong>Use our mobile app.</strong> 
                            Many features can be accessed on your mobile phone when on the go.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 float-md-right">
                        <img src="{{ asset('public/image/howto3.jpg') }}"
                        width="100%" alt="">
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-7 float-md-left">
                        <img src="{{ asset('public/image/howto5.jpg') }}"
                        width="80%" alt="">
            </div>
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120" style="padding-top:20px;">
                <h2 class="m-b-40  m-t-80">
                    Get paid on time
                </h2>         
                <p class="text-long m-b-40">
                All projects include IT Republic Payment Protection — 
                helping ensure that you get paid for all work successfully completed through 
                the freelancing website.
                </p> 
                <ul class="text-short m-b-40">
                    <li>
                        <strong>All invoices and payments happen through IT Republic.</strong> 
                        Count on a simple and streamlined process.
                    </li>
                    <li>
                        <strong>Hourly and fixed-price projects.</strong> 
                        For hourly work, submit timesheets through IT Republic. For fixed-price jobs, 
                        set milestones and funds are released via IT Republic escrow features.
                    </li>
                    <li>
                        <strong>Multiple payment options.</strong> 
                        Choose a payment method that works best for you, 
                        from direct deposit or PayPal to wire transfer and more.
                    </li>
                </ul>
            </div>
        </div>
        @else
        <div class="row" style="width:100%;">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('public/image/land1.jpg') }}" width="250px" height="180px" alt="">
            <h4>FIND</h4>
            <p>Post a job to tell us about your project. 
            We'll quickly match you with the right freelancers.</p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('public/image/land2.png') }}" width="250px" height="180px" alt="">
            <h4>HIRE</h4>
            <p>Browse profiles, reviews, and proposals then interview top candidates. 
            Hire a favorite and begin your project</p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('public/image/land3.jpg') }}" width="250px" height="180px" alt="">
            <h4>WORK</h4>
            <p>Use the IT Republic platform to chat, share files, and 
            collaborate from your desktop or on the go.</p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('public/image/land4.jpeg') }}" width="250px" height="180px" alt="">
            <h4>PAY</h4>
            <p>Invoicing and payments happen through IT Republic. 
            With IT Republic Protection, only pay for work you authorize.</p>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="creator-tab" data-toggle="tab" href="#creator" role="tab" aria-controls="creator" aria-selected="true">I'm Job Creator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="finder-tab" data-toggle="tab" href="#finder" role="tab" aria-controls="finder" aria-selected="false">I'm Job Finder</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="creator" role="tabpanel" aria-labelledby="creator-tab">
    Job creator
  </div>
  <div class="tab-pane fade" id="finder" role="tabpanel" aria-labelledby="finder-tab">
    Job Finder
  </div>
</div>
        @endif
    </div>
@endsection