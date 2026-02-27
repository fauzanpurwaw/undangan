@extends('layouts.app')

@section('title', 'Undangan Pernikahan - Nama Pengantin')

@section('content')
<!-- Opening Cover -->
<div id="opening-cover" class="fixed inset-0 z-50 flex items-center justify-center text-white overflow-hidden">
    <img src="{{ asset('./images/backgrounds/opening-bg.png') }}" class="h-full md:w-full absolute top-0 left-0 object-cover" alt="">

    <div class="absolute h-full w-full flex flex-col justify-between inset-0">
        <div class="w-full flex justify-between">
            <img src="{{ asset('./images/backgrounds/left-lantern-bg.svg') }}" class="w-48 lg:w-60 h-auto" alt="">
            <img src="{{ asset('./images/backgrounds/right-lantern-bg.svg') }}" class="w-48 lg:w-60 h-auto" alt="">
        </div>
        <div class="w-full flex justify-between opacity-40">
            <img src="{{ asset('./images/logos/left-flower.svg') }}" class="h-60" alt="">
            <img src="{{ asset('./images/logos/right-flower.svg') }}" class="h-60" alt="">
        </div>
        <div class="w-full flex justify-between">
            <div class="w-32 h-32 border-4 border-white/0 rounded-full"></div>
            <div class="w-32 h-32 border-4 border-white/0 rounded-full"></div>
        </div>
    </div>

    <div class="relative z-10 w-full h-full py-28 max-w-md px-3 text-center flex flex-col items-center justify-between">
        <!-- Logo -->
        <div class="mb-6">
            <img src="{{ asset('./images/logos/wifian-outlined.svg') }}" class="w-40 mx-auto mb-3" alt="Wifian Logo">
            <p class="text-2xl font-light tracking-widest text-white">WIFIAN GROUP</p>
        </div>

        <div>
            <!-- Title -->
            <div class="mb-8">
                <h2 class="font-berkshire text-4xl mb-2 text-white">
                    Undangan
                </h2>

                <h1 class="font-berkshire text-6xl leading-tight">
                    Buka Puasa <br> Bersama
                </h1>
            </div>
        </div>

        <div>
            <!-- Recipient -->
            <div class="mb-10">
                <p class="text-white/80 text-sm">Kepada Bpk/Ibu Yth:</p>
                <p class="text-lg font-medium mt-1">Di Tempat</p>
            </div>

            <!-- Button -->
            <button id="open-invitation"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-white text-[#0f2a5f] font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.357 7.714l6.98 4.654c.963.641 1.444.962 1.964 1.087c.46.11.939.11 1.398 0c.52-.125 1.001-.446 1.964-1.087l6.98-4.654M7.157 19.5h9.686c1.68 0 2.52 0 3.162-.327a3 3 0 0 0 1.31-1.311c.328-.642.328-1.482.328-3.162V9.3c0-1.68 0-2.52-.327-3.162a3 3 0 0 0-1.311-1.311c-.642-.327-1.482-.327-3.162-.327H7.157c-1.68 0-2.52 0-3.162.327a3 3 0 0 0-1.31 1.311c-.328.642-.328 1.482-.328 3.162v5.4c0 1.68 0 2.52.327 3.162a3 3 0 0 0 1.311 1.311c.642.327 1.482.327 3.162.327" />
                </svg>
                Buka Undangan
            </button>
        </div>

    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="relative opacity-0 pointer-events-none transition-opacity duration-1000">
    <img src="{{ asset('./images/backgrounds/opening-bg.png') }}" class="fixed inset-0 h-screen md:w-screen object-cover top-0 left-0" alt="">
    <!-- Hero Section -->
    <section id="opening" class="relative min-h-screen max-w-md mx-auto flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        {{-- <x-animated-background variant="default" /> --}}

        <div class="relative z-10 container mx-auto pb-30 pt-12 text-center text-white grid grid-cols-12 gap-y-10">
            <div class="col-span-12 animate-fade-in-down">
                <p class="text-2xl font-light tracking-widest text-white">WIFIAN GROUP</p>
                <p class="text-4xl font-semibold tracking-widest text-white">Sinergi Bersama</p>
                <div class="overflow-hidden mt-4">
                    <div class="relative w-full group bg-white/20 py-5">
                        <div class="flex w-max animate-marquee group-hover:[animation-play-state:paused]">
                            <!-- LOGO LIST (duplicate untuk infinite) -->
                            <div class="flex items-center gap-10 px-6">
                                <img src="{{ asset('./images/logos/wifian.svg') }}" class="h-12 w-auto" alt="">
                                <img src="{{ asset('./images/logos/nasatel.svg') }}" class="h-12 w-auto" alt="">
                                <img src="{{ asset('./images/logos/enigma-colored.svg') }}" class="h-12 w-auto" alt="">
                                <img src="{{ asset('./images/logos/helium.svg') }}" class="h-12 w-auto" alt="">
                            </div>

                            <!-- DUPLICATE -->
                            <div class="flex items-center gap-10 px-6">
                                <img src="{{ asset('./images/logos/wifian.svg') }}" class="h-12 w-auto" alt="">
                                <img src="{{ asset('./images/logos/nasatel.svg') }}" class="h-12 w-auto" alt="">
                                <img src="{{ asset('./images/logos/enigma-colored.svg') }}" class="h-12 w-auto" alt="">
                                <img src="{{ asset('./images/logos/helium.svg') }}" class="h-12 w-auto" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 px-1 animate-fade-in-up my-8 sm:my-12">
                <h1 class="font-berkshire text-6xl leading-tight">
                    Buka Puasa
                </h1>
                <h1 class="font-berkshire text-6xl leading-tight">
                    Bersama
                </h1>
            </div>

            <div class="col-span-12 px-3 animate-zoom-in">
                <p class="text-base font-light">
                    Dengan hormat, kami mengundang Bapak/Ibu/Saudara/i untuk hadir dalam acara Buka Puasa Bersama yang insyaAllah akan dilaksanakan pada
                </p>
            </div>

            <div class="col-span-12">
                <img src="{{ asset('./images/logos/Slider.svg') }}" class="animate-bounce mx-auto mt-10" alt="">
            </div>
        </div>
    </section>

    <!-- Event Section -->
    <section id="event" class="relative py-16 min-h-screen max-w-md mx-auto overflow-hidden">
        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <div class="text-center mb-10 animate-on-scroll" data-animation="fade-in-up">
                <img src="{{ asset('./images/logos/date-info.svg') }}" class="w-full" alt="">
                <div class="w-24 h-1 mt-1 bg-gradient-to-r from-transparent via-gold-500 to-transparent mx-auto"></div>
            </div>

            <!-- Countdown Timer -->
            <div id="countdown" class="mb-10 grid grid-cols-7 items-center gap-2 mx-auto text-white px-8 animate-on-scroll" data-animation="fade-in-up">
                <!-- Hari -->
                <div class="text-center">
                    <p class="font-light mb-1 text-base">Hari</p>
                    <div id="days" class="font-light text-2xl">00</div>
                </div>
                <!-- : -->
                <div class="text-center text-2xl sm:text-3xl font-light">:</div>
                <!-- Jam -->
                <div class="text-center">
                    <p class="font-light mb-1 text-base">Jam</p>
                    <div id="hours" class="font-light text-2xl">00</div>
                </div>
                <!-- : -->
                <div class="text-center text-2xl sm:text-3xl font-light">:</div>
                <!-- Menit -->
                <div class="text-center">
                    <p class="font-light mb-1 text-base">Menit</p>
                    <div id="minutes" class="font-light text-2xl">00</div>
                </div>
                <!-- : -->
                <div class="text-center text-2xl sm:text-3xl font-light">:</div>
                <!-- Detik -->
                <div class="text-center">
                    <p class="font-light mb-1 text-base">Detik</p>
                    <div id="seconds" class="font-light text-2xl">00</div>
                </div>
            </div>

            <div class="mb-6 w-full flex justify-center items-center gap-2 text-center animate-on-scroll" data-animation="fade-in-up">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 28 28">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <p class="text-white font-light text-sm">BANDAR DJAKARTA BEKASI, SUMMARECON</p>
            </div>

            <div class="bg-red w-full h-full px-3 text-center animate-on-scroll" data-animation="fade-in-up">
                {{-- <div id="map-container" class="w-full h-96 rounded-xl bg-gray-200 flex items-center justify-center mb-4">
                    <p class="text-gray-500">Google Maps akan dimuat di sini</p>
                </div> --}}
                <iframe
                style="border:0"
                loading="lazy"
                allowfullscreen
                class="w-full h-96 rounded-xl flex items-center justify-center mb-4"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2796379080314!2d106.99733049999999!3d-6.226814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c1a26a15e11%3A0x43fdd932170fd6e3!2sBandar%20Djakarta%20Bekasi!5e0!3m2!1sid!2sid!4v1772175974844!5m2!1sid!2sid">
                </iframe>
                <a
                    href="https://www.google.com/maps/dir/?api=1&origin=Current+Location&destination=-6.226499366503197,106.997255398146&travelmode=driving"
                    target="_blank"
                    class="mx-auto inline-flex items-center px-4 py-2 bg-sky-500 uppercase text-white rounded-lg hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512" class="mr-4">
                        <path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2" />
                    </svg>
                    Navigasi
                </a>
            </div>
        </div>
    </section>

    <!-- RSVP Section -->
    <section id="rsvp" class="relative pt-16 pb-10 min-h-screen max-w-md mx-auto overflow-hidden">
        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl animate-on-scroll" data-animation="fade-in-up">
            <div class="text-center mb-12">
                <h2 class="font-berkshire text-4xl text-white mb-4">
                    Konfirmasi Kedatangan
                </h2>

            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-8 animate-on-scroll" data-animation="fade-in-up">

                <div id="alert-container"></div>

                <form id="rsvp-form" class="space-y-6">
                    @csrf

                    <input type="hidden" name="message" value="default">
                    <input type="hidden" name="attendance" value="hadir">
                    <input type="hidden" name="number_of_guests" value="1">

                    <div>
                        <label for="company" class="block text-base font-light text-sky-800 mb-2">Nama PT *</label>
                        <select id="company" name="company" required
                                class="text-sky-800 w-full px-4 py-3 rounded-lg bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                            <option class="opacity-80" value="">Pilih Nama PT</option>
                            <option value="wifian">Wifian Solution</option>
                            <option value="nasatel">Nusantara Akses Telekomunikasi</option>
                            <option value="enigma">Indosoft Digital Enigma</option>
                            <option value="helium">Helium Sinergi Telekomunikasi</option>
                        </select>
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-sky-800 mb-2">Nama Lengkap *</label>
                        <input type="text" id="name" name="name" placeholder="Nama Lengkap" required autocomplete="off"
                               class="w-full px-4 py-3 rounded-lg border bg-gray-100 text-sky-800 mb-2 border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label for="position" class="block text-sm font-medium text-sky-800 mb-2">Posisi *</label>
                        <input type="text" id="position" name="position" placeholder="Noc, Customer Service, Teknisi, dst.." required autocomplete="off"
                               class="w-full px-4 py-3 rounded-lg border bg-gray-100 text-sky-800 mb-2 border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-sky-800 mb-2">No. HP</label>
                        <input type="tel" id="phone" name="phone" placeholder="08xxxxxxxx" required autocomplete="off"
                               class="w-full px-4 py-3 rounded-lg border bg-gray-100 text-sky-800 mb-2 border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                    </div>

                    <button type="submit" id="submit-btn"
                            class="w-full bg-gradient-to-r from-primary-600 to-primary-500 text-white py-4 rounded-lg font-medium hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        Kirim
                    </button>
                </form>
            </div>

            <div class="text-center mt-8 py-6 -mx-3 bg-white/50 text-sky-900 animate-on-scroll mb-16" data-animation="fade-in-up">
                <h2 class="font-berkshire font-bold text-4xl mb-4">Info Lebih Lanjut</h2>
                <div class="w-full flex items-center justify-center gap-2 mb-2 font-bold">
                    <img src="{{ asset('./images/logos/whatsapp-icon.svg') }}" class="w-4" alt="">
                    <span class="">Layung</span>
                    <span class="">+62 812 8762 6991</span>
                </div>
                <div class="w-full flex items-center justify-center gap-2 mb-2 font-bold">
                    <img src="{{ asset('./images/logos/whatsapp-icon.svg') }}" class="w-4" alt="">
                    <span class="">Julia</span>
                    <span class="">+62 812 1067 6751</span>
                </div>
                <div class="w-full flex items-center justify-center gap-2 font-bold">
                    <img src="{{ asset('./images/logos/whatsapp-icon.svg') }}" class="w-4" alt="">
                    <span class="">John</span>
                    <span class="">+62 821 1313 1800</span>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <section id="footer" class="relative mb-16 max-w-md mx-auto overflow-hidden">
        <div class="relative z-10 container mx-auto text-white px-4 sm:px-6 lg:px-8 max-w-6xl animate-on-scroll" data-animation="fade-in-up">
            <div class="text-center mb-12">
                <p class="font-light text-sm tracking-widest mb-8">Powered By:</p>
                <img src="{{ asset('./images/logos/enigma.svg') }}" class="h-10 mx-auto mb-2" alt="">
                <p class="font-light text-sm">PT Indosoft Digital Enigma</p>
        </div>
    </section>
</div>


<!-- Music Toggle Button -->
<button id="music-toggle" class="fixed bottom-24 right-4 z-40 w-14 h-14 bg-gradient-to-r from-gold-400 to-gold-500 rounded-full shadow-lg flex items-center justify-center transition-all duration-500 translate-y-24 opacity-0 hover:scale-110">
    <svg id="music-icon-play" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
        <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"></path>
    </svg>
    <svg id="music-icon-pause" class="w-6 h-6 text-white hidden" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
    </svg>
</button>

<div class="fixed bottom-0 right-0 left-0 z-40">
    <div class="w-full max-w-md mx-auto grid grid-cols-12 gap-2 bg-white/20 p-2 rounded-xl">
        <div class="col-span-4 flex items-center justify-center">
            <a href="#opening" class="active:bg-white active:text-primary-700 nav-item flex flex-col items-center text-white transition-all duration-300 p-2 hover:text-primary-700 hover:bg-white active rounded-xl snap-center w-full">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="text-xs font-medium whitespace-nowrap">Beranda</span>
            </a>
        </div>
        <div class="col-span-4 flex items-center justify-center">
            <a href="#event" class="active:bg-white active:text-primary-700 nav-item flex flex-col items-center text-white transition-all duration-300 p-2 hover:text-primary-700 hover:bg-white active rounded-xl flex-shrink-0 snap-center w-full">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="text-xs font-medium whitespace-nowrap">Acara</span>
            </a>
        </div>
        <div class="col-span-4 flex items-center justify-center">
            <a href="#rsvp" class="active:bg-white active:text-primary-700 nav-item flex flex-col items-center text-white transition-all duration-300 p-2 hover:text-primary-700 hover:bg-white active rounded-xl flex-shrink-0 snap-center w-full">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.357 7.714l6.98 4.654c.963.641 1.444.962 1.964 1.087c.46.11.939.11 1.398 0c.52-.125 1.001-.446 1.964-1.087l6.98-4.654M7.157 19.5h9.686c1.68 0 2.52 0 3.162-.327a3 3 0 0 0 1.31-1.311c.328-.642.328-1.482.328-3.162V9.3c0-1.68 0-2.52-.327-3.162a3 3 0 0 0-1.311-1.311c-.642-.327-1.482-.327-3.162-.327H7.157c-1.68 0-2.52 0-3.162.327a3 3 0 0 0-1.31 1.311c-.328.642-.328 1.482-.328 3.162v5.4c0 1.68 0 2.52.327 3.162a3 3 0 0 0 1.311 1.311c.642.327 1.482.327 3.162.327" />
                </svg>
                <span class="text-xs font-medium whitespace-nowrap">RSVP</span>
            </a>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Opening Cover
const openingCover = document.getElementById('opening-cover');
const mainContent = document.getElementById('main-content');
const bottomNav = document.getElementById('bottom-nav');
const musicToggle = document.getElementById('music-toggle');
const openInvitationBtn = document.getElementById('open-invitation');

const musicIconPlay = document.getElementById('music-icon-play');
const musicIconPause = document.getElementById('music-icon-pause');const rsvpForm = document.getElementById('rsvp-form');
const submitBtn = document.getElementById('submit-btn');
const alertContainer = document.getElementById('alert-container');

openInvitationBtn.addEventListener('click', function() {
    openingCover.classList.add('translate-y-full', 'opacity-0');

    setTimeout(() => {
        openingCover.style.display = 'none';
        mainContent.classList.remove('opacity-0', 'pointer-events-none');
        mainContent.classList.add('opacity-100');

        // Show bottom nav
        setTimeout(() => {
            // bottomNav.classList.remove('translate-y-full', 'opacity-0');
            // bottomNav.classList.add('translate-y-0', 'opacity-100');
            musicToggle.classList.remove('translate-y-24', 'opacity-0');
            musicToggle.classList.add('translate-y-0', 'opacity-100');
        }, 300);
    }, 1000);
});

// Countdown Timer
const eventDate = new Date("2026-03-12 16:00:00").getTime();

function updateCountdown() {
    const now = new Date().getTime();
    const distance = eventDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById('days').textContent = String(days).padStart(2, '0');
    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');

    if (distance < 0) {
        clearInterval(countdownInterval);
        document.getElementById('countdown').innerHTML = '<p class="text-2xl">Acara Sedang Berlangsung!</p>';
    }
}

const countdownInterval = setInterval(updateCountdown, 1000);
updateCountdown();

// Bottom Navigation Slider
// const navSlider = document.getElementById('nav-slider');
const navItems = document.querySelectorAll('.nav-item');
const sections = document.querySelectorAll('section');

// Update active nav based on scroll
window.addEventListener('scroll', () => {
    let current = '';
    let currentIndex = 0;

    sections.forEach((section, index) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
            current = section.getAttribute('id');
            currentIndex = index;
        }
    });

    navItems.forEach((item, index) => {
        item.classList.remove('active', 'text-primary-600');
        item.classList.add('text-gray-600');

        if (item.getAttribute('href') === `#${current}`) {
            item.classList.add('active', 'text-primary-600');
            item.classList.remove('text-gray-600');

            // Scroll nav item into view
            item.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
    });
});


