@extends('main.layouts.app')



@section('content')
    
  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Toronto, <em>Canada</em></span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Melbourne, <em>Australia</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Miami, <em>South Florida</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

 

  <div class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="hero-info">
            <h2>Connecting Lives,<br> Building  Futures” with a brief introduction to Life Connect</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="right-image">
            <img src="assets/img/hero-5.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class=" border w-50">
  <div class="section-box">
    <div class="container">
      <div class="row">
        <div class="col-md-3 box">
          <a class="btn btn-color" href="#education">Education</a>
        </div>
        <div class="col-md-3 box">
          <a class="btn btn-color" href="#health">Health</a>
        </div>
        <div class="col-md-3 box">
          <a class="btn btn-color" href="#employment">Employment</a>
        </div>
      </div>
    </div>
  </div>


  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/img/feature1.jpg" alt="">
            
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h1>| Features</h6>
              <div class="info-table">
                <ul>
                  <li>
                    <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                    <h4>Accessible Learning</h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                    <h4>Remote Health Support</h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                    <h4>Career Guidance</h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                    <h4>Community Resources</h4>
                  </li>
                </ul>
              </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>



  <section id="education" class="section">
    <div class="container">
        <div class="row gap-5">
            <div class="col-lg-6">
              
              <div class="section-heading">
                <h1>| Education</h1>
                  <div class="info-table">
                    <ul>
                      <li>
                        <span><ion-icon class="icon" name="laptop-outline"></ion-icon></span>
                        <h4>E-Learning Modules <br> <span>Courses for all ages, covering essential topics. Highlight interactive features like videos and quizzes.</span></h4>
                      </li>
                      <li>
                        <span><ion-icon class="icon" name="folder-open-outline"></ion-icon></span>
                        <h4>Resource Libraryt<br> <span>Searchable library with textbooks, articles, and educational videos. Include download options.</span></h4>
                      </li>
                      <li>
                        <ion-icon class="icon" name="people-circle-outline"></ion-icon>
                        <h4>Tutoring and Mentorship<br> <span>Option to book tutoring or mentorship sessions with qualified educators.</span></h4>
                      </li>
                      <li>
                        <ion-icon class="icon" name="school-outline"></ion-icon>
                        <h4>Scholarship and Internship Listings<br> <span>Regularly updated listings with filters for scholarships and internships.</span></h4>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="row">
                <div class="col-lg-12">
                  <img src="assets/img/education1.jpg" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6" style="padding-right:0px">
                  <img  src="assets/img/education3.jpg" alt="">
                </div>
                <div class="col-lg-6" style="padding-left:0px">
                  <img src="assets/img/education2.jpg" alt="">
                </div>
              </div>
            </div>
        </div>
    </div>
  </section>




<section id="health">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="assets/img/health1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h1>| Health</h1>
                        <div class="row health-section">
                          <!-- start -->
                          <div class="col-lg-6">
                            <div class="detail-box rounded-2">
                              <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                                <h4>Telemedicine Services </h4>
                                <div class="col-lg-8 ">
                                  <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                                </div>
                                <div class="col-lg-4 align-content-center justify-content-center">
                                  <span><ion-icon class="icon" name="videocam-outline"></ion-icon></span>

                                </div>
                              </div>
                            </div>
                            <!-- <hr class="w-50 border"> -->
                          </div>
                          <!-- end -->
                          <!-- start -->
                          <div class="col-lg-6">
                            <div class="detail-box rounded-2">
                              <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                                <h4>Health Information Hub </h4>
                                <div class="col-lg-8 ">
                                  <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                                </div>
                                <div class="col-lg-4 align-content-center justify-content-center">
                                  <span><ion-icon class="icon" name="information-circle-outline"></ion-icon></span>

                                </div>
                              </div>
                            </div>
                            <!-- <hr class="w-50 border"> -->
                          </div>
                          <!-- end -->
                        </div>
                        <div class="row">
                          <!-- start -->
                          <div class="col-lg-6">
                            <div class="detail-box rounded-2">
                              <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                                <h4>Symptom Checker</h4>
                                <div class="col-lg-8 ">
                                  <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                                </div>
                                <div class="col-lg-4 align-content-center justify-content-end">
                                  <span><ion-icon class="icon" name="thermometer-outline"></ion-icon></span>

                                </div>
                              </div>
                            </div>
                            <!-- <hr class="w-50 border"> -->
                          </div>
                          <!-- end -->
                          <!-- start -->
                          <div class="col-lg-6">
                            <div class="detail-box rounded-2">
                              <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                                <h4>Wellness Programs</h4>
                                <div class="col-lg-8 ">
                                  <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                                </div>
                                <div class="col-lg-4 align-content-center justify-content-center">
                                  <span><ion-icon class="icon" name="fitness-outline"></ion-icon></span>

                                </div>
                              </div>
                            </div>
                            <!-- <hr class="w-50 border"> -->
                          </div>
                          <!-- end -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<section id="employment">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="assets/img/employment1.png" alt="">
            </div>
            <div class="col-lg-7">
                <div class="section-heading">
                    <h1>| Employment</h1>
                    <div class="row employment-section">
                      <!-- start -->
                      <div class="col-lg-6">
                        <div class="detail-box rounded-2">
                          <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                            <h4>Job Board</h4>
                            <div class="col-lg-8 ">
                              <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                            </div>
                            <div class="col-lg-4 align-content-center justify-content-center">
                              <span><ion-icon class="icon" name="briefcase-outline"></ion-icon></span>

                            </div>
                          </div>
                        </div>
                        <!-- <hr class="w-50 border"> -->
                      </div>
                      <!-- end -->
                      <!-- start -->
                      <div class="col-lg-6">
                        <div class="detail-box rounded-2">
                          <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                            <h4>Skill-Building Resources </h4>
                            <div class="col-lg-8 ">
                              <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                            </div>
                            <div class="col-lg-4 align-content-center justify-content-center">
                              <span><ion-icon class="icon" name="school-outline"></ion-icon></span>

                            </div>
                          </div>
                        </div>
                        <!-- <hr class="w-50 border"> -->
                      </div>
                      <!-- end -->
                    </div>
                    <div class="row">
                      <!-- start -->
                      <div class="col-lg-6">
                        <div class="detail-box rounded-2">
                          <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                            <h4>Career Counseling</h4>
                            <div class="col-lg-8 ">
                              <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                            </div>
                            <div class="col-lg-4 align-content-center justify-content-center">
                              <span><ion-icon class="icon" name="person-circle-outline"></ion-icon></span>

                            </div>
                          </div>
                        </div>
                        <!-- <hr class="w-50 border"> -->
                      </div>
                      <!-- end -->
                      <!-- start -->
                      <div class="col-lg-6">
                        <div class="detail-box rounded-2">
                          <div class="row py-3 px-3 d-flex align-content-center justify-content-center">
                            <h4>Entrepreneurship Resources</h4>
                            <div class="col-lg-8 ">
                              <p>Offer telemedicine services, allowing patients to connect with doctors remotely.</p>
                            </div>
                            <div class="col-lg-4 align-content-center justify-content-center">
                              <span><ion-icon class="icon" name="flashlight-outline"></ion-icon></span>

                            </div>
                          </div>
                        </div>
                        <!-- <hr class="w-50 border"> -->
                      </div>
                      <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<div class="contact-page section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h6>| Contact Us</h6>
          <h2>Get In Touch</h2>
        </div>

        <div class="contact-image">

        </div>
       
      </div>
      <div class="col-lg-6">
        <form id="contact-form" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <fieldset>
                <label for="name">Full Name</label>
                <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="subject">Subject</label>
                <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

@endsection

