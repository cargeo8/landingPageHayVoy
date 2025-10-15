<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'hayvoy - Soluciones Tecnológicas de Calidad')</title>
    <meta name="description" content="@yield('description', 'hayvoy - Consultora salvadoreña especializada en desarrollo de software personalizado, aplicaciones web y móviles.')">
    <meta property="og:title" content="@yield('og_title', 'hayvoy - Soluciones Tecnológicas Salvadoreñas')">
    <meta property="og:description" content="@yield('og_description', 'Desarrollo de software personalizado y soluciones tecnológicas de clase mundial desde El Salvador.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="keywords" content="desarrollo software El Salvador, consultora tecnología, CollectHub, apps móviles, desarrollo web">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>html { scroll-behavior: smooth; }</style>
</head>
<body>
    <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-black text-white min-h-screen relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-cyan-500/10 via-blue-500/5 to-transparent rounded-full blur-3xl animate-pulse animate-float-slow"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-tl from-purple-500/10 via-slate-600/5 to-transparent rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/3 right-1/3 w-64 h-64 bg-gradient-to-br from-emerald-500/5 to-transparent rounded-full blur-2xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-cyan-500/10 rounded-full animate-spin-slow"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-cyan-500/10 rounded-full animate-spin-reverse"></div>
            <div class="absolute top-20 left-20 w-2 h-2 bg-cyan-400/30 rounded-full animate-float"></div>
            <div class="absolute top-40 right-40 w-3 h-3 bg-blue-400/20 rounded-full animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-purple-400/30 rounded-full animate-float" style="animation-delay: 2s;"></div>
        </div>

        <!-- Scroll Progress Bar -->
        <div x-data="{ scrollProgress: 0 }" @scroll.window="scrollProgress = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100">
            <div class="fixed top-0 left-0 right-0 h-1 bg-slate-800/50 z-50">
                <div class="h-full bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500 transition-all duration-150" :style="`width: ${scrollProgress}%`"></div>
            </div>
        </div>
        
        <!-- Sticky CTA Flotante -->
        <div x-data="{ showStickyCTA: false }" @scroll.window="showStickyCTA = window.scrollY > 400">
            <div 
                x-show="showStickyCTA"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
                class="fixed bottom-8 right-8 z-50"
                x-cloak
            >
                <a 
                    href="{{ route('home') }}#contacto" 
                    class="group flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full shadow-2xl hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-110"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <span class="font-semibold whitespace-nowrap">¡Hablemos!</span>
                </a>
            </div>
        </div>

        <!-- Navigation -->
        <header class="fixed top-0 left-0 right-0 z-40 w-full">
            <div class="container mx-auto px-6 py-6">
                <nav class="flex items-center justify-between backdrop-blur-md bg-black/20 rounded-2xl px-6 py-4 border border-white/10 shadow-lg shadow-black/20 transition-all duration-300 hover:bg-black/30 hover:border-white/20">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-br from-slate-600 to-slate-800 rounded-lg flex items-center justify-center animate-float">
                            <span class="text-white font-bold text-xl">H</span>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                            hayvoy
                        </span>
                    </a>
                    
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('servicios') }}" class="text-gray-300 hover:text-white transition-colors {{ request()->routeIs('servicios') ? 'text-cyan-400' : '' }}">
                            Servicios
                        </a>
                        <a href="{{ route('nosotros') }}" class="text-gray-300 hover:text-white transition-colors {{ request()->routeIs('nosotros') ? 'text-cyan-400' : '' }}">
                            Nosotros
                        </a>
                        <a href="{{ route('home') }}#contacto" class="text-gray-300 hover:text-white transition-colors">
                            Contacto
                        </a>
                    </div>

                    <div class="flex items-center space-x-4">
                        <a
                            href="{{ route('home') }}#contacto"
                            class="px-6 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50"
                        >
                            Hablemos
                        </a>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <div class="relative z-10 pt-32">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="relative z-10 bg-slate-950/50 backdrop-blur-sm border-t border-white/5 mt-20">
            <div class="container mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 md:col-span-2">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-10 h-10 bg-gradient-to-br from-slate-600 to-slate-800 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-xl">H</span>
                            </div>
                            <span class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                hayvoy
                            </span>
                        </div>
                        <p class="text-gray-400 mb-6">
                            Soluciones tecnológicas salvadoreñas de clase mundial. Transformando negocios con innovación y calidad.
                        </p>
                        <div class="flex space-x-4">
                            <a href="https://facebook.com/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Síguenos en Facebook" class="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://twitter.com/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Síguenos en Twitter" class="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="https://linkedin.com/company/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Conéctate en LinkedIn" class="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-white font-semibold mb-4">Servicios</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="{{ route('servicios') }}#collecthub" class="hover:text-cyan-400 transition-colors">CollectHub</a></li>
                            <li><a href="{{ route('servicios') }}#desarrollo-web" class="hover:text-cyan-400 transition-colors">Desarrollo Web</a></li>
                            <li><a href="{{ route('servicios') }}#apps-moviles" class="hover:text-cyan-400 transition-colors">Apps Móviles</a></li>
                            <li><a href="{{ route('servicios') }}#consultoria" class="hover:text-cyan-400 transition-colors">Consultoría</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-white font-semibold mb-4">Empresa</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="{{ route('nosotros') }}" class="hover:text-cyan-400 transition-colors">Nosotros</a></li>
                            <li><a href="{{ route('home') }}#contacto" class="hover:text-cyan-400 transition-colors">Contacto</a></li>
                            <li><a href="{{ route('privacidad') }}" class="hover:text-cyan-400 transition-colors">Privacidad</a></li>
                            <li><a href="{{ route('terminos') }}" class="hover:text-cyan-400 transition-colors">Términos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-white/5 mt-8 pt-8 text-center text-gray-400">
                    <p>© {{ date('Y') }} hayvoy. Orgullosamente salvadoreño 🇸🇻. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

        <!-- Custom CSS -->
        <style>
            @keyframes fade-in {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in {
                animation: fade-in 0.8s ease-out forwards;
            }

            @keyframes float {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-20px);
                }
            }

            .animate-float {
                animation: float 3s ease-in-out infinite;
            }

            @keyframes float-slow {
                0%, 100% {
                    transform: translateY(0px) translateX(0px);
                }
                33% {
                    transform: translateY(-30px) translateX(20px);
                }
                66% {
                    transform: translateY(20px) translateX(-20px);
                }
            }

            .animate-float-slow {
                animation: float-slow 20s ease-in-out infinite;
            }

            @keyframes spin-slow {
                from {
                    transform: translate(-50%, -50%) rotate(0deg);
                }
                to {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
            }

            .animate-spin-slow {
                animation: spin-slow 30s linear infinite;
            }

            @keyframes spin-reverse {
                from {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
                to {
                    transform: translate(-50%, -50%) rotate(0deg);
                }
            }

            .animate-spin-reverse {
                animation: spin-reverse 25s linear infinite;
            }

            [x-cloak] { 
                display: none !important; 
            }

            @media (prefers-reduced-motion: reduce) {
                *,
                *::before,
                *::after {
                    animation: none !important;
                    transition: none !important;
                }
            }
        </style>
    </div>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
