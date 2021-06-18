@extends('layouts.master')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')

<main>
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>
    </main>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>How can we help?</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">I already registered with E-BAYAR Melaka, do i have to register again when using this apps? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  You dont have to register again and may use your existing ID and Password.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Why do I need to fill up all the details? Is there any charges applied for registration? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  We only need basic information about yourself before you can start using the service from
                   E-BAYAR KERAJAAN NEGERI MELAKA portal. You will need to provide the correct information 
                   such as your Full Name, ID number (MyKad / Passport / KadKuasa), Mobile number and Email
                    address upon registration. This is important should we need to contact you in the future
                     for reference purposes.                
                </p>
                <p>
                  And no, there are no charges applied for you to register with E-BAYAR KERAJAAN NEGERI MELAKA. It’s FREE!
                </p>
                <p>
                  You may want to check our Privacy Policy statement to view our policy on how we keep your information within 
                  E-BAYAR KERAJAAN NEGERI MELAKA portal.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Is my payment made through MEPS FPX safe? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  FPX leverages on the Internet banking services of participating banks and provides fast, 
                  secure, reliable, real-time online payment processing. FPX provides a complete end-to-end
                   business transaction, resourceful payment records, simplified reconciliation and reduced
                    risks as fund movements are between established financial institutions. Rest assured, 
                    FPX uses authentication and certification to ensure transaction is secured.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Are there any charges for payments via FPX? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Bank charge of RM 0.50 will be borne by account holder for payment through individual account & RM 1 for company account.
                </p>
              </div>
            </li>

            

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

@include('footer')
@endsection