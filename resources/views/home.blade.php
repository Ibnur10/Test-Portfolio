@extends('layouts.app')

@section('title', 'Home')

@section('content')
<header class="bg-primary py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Halo Nama Saya Ibnu Rahman</h1>
                    <p id="typing-animation" class="lead text-white mb-4"></p>
                    <script>
                        const sentences = [
                            "Saya adalah mahasiswa Jurusan Teknik Informatika.",
                            "Hobi saya adalah membuat Desain Website (UI/UX), Front End dan Back End."
                        ];
                        let index = 0;
                        let charIndex = 0;
                        let currentSentence = '';
                        let isDeleting = false;

                        function type() {
                            if (index === sentences.length) {
                                index = 0; // Reset index jika sudah mencapai akhir
                            }
                            currentSentence = sentences[index];
                            const displayText = currentSentence.substring(0, charIndex);
                            document.getElementById('typing-animation').innerHTML = displayText;

                            if (isDeleting) {
                                charIndex--;
                                if (charIndex === 0) {
                                    isDeleting = false;
                                    index++;
                                }
                            } else {
                                charIndex++;
                                if (charIndex === currentSentence.length) {
                                    isDeleting = true;
                                }
                            }
                            setTimeout(type, isDeleting ? 20 : 50);
                        }

                        type(); // Mulai animasi
                    </script>
                         <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-dark btn-lg px-4 me-sm-3" href="#features">Mulai</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="about">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                <h2 class="h4 fw-bolder">UI/UX designer</h2>
                <p>Saya sedang belajar merancang antarmuka pengguna yang menarik dan fungsional. Saat ini, saya terlibat dalam proyek yang melibatkan desain responsif dan pengalaman pengguna yang optimal.</p>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                <h2 class="h4 fw-bolder">Front End</h2>
                <p>Saya berpengalaman dalam menggunakan HTML, CSS, dan JavaScript untuk membangun antarmuka yang interaktif dan responsif. Saya selalu berusaha untuk meningkatkan keterampilan saya dalam teknologi terbaru.</p>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                <h2 class="h4 fw-bolder">Back End</h2>
                <p>Saya memiliki pengetahuan dalam pengembangan back end menggunakan berbagai bahasa pemrograman dan framework. Saya fokus pada pengelolaan database dan pengembangan API yang efisien.</p>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section-->
<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Terima Kasih Telah Mengunjungi Website Saya</h2>
            <p class="lead mb-0">Kami sangat menghargai kunjungan Anda dan berharap informasi ini bisa bermanfaat.</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- Testimonial 1-->
                {{-- <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                <div class="small text-muted">- Client Name, Location</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2-->
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                <div class="small text-muted">- Client Name, Location</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
@endsection