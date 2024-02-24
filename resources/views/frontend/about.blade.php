@extends('welcome')
@section('frontend')
    <section id="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_content">
                        <h3 class="fw-bold text-light">About Us</h3>
                        <p class="fw-medium text-light mt-5">Home | About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="patients">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="patient_content">
                        <h4 class="mb-5">Special Doctors Are Dedicated to Our Patients</h4>
                        <p class="mb-4 fw-normal lh-base ">Vim et alterum ornatus vivendum, ut mea solum repudiare. His etiam delenit tibique no, ad harum omnes scribentur qui, ne wisi detracto his. Ei movet accusam pri. Ex vel diam quas urbanitas, ne has velit affert habemus. At quis nonumy disputando nec, falli scaevola vel ea. Omittantur concludaturque nam eu, ex est vocent virtute.</p>
                        <p class="mt-4 fw-normal lh-base ">Vim exerci sadipscing in, est simul recteque ei, dictas repudiandae comprehensam cu usu. Te melius veritus tibique pri. Sea nonumy euismod deserunt te. Ad ius nullam malorum assueverit.</p>
                        <p class="mt-4 fw-normal lh-base ">Meliore inimicus duo ut, tation veritus elaboraret eam cu. Cum in alii agam aliquip, aperiam salutandi et per. Ex vis summo probatus ocurreret, ex assum sententiae pri, blandit sensibus moderatius ei eos. Vix nobis phaedrum neglegentur et.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="patient_images">
                        <div class="patient_img px-5">
                            <img height="380px" src="{{ asset('contents/frontend') }}/images/about-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="patient_img_2 mb-5">
                            <img height="320px" src="{{ asset('contents/frontend') }}/images/about-back.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mission">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mission_img">
                        <img src="{{ asset('contents/frontend') }}/images/about -3.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission_content">
                        <h3 class="mb-3 fw-bold">Our Mission</h3>
                        <p class="lh-base mb-2">Lorem ipsum dolor sit amet, per mollis aeterno nostrud in, nam timeam fastidii eu. Commodo nonumes vim eu. Quo indoctum voluptatibus delicatissimi no. Eu cum dico melius. Cum impetus scribentur ad.</p>
                        <p class="lh-base mb-2">Ut alterum dissentiunt eam, nobis audire verterem ut vel. Vidisse persius mea no. Melius imperdiet his at. Ex has zril convenire, cu eos eros dolor, omittam adversarium suscipiantur mea ea.</p>
                        <p class="lh-base mb-2">Est odio quaeque legimus ad. Eu sumo diam fabellas vim. In mea graece suscipiantur, omnis dolorem expetenda in usu, suas oportere theophrastus ei pro. Amet facer eripuit cu his, mea at quis maluisset, ferri perfecto constituam at mea. Nostro eleifend in pri.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="mission_content">
                        <h3 class="mb-3 fw-bold">Our Vision</h3>
                        <p class="lh-base mb-2">Lorem ipsum dolor sit amet, per mollis aeterno nostrud in, nam timeam fastidii eu. Commodo nonumes vim eu. Quo indoctum voluptatibus delicatissimi no. Eu cum dico melius. Cum impetus scribentur ad.</p>
                        <p class="lh-base mb-2">Ut alterum dissentiunt eam, nobis audire verterem ut vel. Vidisse persius mea no. Melius imperdiet his at. Ex has zril convenire, cu eos eros dolor, omittam adversarium suscipiantur mea ea</p>
                        <p class="lh-base mb-2">Est odio quaeque legimus ad. Eu sumo diam fabellas vim. In mea graece suscipiantur, omnis dolorem expetenda in usu, suas oportere theophrastus ei pro. Amet facer eripuit cu his, mea at quis maluisset, ferri perfecto constituam at mea. Nostro eleifend in pri.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="mission_img">
                        <img src="{{ asset('contents/frontend') }}/images/about-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
@endsection
      