// Add swipe/touch support for better mobile experience
let startX = 0;
let scrollLeft = 0;

// Music Toggle
// Buat audio object langsung dari JS
const music = new Audio("{{ asset('./media/I-love-Ramadan-Ramol.MP3.mpeg') }}");
music.loop = true;
music.volume = 1;

let isPlaying = false;

// Autoplay setelah interaksi pertama (wajib untuk mobile)
document.addEventListener('click', function initMusic() {
    music.play().then(() => {
        isPlaying = true;
        musicIconPlay.classList.add('hidden');
        musicIconPause.classList.remove('hidden');
    }).catch(err => {
        console.log('Autoplay blocked:', err);
    });

    document.removeEventListener('click', initMusic);
});

// Toggle
musicToggle.addEventListener('click', function () {
    if (isPlaying) {
        music.pause();
        musicIconPlay.classList.remove('hidden');
        musicIconPause.classList.add('hidden');
    } else {
        music.play();
        musicIconPlay.classList.add('hidden');
        musicIconPause.classList.remove('hidden');
    }

    isPlaying = !isPlaying;
});

// RSVP Form
rsvpForm.addEventListener('submit', async function(e) {
    e.preventDefault();

    submitBtn.disabled = true;
    submitBtn.textContent = 'Mengirim...';

    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());

    try {
        const response = await fetch('{{ route("template1.rsvp.store") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();
        console.log(result);

        if (response.ok) {
            console.log('response ok');
            showAlert('success', result.message);
            rsvpForm.reset();
            document.getElementById('rsvp-form').classList.add('hidden');
        } else {
            const errors = result.errors
                ? Object.values(result.errors).flat().join('<br>')
                : result.message;

            showAlert('error', errors);
        }
    } catch (error) {
        console.log(error);
        showAlert('error', 'Terjadi kesalahan. Silakan coba lagi.');
    } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Kirim Konfirmasi';
    }
});

