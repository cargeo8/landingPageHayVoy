<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hayvoy - Soluciones Tecnológicas de Calidad</title>
    <meta name="description" content="hayvoy - Consultora salvadoreña especializada en desarrollo de software personalizado, aplicaciones web y móviles. Conoce CollectHub, nuestro sistema de gestión de cobranzas.">
    <meta property="og:title" content="hayvoy - Soluciones Tecnológicas Salvadoreñas">
    <meta property="og:description" content="Desarrollo de software personalizado y soluciones tecnológicas de clase mundial desde El Salvador.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hayvoy.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="keywords" content="desarrollo software El Salvador, consultora tecnología, CollectHub, apps móviles, desarrollo web">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>html { scroll-behavior: smooth; }</style>
</head>
<body>
    <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-black text-white min-h-screen relative overflow-hidden">
        <!-- Animated Background Elements with Mesh Gradients -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Mesh gradient orbs -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-cyan-500/10 via-blue-500/5 to-transparent rounded-full blur-3xl animate-pulse animate-float-slow"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-tl from-purple-500/10 via-slate-600/5 to-transparent rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/3 right-1/3 w-64 h-64 bg-gradient-to-br from-emerald-500/5 to-transparent rounded-full blur-2xl animate-pulse" style="animation-delay: 2s;"></div>
            <!-- Geometric circles -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-cyan-500/10 rounded-full animate-spin-slow"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-cyan-500/10 rounded-full animate-spin-reverse"></div>
            <!-- Floating particles -->
            <div class="absolute top-20 left-20 w-2 h-2 bg-cyan-400/30 rounded-full animate-float"></div>
            <div class="absolute top-40 right-40 w-3 h-3 bg-blue-400/20 rounded-full animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-purple-400/30 rounded-full animate-float" style="animation-delay: 2s;"></div>
        </div>

        <!-- Scroll Progress Bar (fixed, outside relative container) -->
        <div x-data="{ scrollProgress: 0 }" @scroll.window="scrollProgress = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100">
            <div class="fixed top-0 left-0 right-0 h-1 bg-slate-800/50 z-50">
                <div class="h-full bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500 transition-all duration-150" :style="`width: ${scrollProgress}%`"></div>
            </div>
        </div>
        
        <!-- Sticky CTA Flotante (fixed, outside relative container) -->
        <div x-data="{ showStickyCTA: false }" @scroll.window="showStickyCTA = window.scrollY > 800">
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
                    href="#contacto" 
                    class="group flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full shadow-2xl hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-110"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <span class="font-semibold whitespace-nowrap">¡Hablemos!</span>
                </a>
            </div>
        </div>

        <!-- Navigation (fixed at top to stay visible) -->
        <header class="fixed top-0 left-0 right-0 z-40 w-full">
            <div class="container mx-auto px-6 py-6">
                <nav class="flex items-center justify-between backdrop-blur-md bg-black/20 rounded-2xl px-6 py-4 border border-white/10 shadow-lg shadow-black/20 transition-all duration-300 hover:bg-black/30 hover:border-white/20">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-br from-slate-600 to-slate-800 rounded-lg flex items-center justify-center animate-float">
                            <span class="text-white font-bold text-xl">H</span>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                            hayvoy
                        </span>
                    </div>
                    
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('servicios') }}" class="text-gray-300 hover:text-white transition-colors">
                            Servicios
                    </a>
                    <a href="{{ route('nosotros') }}" class="text-gray-300 hover:text-white transition-colors">
                        Nosotros
                    </a>
                    <a href="#contacto" class="text-gray-300 hover:text-white transition-colors">
                        Contacto
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    @auth
                        <a
                            href="{{ route('dashboard') }}"
                            class="px-6 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="#contacto"
                            class="px-6 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50"
                        >
                            Hablemos
                        </a>
                    @endauth
                </div>
            </nav>
            </div>
        </header>

        <div class="relative z-10">

            <!-- Hero Section -->
            <section class="container mx-auto px-6 py-20 lg:py-32">
                <div class="max-w-5xl mx-auto text-center">
                    <div class="mb-6 inline-flex items-center gap-2 px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-cyan-400 text-sm animate-pulse-subtle">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                        </span>
                        🇸🇻 Tecnología salvadoreña de clase mundial
                    </div>
                    
                    <h1 class="text-5xl lg:text-7xl font-bold mb-8 leading-tight">
                        <span class="bg-gradient-to-r from-white via-slate-200 to-white bg-clip-text text-transparent animate-gradient">
                            Soluciones tecnológicas 
                        </span>
                        <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
                            personalizadas
                        </span>
                        <br>
                        <span class="bg-gradient-to-r from-white via-slate-200 to-white bg-clip-text text-transparent animate-gradient">
                            que impulsan tu negocio
                        </span>
                    </h1>
                    
                    <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                        Entregamos soluciones hoy, construidas con calidad que potencian tu mañana. 
                        Especialistas en desarrollo ágil y sistemas empresariales.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4" x-data="{ isVideoOpen: false }">
                        <a
                            href="#contacto"
                            class="group px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 text-lg font-semibold relative overflow-hidden hover:scale-105"
                        >
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            <span class="absolute inset-0 animate-shimmer"></span>
                            <span class="relative">Comencemos</span>
                            <span class="relative inline-block ml-2 group-hover:translate-x-1 transition-transform">→</span>
                        </a>
                        <button
                            @click="isVideoOpen = true"
                            class="group px-8 py-4 border border-cyan-500/50 rounded-lg hover:bg-cyan-500/10 transition-all duration-300 text-lg font-semibold hover:border-cyan-400 hover:shadow-xl"
                        >
                            <svg class="inline-block w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                            </svg>
                            Ver demo
                        </button>

                        <!-- Video Modal -->
                        <div 
                            x-show="isVideoOpen" 
                            x-cloak
                            @click="isVideoOpen = false"
                            class="fixed inset-0 bg-black/90 backdrop-blur-xl z-50 flex items-center justify-center p-6"
                        >
                            <div class="max-w-4xl w-full bg-black/60 backdrop-blur-2xl border border-white/20 rounded-2xl p-8 relative hover:border-white/30 transition-all duration-300" @click.stop>
                                <button
                                    @click="isVideoOpen = false"
                                    aria-label="Cerrar modal de video"
                                    class="absolute top-4 right-4 w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors"
                                >
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="aspect-video bg-slate-800 rounded-lg flex items-center justify-center">
                                    <p class="text-gray-400">Demo video de CollectHub - Próximamente</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3D Visual Elements -->
                    <div class="mt-20 mb-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="transform hover:scale-105 transition-all duration-500 animate-fade-in" style="animation-delay: 0.1s">
                                <div class="h-full bg-gradient-to-br from-black/40 to-slate-900/40 backdrop-blur-xl border border-white/10 rounded-xl p-8 hover:border-white/30 hover:shadow-xl hover:shadow-black/40 transition-all duration-300">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-600 to-slate-800 rounded-lg mb-4 flex items-center justify-center mx-auto">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Desarrollo Ágil</h3>
                                    <p class="text-gray-400">Entregas rápidas sin comprometer calidad</p>
                                </div>
                            </div>
                            <div class="transform hover:scale-105 transition-all duration-500 animate-fade-in" style="animation-delay: 0.3s">
                                <div class="h-full bg-gradient-to-br from-black/40 to-slate-900/40 backdrop-blur-xl border border-white/10 rounded-xl p-8 hover:border-white/30 hover:shadow-xl hover:shadow-black/40 transition-all duration-300">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-700 to-slate-900 rounded-lg mb-4 flex items-center justify-center mx-auto">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Soluciones Escalables</h3>
                                    <p class="text-gray-400">Crecemos junto a tu empresa</p>
                                </div>
                            </div>
                            <div class="transform hover:scale-105 transition-all duration-500 animate-fade-in" style="animation-delay: 0.5s">
                                <div class="h-full bg-gradient-to-br from-black/40 to-slate-900/40 backdrop-blur-xl border border-white/10 rounded-xl p-8 hover:border-white/30 hover:shadow-xl hover:shadow-black/40 transition-all duration-300">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-600 to-slate-700 rounded-lg mb-4 flex items-center justify-center mx-auto">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Soporte 24/7</h3>
                                    <p class="text-gray-400">Siempre estamos para ti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section id="servicios" class="container mx-auto px-6 py-20">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                            Nuestros Servicios
                        </h2>
                        <p class="text-xl text-gray-300">
                            Soluciones completas para tu transformación digital
                        </p>
                    </div>

                    <div class="grid gap-8 lg:grid-cols-2">
                        <!-- CollectHub - Featured Service -->
                        <div class="lg:col-span-2 bg-gradient-to-br from-black/30 via-slate-900/30 to-black/40 backdrop-blur-xl border border-cyan-500/20 rounded-2xl p-8 lg:p-12 hover:border-cyan-400/40 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 relative overflow-hidden group animate-fade-in">
                            <!-- Animated background glow -->
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/5 via-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative z-10">
                                <div class="flex items-start justify-between mb-6">
                                    <div class="flex-1">
                                        <div class="inline-block px-4 py-1 bg-cyan-500/20 border border-cyan-500/40 rounded-full text-cyan-400 text-sm mb-4 animate-pulse-subtle">
                                            ⭐ Producto Destacado
                                        </div>
                                        <h3 class="text-3xl lg:text-4xl font-bold mb-4 flex items-center">
                                            <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                                CollectHub
                                            </span>
                                        </h3>
                                        <p class="text-xl text-gray-300 mb-6 max-w-2xl">
                                            Sistema integral de gestión de cobranzas y pagos. Controla, automatiza y optimiza 
                                            todo el proceso de cobro de tu empresa con una solución moderna y eficiente.
                                        </p>
                                    </div>
                                    <div class="hidden lg:flex w-20 h-20 bg-gradient-to-br from-slate-700 to-slate-900 rounded-2xl items-center justify-center transform rotate-12 group-hover:rotate-0 transition-transform flex-shrink-0 ml-6">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                </div>
                                
                                <div class="grid md:grid-cols-3 gap-6 mb-8">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Gestión de Clientes</h4>
                                            <p class="text-sm text-gray-400">Control completo de cartera</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Cobradores Móviles</h4>
                                            <p class="text-sm text-gray-400">App para cobradores en campo</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Reportes en Tiempo Real</h4>
                                            <p class="text-sm text-gray-400">Métricas y análisis instantáneos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-4">
                                    <a
                                        href="#contacto"
                                        class="group px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 font-semibold relative overflow-hidden hover:scale-105"
                                    >
                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                        <span class="relative">Solicitar Demo</span>
                                        <svg class="w-5 h-5 ml-2 inline-block relative group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </a>
                                    @auth
                                        <a
                                            href="{{ route('dashboard') }}"
                                            class="px-6 py-3 border border-cyan-500/50 rounded-lg hover:bg-cyan-500/10 transition-all duration-300 font-semibold"
                                        >
                                            Acceder al Sistema
                                        </a>
                                    @endauth
                                </div>
                                
                                <!-- Mini Testimonial / Social Proof -->
                                <div class="mt-8 pt-6 border-t border-slate-700/50 flex items-center gap-4">
                                    <div class="flex -space-x-2">
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-cyan-400 to-blue-500 border-2 border-slate-900 flex items-center justify-center text-xs font-bold">JD</div>
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 border-2 border-slate-900 flex items-center justify-center text-xs font-bold">MC</div>
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500 border-2 border-slate-900 flex items-center justify-center text-xs font-bold">AR</div>
                                    </div>
                                    <p class="text-sm text-gray-400"><span class="text-cyan-400 font-semibold">10+ empresas</span> ya optimizan sus cobranzas con CollectHub</p>
                                </div>
                            </div>
                        </div>

                        <!-- Business Intelligence - Featured Service -->
                        <div class="lg:col-span-2 bg-gradient-to-br from-purple-900/40 via-pink-900/20 to-purple-900/30 backdrop-blur-xl border border-purple-500/30 rounded-2xl p-8 lg:p-12 hover:border-purple-400/50 hover:shadow-2xl hover:shadow-purple-900/50 transition-all duration-500 relative overflow-hidden group animate-fade-in">
                            <!-- Animated background glow -->
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 via-pink-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative z-10">
                                <div class="flex items-start justify-between mb-6">
                                    <div class="flex-1">
                                        <div class="inline-block px-4 py-1 bg-purple-500/20 border border-purple-500/40 rounded-full text-purple-400 text-sm mb-4 animate-pulse-subtle">
                                            📊 Business Intelligence
                                        </div>
                                        <h3 class="text-3xl lg:text-4xl font-bold mb-4 flex items-center">
                                            <span class="bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent">
                                                Inteligencia de Negocios
                                            </span>
                                        </h3>
                                        <p class="text-xl text-gray-300 mb-6 max-w-2xl">
                                            Transforma tus datos en decisiones estratégicas. Implementamos soluciones de Business Intelligence 
                                            que visualizan, analizan y predicen el comportamiento crítico de tu negocio.
                                        </p>
                                    </div>
                                    <div class="hidden lg:flex w-20 h-20 bg-gradient-to-br from-purple-700 to-pink-900 rounded-2xl items-center justify-center transform rotate-12 group-hover:rotate-0 transition-transform flex-shrink-0 ml-6">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                </div>
                                
                                <div class="grid md:grid-cols-4 gap-6 mb-8">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Dashboards Interactivos</h4>
                                            <p class="text-sm text-gray-400">Visualiza KPIs en tiempo real</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Análisis Predictivo</h4>
                                            <p class="text-sm text-gray-400">Machine learning para proyecciones</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Reportes Automatizados</h4>
                                            <p class="text-sm text-gray-400">Informes personalizados automáticos</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold mb-1">Integración de Datos</h4>
                                            <p class="text-sm text-gray-400">Conecta múltiples fuentes</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-4">
                                    <a
                                        href="#contacto"
                                        class="group px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg transition-all duration-300 shadow-lg hover:shadow-purple-500/50 font-semibold relative overflow-hidden hover:scale-105"
                                    >
                                        <span class="absolute inset-0 bg-gradient-to-r from-pink-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                        <span class="relative">Consulta Gratuita</span>
                                        <svg class="w-5 h-5 ml-2 inline-block relative group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </a>
                                </div>
                                
                                <!-- Tech stack -->
                                <div class="mt-8 pt-6 border-t border-purple-700/30 flex items-center gap-4">
                                    <div class="flex -space-x-2">
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 border-2 border-purple-900 flex items-center justify-center text-xs font-bold">BI</div>
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-pink-400 to-rose-500 border-2 border-purple-900 flex items-center justify-center text-xs font-bold">DW</div>
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-violet-400 to-purple-500 border-2 border-purple-900 flex items-center justify-center text-xs font-bold">ML</div>
                                    </div>
                                    <p class="text-sm text-gray-400"><span class="text-purple-400 font-semibold">Power BI, Tableau, Looker</span> y más herramientas líderes</p>
                                </div>
                            </div>
                        </div>

                        <!-- Development Service -->
                        <div class="group bg-black/30 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:border-cyan-400/40 hover:shadow-xl hover:shadow-black/40 transition-all duration-500 hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-700 to-slate-900 rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                        <svg class="w-8 h-8 group-hover:text-cyan-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-4">Desarrollo Web</h3>
                                    <p class="text-gray-400 mb-6">
                                        Aplicaciones web modernas y responsivas construidas con las últimas tecnologías.
                                        Laravel, React, Vue.js y más.
                                    </p>
                                    <ul class="space-y-3 mb-6">
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Arquitectura escalable
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Diseño responsivo
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            SEO optimizado
                                        </li>
                                    </ul>
                                    <a href="#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                        </div>

                        <!-- Mobile Apps Service -->
                        <div class="group bg-black/30 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:border-purple-400/40 hover:shadow-xl hover:shadow-black/40 transition-all duration-500 hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-600 to-slate-800 rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                        <svg class="w-8 h-8 group-hover:text-purple-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-4">Apps Móviles</h3>
                                    <p class="text-gray-400 mb-6">
                                        Aplicaciones móviles nativas y multiplataforma para iOS y Android que 
                                        conectan tu negocio con tus clientes.
                                    </p>
                                    <ul class="space-y-3 mb-6">
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            React Native / Flutter
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Experiencia nativa
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Integración con APIs
                                        </li>
                                    </ul>
                                    <a href="#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                        </div>

                        <!-- Consulting Service -->
                        <div class="group bg-black/30 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:border-emerald-400/40 hover:shadow-xl hover:shadow-black/40 transition-all duration-500 hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-700 to-slate-900 rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                        <svg class="w-8 h-8 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-4">Consultoría Tech</h3>
                                    <p class="text-gray-400 mb-6">
                                        Asesoría especializada en transformación digital, arquitectura de software 
                                        y optimización de procesos.
                                    </p>
                                    <ul class="space-y-3 mb-6">
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Auditoría de sistemas
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Optimización de procesos
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Capacitación técnica
                                        </li>
                                    </ul>
                                    <a href="#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                        </div>

                        <!-- Custom Solutions Service -->
                        <div class="group bg-black/30 backdrop-blur-xl border border-white/10 rounded-2xl p-8 hover:border-orange-400/40 hover:shadow-xl hover:shadow-black/40 transition-all duration-500 hover:-translate-y-1">
                                    <div class="w-16 h-16 bg-gradient-to-br from-slate-600 to-slate-800 rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                        <svg class="w-8 h-8 group-hover:text-orange-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-4">Soluciones a Medida</h3>
                                    <p class="text-gray-400 mb-6">
                                        Desarrollo de software personalizado que se adapta exactamente a las 
                                        necesidades únicas de tu negocio.
                                    </p>
                                    <ul class="space-y-3 mb-6">
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Análisis de requerimientos
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Desarrollo ágil
                                        </li>
                                        <li class="flex items-center text-gray-300">
                                            <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Soporte continuo
                                        </li>
                                    </ul>
                                    <a href="#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

            <!-- About Section -->
            <section id="about" class="container mx-auto px-6 py-20">
                        <div class="max-w-6xl mx-auto">
                            <div class="grid lg:grid-cols-2 gap-12 items-center">
                                <div>
                                    <div class="inline-block px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-cyan-400 text-sm mb-6">
                                        🇸🇻 Empresa Salvadoreña
                                    </div>
                                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                                        Tecnología salvadoreña para el mundo
                                    </h2>
                                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                        En <span class="text-cyan-400 font-semibold">hayvoy</span>, creemos en el talento 
                                        salvadoreño y en nuestra capacidad de crear soluciones tecnológicas de clase mundial.
                                    </p>
                                    <p class="text-gray-400 mb-8 leading-relaxed">
                                        Somos un equipo apasionado por la tecnología, comprometidos con entregar soluciones 
                                        que realmente transformen negocios. Combinamos metodologías ágiles con las últimas 
                                        tecnologías para crear productos que superan expectativas.
                                    </p>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                                            <div class="text-3xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent mb-2">15+</div>
                                            <div class="text-sm text-gray-400">Proyectos</div>
                                        </div>
                                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                                            <div class="text-3xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent mb-2">10+</div>
                                            <div class="text-sm text-gray-400">Clientes</div>
                                        </div>
                                        <div class="text-center transform hover:scale-110 transition-transform duration-300">
                                            <div class="text-3xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent mb-2">100%</div>
                                            <div class="text-sm text-gray-400">Satisfacción</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                                    <div class="relative">
                    <div class="aspect-square rounded-2xl bg-gradient-to-br from-black/30 to-slate-900/40 backdrop-blur-xl border border-white/10 p-8 relative overflow-hidden hover:border-cyan-400/30 transition-all duration-500 hover:shadow-2xl hover:shadow-black/50">
                                        <div class="absolute inset-0 bg-gradient-to-br from-slate-600/10 to-transparent"></div>
                                        <div class="relative z-10 h-full flex items-center justify-center">
                                            <div class="text-center">
                                                <div class="w-32 h-32 bg-gradient-to-br from-slate-700 to-slate-900 rounded-3xl mx-auto mb-6 flex items-center justify-center transform rotate-12 hover:rotate-0 transition-transform duration-500">
                                                    <span class="text-6xl">🚀</span>
                                                </div>
                                                <h3 class="text-2xl font-bold mb-3">Innovación constante</h3>
                                                <p class="text-gray-400 mb-6">
                                                    Siempre a la vanguardia de la tecnología
                                                </p>
                                                
                                                <!-- Tech Stack Badges -->
                                                <div class="flex flex-wrap gap-3 justify-center mt-6">
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-cyan-400 hover:border-cyan-500/50 transition-colors cursor-default">Laravel</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-blue-400 hover:border-blue-500/50 transition-colors cursor-default">React</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-red-400 hover:border-red-500/50 transition-colors cursor-default">Angular</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-emerald-400 hover:border-emerald-500/50 transition-colors cursor-default">Vue.js</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-purple-400 hover:border-purple-500/50 transition-colors cursor-default">.NET</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-orange-400 hover:border-orange-500/50 transition-colors cursor-default">Java</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-emerald-500 hover:border-emerald-500/50 transition-colors cursor-default">Django</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-orange-400 hover:border-orange-500/50 transition-colors cursor-default">Tailwind</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-green-400 hover:border-green-500/50 transition-colors cursor-default">Android</span>
                                                    <span class="px-3 py-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-full text-xs text-slate-300 hover:border-slate-400/50 transition-colors cursor-default">iOS</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

            <!-- Contact Section -->
            <section id="contacto" class="container mx-auto px-6 py-20">
                        <div class="max-w-4xl mx-auto">
                                            <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-br from-black/30 to-slate-900/40 backdrop-blur-xl border border-white/10 rounded-2xl p-8 lg:p-12 hover:border-cyan-400/30 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500">
                                <div class="text-center mb-12">
                                    <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                                        ¿Listo para comenzar?
                                    </h2>
                                    <p class="text-xl text-gray-300">
                                        Conversemos sobre cómo podemos ayudarte a transformar tu negocio
                                    </p>
                                </div>
                                
                                <div class="grid md:grid-cols-2 gap-8 mb-8">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-1">Email</h3>
                                            <a href="mailto:hayvoy@hayvoy.com" class="text-cyan-400 hover:text-cyan-300">
                                                hayvoy@hayvoy.com
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-1">Teléfono</h3>
                                            <a href="tel:+50378901234" class="text-cyan-400 hover:text-cyan-300">
                                                +503 7890-1234
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-1">Web</h3>
                                            <a href="https://hayvoy.com" class="text-cyan-400 hover:text-cyan-300">
                                                www.hayvoy.com
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold mb-1">Ubicación</h3>
                                            <p class="text-gray-300">San Salvador, El Salvador</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center pt-8 border-t border-slate-700">
                                    <a
                                        href="mailto:hayvoy@hayvoy.com?subject=Consulta sobre servicios"
                                        class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 text-lg font-semibold relative overflow-hidden hover:scale-105"
                                    >
                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                        <span class="relative">Enviar mensaje</span>
                                        <svg class="w-5 h-5 ml-2 relative group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width=2 d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

            <!-- Footer -->
            <footer class="container mx-auto px-6 py-12 border-t border-slate-800">
                        <div class="max-w-6xl mx-auto">
                            <div class="grid md:grid-cols-4 gap-8 mb-8">
                                <div class="md:col-span-2">
                                    <div class="flex items-center space-x-2 mb-4">
                                        <div class="w-10 h-10 bg-gradient-to-br from-slate-600 to-slate-800 rounded-lg flex items-center justify-center">
                                            <span class="text-white font-bold text-xl">H</span>
                                        </div>
                                        <span class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                            hayvoy
                                        </span>
                                    </div>
                                    <p class="text-gray-400 mb-4 max-w-md">
                                        Soluciones tecnológicas salvadoreñas de clase mundial. 
                                        Transformando negocios con innovación y calidad.
                                    </p>
                                    <div class="flex space-x-4">
                                        <a href="https://facebook.com/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Síguenos en Facebook" class="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Síguenos en Twitter" class="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                            </svg>
                                        </a>
                                        <a href="https://linkedin.com/company/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Conéctate en LinkedIn" class="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
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
                                        <li><a href="#contacto" class="hover:text-cyan-400 transition-colors">Contacto</a></li>
                                        <li><a href="{{ route('privacidad') }}" class="hover:text-cyan-400 transition-colors">Privacidad</a></li>
                                        <li><a href="{{ route('terminos') }}" class="hover:text-cyan-400 transition-colors">Términos</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="pt-8 border-t border-slate-800 text-center text-gray-400 text-sm">
                                <p>&copy; {{ date('Y') }} hayvoy. Orgullosamente salvadoreño 🇸🇻. Todos los derechos reservados.</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        <script src="//unpkg.com/alpinejs" defer></script>
        <style>
            [x-cloak] { display: none !important; }
            
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
                opacity: 0;
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-10px);
                }
            }
            
            .animate-float {
                animation: float 3s ease-in-out infinite;
            }
            
            @keyframes gradient {
                0%, 100% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
            }
            
            .animate-gradient {
                background-size: 200% 200%;
                animation: gradient 3s ease infinite;
            }
            
            @keyframes pulse-subtle {
                0%, 100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.85;
                }
            }
            
            .animate-pulse-subtle {
                animation: pulse-subtle 2s ease-in-out infinite;
            }
            
            @keyframes float-slow {
                0%, 100% {
                    transform: translate(0, 0);
                }
                33% {
                    transform: translate(30px, -30px);
                }
                66% {
                    transform: translate(-20px, 20px);
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
            
            @keyframes shimmer {
                0% {
                    background-position: -1000px 0;
                }
                100% {
                    background-position: 1000px 0;
                }
            }
            
            .animate-shimmer {
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
                background-size: 1000px 100%;
                animation: shimmer 3s infinite;
            }
            
            /* Accessibility - Respect reduced motion preference */
            @media (prefers-reduced-motion: reduce) {
                *,
                *::before,
                *::after {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
                
                .animate-pulse,
                .animate-float,
                .animate-spin-slow,
                .animate-spin-reverse,
                .animate-shimmer,
                .animate-gradient,
                .animate-float-slow {
                    animation: none !important;
                }
            }
            
            /* Frosted glass effect enhancement */
            .backdrop-blur-xl {
                backdrop-filter: blur(24px) saturate(180%);
                -webkit-backdrop-filter: blur(24px) saturate(180%);
            }
        </style>
    </body>
</html>
