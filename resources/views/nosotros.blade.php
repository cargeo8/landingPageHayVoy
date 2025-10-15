@extends('layouts.app')

@section('title', 'Nosotros - hayvoy')
@section('description', 'Conoce a hayvoy, empresa salvadoreña especializada en soluciones tecnológicas de clase mundial. Talento local, impacto global.')

@section('content')
<div class="container mx-auto px-6 py-12">
    <!-- Hero Section -->
    <div class="text-center mb-20 animate-fade-in">
        <div class="inline-block px-4 py-2 bg-cyan-500/10 border border-cyan-500/20 rounded-full mb-6">
            <span class="text-cyan-400 text-sm font-semibold">🇸🇻 Empresa Salvadoreña</span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Tecnología <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Salvadoreña</span> para el Mundo
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            En hayvoy, creemos en el talento salvadoreño y en nuestra capacidad de crear soluciones tecnológicas de clase mundial
        </p>
    </div>

    <!-- Nuestra Historia -->
    <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
        <div>
            <h2 class="text-4xl font-bold mb-6">
                Nuestra <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Historia</span>
            </h2>
            <p class="text-gray-300 mb-4 text-lg">
                Somos un equipo apasionado por la tecnología, comprometidos con entregar soluciones que realmente transformen negocios. Combinamos metodologías ágiles con las últimas tecnologías para crear productos que superan expectativas.
            </p>
            <p class="text-gray-300 mb-4">
                Nacimos con la visión de demostrar que desde El Salvador se puede competir a nivel mundial. Cada proyecto que desarrollamos lleva impreso nuestro compromiso con la excelencia y la innovación.
            </p>
            <p class="text-gray-300">
                Trabajamos de cerca con nuestros clientes, entendiendo sus desafíos únicos y creando soluciones personalizadas que generan resultados medibles.
            </p>
        </div>
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-2xl blur-3xl"></div>
            <div class="relative bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10">
                <div class="grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-2">15+</div>
                        <div class="text-gray-400 text-sm">Proyectos<br/>Completados</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-2">10+</div>
                        <div class="text-gray-400 text-sm">Clientes<br/>Satisfechos</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-2">100%</div>
                        <div class="text-gray-400 text-sm">Tasa de<br/>Satisfacción</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nuestros Valores -->
    <div class="mb-24">
        <h2 class="text-4xl font-bold text-center mb-12">
            Nuestros <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Valores</span>
        </h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Excelencia</h3>
                <p class="text-gray-400">
                    Nos comprometemos con la calidad en cada línea de código, cada diseño y cada interacción. La excelencia no es un acto, sino un hábito.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Innovación</h3>
                <p class="text-gray-400">
                    Siempre explorando nuevas tecnologías y metodologías para ofrecer soluciones de vanguardia que mantengan a nuestros clientes competitivos.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Colaboración</h3>
                <p class="text-gray-400">
                    Trabajamos mano a mano con nuestros clientes, siendo verdaderos socios en su transformación digital y crecimiento tecnológico.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Agilidad</h3>
                <p class="text-gray-400">
                    Entregas rápidas sin comprometer la calidad. Adaptamos nuestra metodología a las necesidades específicas de cada proyecto.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Orgullo Salvadoreño</h3>
                <p class="text-gray-400">
                    Representamos el talento y la calidad salvadoreña en cada proyecto, demostrando que podemos competir a nivel global.
                </p>
            </div>

            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/30 transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Pasión</h3>
                <p class="text-gray-400">
                    Amamos lo que hacemos. Cada proyecto es una oportunidad para crear algo extraordinario y marcar una diferencia real.
                </p>
            </div>
        </div>
    </div>

    <!-- Tecnologías -->
    <div class="mb-24">
        <h2 class="text-4xl font-bold text-center mb-6">
            Tecnologías que <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Dominamos</span>
        </h2>
        <p class="text-center text-gray-400 mb-12 max-w-2xl mx-auto">
            Siempre a la vanguardia de la tecnología, trabajamos con las herramientas más modernas y eficientes del mercado
        </p>
        <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
            <div class="flex flex-wrap justify-center gap-4">
                <span class="px-6 py-3 bg-gradient-to-r from-red-500/20 to-orange-500/20 border border-red-500/30 rounded-xl text-white font-semibold">Laravel</span>
                <span class="px-6 py-3 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 border border-cyan-500/30 rounded-xl text-white font-semibold">React</span>
                <span class="px-6 py-3 bg-gradient-to-r from-red-500/20 to-pink-500/20 border border-red-500/30 rounded-xl text-white font-semibold">Angular</span>
                <span class="px-6 py-3 bg-gradient-to-r from-emerald-500/20 to-teal-500/20 border border-emerald-500/30 rounded-xl text-white font-semibold">Vue.js</span>
                <span class="px-6 py-3 bg-gradient-to-r from-purple-500/20 to-pink-500/20 border border-purple-500/30 rounded-xl text-white font-semibold">.NET</span>
                <span class="px-6 py-3 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 border border-cyan-500/30 rounded-xl text-white font-semibold">Tailwind CSS</span>
                <span class="px-6 py-3 bg-gradient-to-r from-green-500/20 to-teal-500/20 border border-green-500/30 rounded-xl text-white font-semibold">Android</span>
                <span class="px-6 py-3 bg-gradient-to-r from-slate-500/20 to-gray-500/20 border border-slate-500/30 rounded-xl text-white font-semibold">iOS</span>
                <span class="px-6 py-3 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 border border-blue-500/30 rounded-xl text-white font-semibold">React Native</span>
                <span class="px-6 py-3 bg-gradient-to-r from-sky-500/20 to-blue-500/20 border border-sky-500/30 rounded-xl text-white font-semibold">Flutter</span>
                <span class="px-6 py-3 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 border border-indigo-500/30 rounded-xl text-white font-semibold">PostgreSQL</span>
                <span class="px-6 py-3 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 border border-blue-500/30 rounded-xl text-white font-semibold">MySQL</span>
                <span class="px-6 py-3 bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-500/30 rounded-xl text-white font-semibold">MongoDB</span>
                <span class="px-6 py-3 bg-gradient-to-r from-orange-500/20 to-amber-500/20 border border-orange-500/30 rounded-xl text-white font-semibold">AWS</span>
                <span class="px-6 py-3 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 border border-blue-500/30 rounded-xl text-white font-semibold">Docker</span>
                <span class="px-6 py-3 bg-gradient-to-r from-purple-500/20 to-pink-500/20 border border-purple-500/30 rounded-xl text-white font-semibold">Git</span>
            </div>
        </div>
    </div>

    <!-- Metodología -->
    <div class="mb-24">
        <h2 class="text-4xl font-bold text-center mb-6">
            Nuestra <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Metodología</span>
        </h2>
        <p class="text-center text-gray-400 mb-12 max-w-2xl mx-auto">
            Seguimos un proceso probado que garantiza resultados de calidad en tiempo y forma
        </p>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="relative">
                <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                    <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 text-white font-bold text-xl">1</div>
                    <h3 class="text-xl font-bold text-white mb-3">Descubrimiento</h3>
                    <p class="text-gray-400">
                        Analizamos a profundidad tus necesidades y objetivos de negocio
                    </p>
                </div>
                <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                    <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 text-white font-bold text-xl">2</div>
                    <h3 class="text-xl font-bold text-white mb-3">Planificación</h3>
                    <p class="text-gray-400">
                        Diseñamos la arquitectura y definimos el roadmap del proyecto
                    </p>
                </div>
                <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                    <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 text-white font-bold text-xl">3</div>
                    <h3 class="text-xl font-bold text-white mb-3">Desarrollo</h3>
                    <p class="text-gray-400">
                        Construimos tu solución con entregas iterativas y feedback constante
                    </p>
                </div>
                <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 text-white font-bold text-xl">4</div>
                <h3 class="text-xl font-bold text-white mb-3">Lanzamiento</h3>
                <p class="text-gray-400">
                    Desplegamos la solución y brindamos soporte continuo
                </p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="text-center bg-gradient-to-r from-cyan-500/10 to-blue-500/10 border border-cyan-500/20 rounded-3xl p-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            ¿Quieres conocer más sobre nosotros?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Conversemos sobre cómo podemos ayudarte a alcanzar tus objetivos tecnológicos
        </p>
        <a 
            href="{{ route('home') }}#contacto" 
            class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 font-semibold text-lg"
        >
            Hablemos
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</div>
@endsection