function showAlert(type, message) {
    const bgColor = type === 'success' ? 'bg-green-100 border-green-500 text-green-700' : 'bg-red-100 border-red-500 text-red-700';
    alertContainer.innerHTML = `
        <div class="${bgColor} border-l-4 p-4 rounded mb-4" role="alert">
            <p>${message}</p>
        </div>
    `;

    setTimeout(() => {
        alertContainer.innerHTML = '';
    }, 5000);
}

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Scroll-triggered Animations
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const element = entry.target;
            const animation = element.dataset.animation || 'fade-in-up';
            const delay = element.dataset.delay || 0;

            setTimeout(() => {
                element.classList.add('animated');
            }, delay);

            // Stop observing once animated
            animateOnScroll.unobserve(element);
        }
    });
}, observerOptions);

// 🔥 Fungsi set active
function setActive(id) {
    navItems.forEach(link => {
        link.classList.remove('bg-white', 'text-primary-700');
        link.classList.add('text-white');

        if (link.getAttribute('href') === `#${id}`) {
            link.classList.add('bg-white', 'text-primary-700');
            link.classList.remove('text-white');
        }
    });
}

// 🔥 Observer untuk detect section visible
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            setActive(entry.target.id);
        }
    });
}, {
    threshold: 0.6 // aktif kalau 60% section terlihat
});

