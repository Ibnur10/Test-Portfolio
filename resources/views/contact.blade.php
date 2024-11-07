@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container contact-page">
    <h1 class="mb-4">Hubungi Kami</h1>
    
    <div class="row">
        <div class="col-md-6">
            <h2>Informasi Kontak</h2>
            <div class="contact-info">
                <p><strong>Alamat:</strong> Jalan Contoh No. 123, Kota Anda</p>
                <p><strong>Email:</strong> info@perusahaan.com</p>
                <p><strong>Telepon:</strong> (021) 1234-5678</p>
                <p><strong>WhatsApp:</strong> 
                    <a href="https://wa.me/6281234567890" target="_blank">
                        +62 812-3456-7890
                    </a>
                </p>
            </div>
        </div>
        
        <div class="col-md-6">
            <h2>Sosial Media</h2>
            <div class="social-media">
                <p>
                    <i class="fab fa-facebook"></i> 
                    <a href="https://facebook.com/namaperusahaan" target="_blank">
                        Facebook
                    </a>
                </p>
                <p>
                    <i class="fab fa-instagram"></i> 
                    <a href="https://instagram.com/namaperusahaan" target="_blank">
                        Instagram
                    </a>
                </p>
                <p>
                    <i class="fab fa-twitter"></i> 
                    <a href="https://twitter.com/namaperusahaan" target="_blank">
                        Twitter
                    </a>
                </p>
                <p>
                    <i class="fab fa-linkedin"></i> 
                    <a href="https://linkedin.com/company/namaperusahaan" target="_blank">
                        LinkedIn
                    </a>
                </p>
            </div>
        </div>
    </div>

    {{-- <div class="row mt-4">
        <div class="col-12">
            <h2>Kirim Pesan</h2> --}}
            {{-- <form>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form> --}}
        </div>
    </div>
</div>
@endsection 