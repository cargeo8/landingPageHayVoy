@extends('layouts.app')

@section('title', 'Servicios - hayvoy')
@section('description', 'Descubre nuestros servicios de desarrollo web, apps móviles, consultoría tecnológica y soluciones a medida. Conoce CollectHub, nuestro sistema de gestión de cobranzas.')

@section('content')
<div class="container mx-auto px-6 py-12">
    <!-- Hero Section -->
    <div class="text-center mb-20 animate-fade-in">
        <div class="inline-block px-4 py-2 bg-cyan-500/10 border border-cyan-500/20 rounded-full mb-6">
            <span class="text-cyan-400 text-sm font-semibold">🇸🇻 Servicios de Calidad Mundial</span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Nuestros <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Servicios</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Soluciones tecnológicas completas que impulsan la transformación digital de tu negocio
        </p>
    </div>

    <!-- CollectHub - Producto Destacado -->
    <div id="collecthub" class="mb-24 scroll-mt-32">
        <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-white/10 shadow-2xl">
            <div class="flex items-center gap-3 mb-6">
                <span class="px-4 py-1 bg-gradient-to-r from-amber-500 to-orange-500 rounded-full text-sm font-semibold">
                    ⭐ Producto Destacado
                </span>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">CollectHub</span>
                    </h2>
                    <p class="text-xl text-gray-300 mb-8">
                        Sistema integral de gestión de cobranzas y pagos. Controla, automatiza y optimiza todo el proceso de cobro de tu empresa con una solución moderna y eficiente.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Gestión de Clientes</h4>
                                <p class="text-gray-400 text-sm">Control completo de cartera</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Cobradores Móviles</h4>
                                <p class="text-gray-400 text-sm">App para cobradores en campo</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Reportes en Tiempo Real</h4>
                                <p class="text-gray-400 text-sm">Métricas y análisis instantáneos</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Múltiples Formas de Pago</h4>
                                <p class="text-gray-400 text-sm">Efectivo, tarjeta, transferencias</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full border-2 border-slate-900 flex items-center justify-center text-sm font-bold">JD</div>
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full border-2 border-slate-900 flex items-center justify-center text-sm font-bold">MC</div>
                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full border-2 border-slate-900 flex items-center justify-center text-sm font-bold">AR</div>
                        </div>
                        <p class="text-gray-400">
                            <span class="text-cyan-400 font-semibold">10+ empresas</span> ya optimizan sus cobranzas con CollectHub
                        </p>
                    </div>

                    <a 
                        href="{{ route('home') }}#contacto" 
                        class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 font-semibold"
                    >
                        Solicitar Demo
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-2xl blur-3xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10">
                        <svg class="w-full h-64" viewBox="0 0 200 200" fill="none">
                            <rect x="20" y="40" width="160" height="120" rx="8" fill="currentColor" class="text-slate-700/50"/>
                            <rect x="30" y="50" width="60" height="8" rx="4" fill="currentColor" class="text-cyan-500/50"/>
                            <rect x="30" y="70" width="140" height="4" rx="2" fill="currentColor" class="text-slate-600"/>
                            <rect x="30" y="80" width="100" height="4" rx="2" fill="currentColor" class="text-slate-600"/>
                            <rect x="30" y="100" width="60" height="30" rx="4" fill="currentColor" class="text-blue-500/30"/>
                            <rect x="100" y="100" width="70" height="30" rx="4" fill="currentColor" class="text-cyan-500/30"/>
                            <circle cx="50" cy="145" r="5" fill="currentColor" class="text-cyan-400"/>
                            <circle cx="70" cy="145" r="5" fill="currentColor" class="text-blue-400"/>
                            <circle cx="90" cy="145" r="5" fill="currentColor" class="text-purple-400"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Intelligence - Sección Destacada -->
    <div id="business-intelligence" class="mb-24 scroll-mt-32">
        <div class="bg-gradient-to-br from-purple-900/50 to-pink-900/30 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-purple-500/20 shadow-2xl">
            <div class="flex items-center gap-3 mb-6">
                <span class="px-4 py-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full text-sm font-semibold">
                    📊 Business Intelligence
                </span>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent">Inteligencia de Negocios</span>
                    </h2>
                    <p class="text-xl text-gray-300 mb-8">
                        Transforma tus datos en decisiones estratégicas. Implementamos soluciones de Business Intelligence que visualizan, analizan y predicen el comportamiento crítico de tu negocio.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Dashboards Interactivos</h4>
                                <p class="text-gray-400 text-sm">Visualiza tus KPIs en tiempo real</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Análisis Predictivo</h4>
                                <p class="text-gray-400 text-sm">Machine learning para proyecciones</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Reportes Automatizados</h4>
                                <p class="text-gray-400 text-sm">Informes personalizados automáticos</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-2">Integración de Datos</h4>
                                <p class="text-gray-400 text-sm">Conecta múltiples fuentes de datos</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full border-2 border-slate-900 flex items-center justify-center text-sm font-bold">BI</div>
                            <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full border-2 border-slate-900 flex items-center justify-center text-sm font-bold">DW</div>
                            <div class="w-10 h-10 bg-gradient-to-br from-violet-500 to-purple-600 rounded-full border-2 border-slate-900 flex items-center justify-center text-sm font-bold">ML</div>
                        </div>
                        <p class="text-gray-400">
                            <span class="text-purple-400 font-semibold">Power BI, Tableau, Looker</span> y más herramientas líderes
                        </p>
                    </div>

                    <a 
                        href="{{ route('home') }}#contacto" 
                        class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl hover:from-purple-600 hover:to-pink-600 transition-all duration-300 shadow-lg hover:shadow-purple-500/50 font-semibold"
                    >
                        Consulta Gratuita
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-2xl blur-3xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-purple-500/20">
                        <div class="space-y-6">
                            <!-- Dashboard mockup -->
                            <div class="bg-slate-900/50 rounded-xl p-4 border border-purple-500/20">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex gap-2">
                                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">Dashboard Ejecutivo</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div class="bg-purple-500/10 rounded-lg p-3 border border-purple-500/20">
                                        <div class="text-xs text-gray-400 mb-1">Ventas</div>
                                        <div class="text-lg font-bold text-purple-400">$125K</div>
                                        <div class="text-xs text-emerald-400">↑ 12%</div>
                                    </div>
                                    <div class="bg-pink-500/10 rounded-lg p-3 border border-pink-500/20">
                                        <div class="text-xs text-gray-400 mb-1">ROI</div>
                                        <div class="text-lg font-bold text-pink-400">287%</div>
                                        <div class="text-xs text-emerald-400">↑ 8%</div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="h-2 bg-slate-700/50 rounded-full overflow-hidden">
                                        <div class="h-full w-3/4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                                    </div>
                                    <div class="h-2 bg-slate-700/50 rounded-full overflow-hidden">
                                        <div class="h-full w-1/2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                                    </div>
                                    <div class="h-2 bg-slate-700/50 rounded-full overflow-hidden">
                                        <div class="h-full w-5/6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Chart visualization -->
                            <div class="flex items-end justify-between h-24 gap-2">
                                <div class="w-full bg-gradient-to-t from-purple-500/50 to-purple-500/20 rounded-t-lg" style="height: 45%"></div>
                                <div class="w-full bg-gradient-to-t from-purple-500/50 to-purple-500/20 rounded-t-lg" style="height: 70%"></div>
                                <div class="w-full bg-gradient-to-t from-pink-500/50 to-pink-500/20 rounded-t-lg" style="height: 60%"></div>
                                <div class="w-full bg-gradient-to-t from-pink-500/50 to-pink-500/20 rounded-t-lg" style="height: 85%"></div>
                                <div class="w-full bg-gradient-to-t from-purple-500/50 to-purple-500/20 rounded-t-lg" style="height: 55%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Otros Servicios -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Desarrollo Web -->
        <div id="desarrollo-web" class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all duration-300 group scroll-mt-32">
            <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-4">Desarrollo Web</h3>
            <p class="text-gray-400 mb-6">
                Aplicaciones web modernas y responsivas construidas con las últimas tecnologías. Laravel, React, Vue.js y más.
            </p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Arquitectura escalable
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Diseño responsivo
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    SEO optimizado
                </li>
            </ul>
            <a href="{{ route('home') }}#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center gap-2 group">
                Más información
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <!-- Apps Móviles -->
        <div id="apps-moviles" class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all duration-300 group scroll-mt-32">
            <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-4">Apps Móviles</h3>
            <p class="text-gray-400 mb-6">
                Aplicaciones móviles nativas y multiplataforma para iOS y Android que conectan tu negocio con tus clientes.
            </p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    React Native / Flutter
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Experiencia nativa
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Integración con APIs
                </li>
            </ul>
            <a href="{{ route('home') }}#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center gap-2 group">
                Más información
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <!-- Consultoría Tech -->
        <div id="consultoria" class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all duration-300 group scroll-mt-32">
            <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-4">Consultoría Tech</h3>
            <p class="text-gray-400 mb-6">
                Asesoría especializada en transformación digital, arquitectura de software y optimización de procesos.
            </p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Auditoría de sistemas
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Optimización de procesos
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Capacitación técnica
                </li>
            </ul>
            <a href="{{ route('home') }}#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center gap-2 group">
                Más información
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <!-- Soluciones a Medida -->
        <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all duration-300 group lg:col-span-3">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-4">Soluciones a Medida</h3>
                    <p class="text-gray-400 mb-6">
                        Desarrollo de software personalizado que se adapta exactamente a las necesidades únicas de tu negocio.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-3 text-gray-300">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Análisis profundo de requerimientos
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Desarrollo ágil con entregas iterativas
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Soporte y mantenimiento continuo
                        </li>
                    </ul>
                    <a href="{{ route('home') }}#contacto" class="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center gap-2 group">
                        Más información
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="bg-slate-800/50 rounded-2xl p-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-slate-700/30 rounded-xl">
                            <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">📋</span>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Descubrimiento</p>
                                <p class="text-gray-400 text-sm">Análisis de necesidades</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-slate-700/30 rounded-xl">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">🎨</span>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Diseño</p>
                                <p class="text-gray-400 text-sm">Prototipado y UI/UX</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-slate-700/30 rounded-xl">
                            <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">⚙️</span>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Desarrollo</p>
                                <p class="text-gray-400 text-sm">Construcción iterativa</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-slate-700/30 rounded-xl">
                            <div class="w-12 h-12 bg-emerald-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">🚀</span>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Lanzamiento</p>
                                <p class="text-gray-400 text-sm">Deploy y soporte</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Final -->
    <div class="mt-20 text-center bg-gradient-to-r from-cyan-500/10 to-blue-500/10 border border-cyan-500/20 rounded-3xl p-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            ¿Listo para transformar tu negocio?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Conversemos sobre cómo nuestros servicios pueden impulsar tu empresa al siguiente nivel
        </p>
        <a 
            href="{{ route('home') }}#contacto" 
            class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 font-semibold text-lg"
        >
            Contáctanos Ahora
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</div>
@endsection