// Observe semua section
sections.forEach(section => {
    observer.observe(section);
});

// Observe all elements with animate-on-scroll class
document.querySelectorAll('.animate-on-scroll').forEach(el => {
    animateOnScroll.observe(el);
});

// Observe fade-in-left animations
document.querySelectorAll('.fade-in-left').forEach(el => {
    animateOnScroll.observe(el);
});

// Observe fade-in-right animations
document.querySelectorAll('.fade-in-right').forEach(el => {
    animateOnScroll.observe(el);
});

// Observe scale-in animations
document.querySelectorAll('.scale-in').forEach(el => {
    animateOnScroll.observe(el);
});

// Observe slide-up animations
document.querySelectorAll('.slide-up').forEach(el => {
    animateOnScroll.observe(el);
});

// Observe stagger animation containers
document.querySelectorAll('.stagger-animation').forEach(el => {
    animateOnScroll.observe(el);
});

// Parallax effect on scroll
let ticking = false;

window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;

            document.querySelectorAll('.parallax').forEach(el => {
                const speed = el.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                el.style.transform = `translateY(${yPos}px)`;
            });

            ticking = false;
        });

        ticking = true;
    }
});
</script>

<style>
@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.animate-marquee {
    animation: marquee 10s linear infinite;
}

@keyframes blob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(20px, -50px) scale(1.1); }
    50% { transform: translate(-20px, 20px) scale(0.9); }
    75% { transform: translate(50px, 50px) scale(1.05); }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

#bottom-nav a.active {
    position: relative;
}

#bottom-nav a.active::before {
    content: '';
    position: absolute;
    top: -2px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 3px;
    background: linear-gradient(to right, #0ea5e9, #38bdf8);
    border-radius: 0 0 3px 3px;
}

/* Scroll Animations */
.animate-on-scroll {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.animate-on-scroll.animated {
    opacity: 1;
    transform: translateY(0);
}

.fade-in-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.fade-in-left.animated {
    opacity: 1;
    transform: translateX(0);
}

.fade-in-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.fade-in-right.animated {
    opacity: 1;
    transform: translateX(0);
}

.scale-in {
    opacity: 0;
    transform: scale(0.8);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.scale-in.animated {
    opacity: 1;
    transform: scale(1);
}

.slide-up {
    opacity: 0;
    transform: translateY(80px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.slide-up.animated {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endpush
