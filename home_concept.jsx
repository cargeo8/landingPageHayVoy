import { Head, Link } from '@inertiajs/react';
import { useState } from 'react';

export default function Welcome({ auth }) {
    const [isVideoOpen, setIsVideoOpen] = useState(false);

    return (
        <>
            <Head title="hayvoy - Soluciones Tecnológicas de Calidad">
                <meta name="description" content="hayvoy - Consultora salvadoreña especializada en desarrollo de software personalizado, aplicaciones web y móviles. Conoce CollectHub, nuestro sistema de gestión de cobranzas." />
                <meta property="og:title" content="hayvoy - Soluciones Tecnológicas Salvadoreñas" />
                <meta property="og:description" content="Desarrollo de software personalizado y soluciones tecnológicas de clase mundial desde El Salvador." />
                <meta property="og:type" content="website" />
                <meta property="og:url" content="https://hayvoy.com" />
                <meta name="twitter:card" content="summary_large_image" />
                <meta name="keywords" content="desarrollo software El Salvador, consultora tecnología, CollectHub, apps móviles, desarrollo web" />
            </Head>
            <style>{`html { scroll-behavior: smooth; }`}</style>
            <div className="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 text-white min-h-screen relative overflow-hidden">
                {/* Animated Background Elements */}
                <div className="absolute inset-0 overflow-hidden pointer-events-none">
                    <div className="absolute top-0 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-pulse"></div>
                    <div className="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
                    <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-cyan-500/10 rounded-full"></div>
                    <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-cyan-500/10 rounded-full"></div>
                </div>

                <div className="relative z-10">
                    {/* Navigation */}
                    <header className="container mx-auto px-6 py-6">
                        <nav className="flex items-center justify-between">
                            <div className="flex items-center space-x-2">
                                <div className="w-10 h-10 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center">
                                    <span className="text-white font-bold text-xl">H</span>
                                </div>
                                <span className="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                    hayvoy
                                </span>
                            </div>
                            
                            <div className="hidden md:flex items-center space-x-8">
                                <a href="#servicios" className="text-gray-300 hover:text-white transition-colors">
                                    Servicios
                                </a>
                                <a href="#about" className="text-gray-300 hover:text-white transition-colors">
                                    Nosotros
                                </a>
                                <a href="#contacto" className="text-gray-300 hover:text-white transition-colors">
                                    Contacto
                                </a>
                            </div>

                            <div className="flex items-center space-x-4">
                                {auth.user ? (
                                    <Link
                                        href={route('dashboard')}
                                        className="px-6 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50"
                                    >
                                        Dashboard
                                    </Link>
                                ) : (
                                    <a
                                        href="#contacto"
                                        className="px-6 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50"
                                    >
                                        Hablemos
                                    </a>
                                )}
                            </div>
                        </nav>
                    </header>

                    {/* Hero Section */}
                    <section className="container mx-auto px-6 py-20 lg:py-32">
                        <div className="max-w-5xl mx-auto text-center">
                            <div className="mb-6 inline-block px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-cyan-400 text-sm">
                                🇸🇻 Tecnología salvadoreña de clase mundial
                            </div>
                            
                            <h1 className="text-5xl lg:text-7xl font-bold mb-8 leading-tight">
                                Soluciones tecnológicas{' '}
                                <span className="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
                                    personalizadas
                                </span>
                                <br />
                                que impulsan tu negocio
                            </h1>
                            
                            <p className="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                                Entregamos soluciones hoy, construidas con calidad que potencian tu mañana. 
                                Especialistas en desarrollo ágil y sistemas empresariales.
                            </p>
                            
                            <div className="flex flex-col sm:flex-row items-center justify-center gap-4">
                                <a
                                    href="#contacto"
                                    className="px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 text-lg font-semibold group"
                                >
                                    Comencemos
                                    <span className="inline-block ml-2 group-hover:translate-x-1 transition-transform">→</span>
                                </a>
                                <button
                                    onClick={() => setIsVideoOpen(true)}
                                    className="px-8 py-4 border border-cyan-500/50 rounded-lg hover:bg-cyan-500/10 transition-all duration-300 text-lg font-semibold"
                                >
                                    Ver demo
                                </button>
                            </div>

                            {/* 3D Visual Elements */}
                            <div className="mt-20 relative">
                                <div className="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent z-10"></div>
                                <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    <div className="transform hover:scale-105 transition-transform duration-300">
                                        <div className="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm border border-cyan-500/20 rounded-xl p-8 hover:border-cyan-500/50 transition-colors">
                                            <div className="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg mb-4 flex items-center justify-center">
                                                <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                </svg>
                                            </div>
                                            <h3 className="text-xl font-bold mb-2">Desarrollo Ágil</h3>
                                            <p className="text-gray-400">Entregas rápidas sin comprometer calidad</p>
                                        </div>
                                    </div>
                                    <div className="transform hover:scale-105 transition-transform duration-300">
                                        <div className="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm border border-cyan-500/20 rounded-xl p-8 hover:border-cyan-500/50 transition-colors">
                                            <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg mb-4 flex items-center justify-center">
                                                <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                </svg>
                                            </div>
                                            <h3 className="text-xl font-bold mb-2">Soluciones Escalables</h3>
                                            <p className="text-gray-400">Crecemos junto a tu empresa</p>
                                        </div>
                                    </div>
                                    <div className="transform hover:scale-105 transition-transform duration-300">
                                        <div className="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm border border-cyan-500/20 rounded-xl p-8 hover:border-cyan-500/50 transition-colors">
                                            <div className="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg mb-4 flex items-center justify-center">
                                                <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                </svg>
                                            </div>
                                            <h3 className="text-xl font-bold mb-2">Soporte 24/7</h3>
                                            <p className="text-gray-400">Siempre estamos para ti</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* Services Section */}
                    <section id="servicios" className="container mx-auto px-6 py-20">
                        <div className="max-w-6xl mx-auto">
                            <div className="text-center mb-16">
                                <h2 className="text-4xl lg:text-5xl font-bold mb-4">
                                    Nuestros Servicios
                                </h2>
                                <p className="text-xl text-gray-300">
                                    Soluciones completas para tu transformación digital
                                </p>
                            </div>

                            <div className="grid gap-8 lg:grid-cols-2">
                                {/* CollectHub - Featured Service */}
                                <div className="lg:col-span-2 bg-gradient-to-br from-cyan-500/10 via-blue-500/10 to-purple-500/10 backdrop-blur-sm border border-cyan-500/30 rounded-2xl p-8 lg:p-12 hover:border-cyan-500/50 transition-all duration-300 relative overflow-hidden group">
                                    <div className="absolute inset-0 bg-gradient-to-r from-cyan-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <div className="relative z-10">
                                        <div className="flex items-start justify-between mb-6">
                                            <div>
                                                <div className="inline-block px-4 py-1 bg-cyan-500/20 border border-cyan-500/40 rounded-full text-cyan-400 text-sm mb-4">
                                                    ⭐ Producto Destacado
                                                </div>
                                                <h3 className="text-3xl lg:text-4xl font-bold mb-4 flex items-center">
                                                    <span className="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                                        CollectHub
                                                    </span>
                                                </h3>
                                                <p className="text-xl text-gray-300 mb-6 max-w-2xl">
                                                    Sistema integral de gestión de cobranzas y pagos. Controla, automatiza y optimiza 
                                                    todo el proceso de cobro de tu empresa con una solución moderna y eficiente.
                                                </p>
                                            </div>
                                            <div className="hidden lg:block w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center transform rotate-12 group-hover:rotate-0 transition-transform">
                                                <svg className="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div className="grid md:grid-cols-3 gap-6 mb-8">
                                            <div className="flex items-start space-x-3">
                                                <div className="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                                    <svg className="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h4 className="font-semibold mb-1">Gestión de Clientes</h4>
                                                    <p className="text-sm text-gray-400">Control completo de cartera</p>
                                                </div>
                                            </div>
                                            <div className="flex items-start space-x-3">
                                                <div className="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                                    <svg className="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h4 className="font-semibold mb-1">Cobradores Móviles</h4>
                                                    <p className="text-sm text-gray-400">App para cobradores en campo</p>
                                                </div>
                                            </div>
                                            <div className="flex items-start space-x-3">
                                                <div className="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                                    <svg className="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h4 className="font-semibold mb-1">Reportes en Tiempo Real</h4>
                                                    <p className="text-sm text-gray-400">Métricas y análisis instantáneos</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="flex flex-wrap gap-4">
                                            <a
                                                href="#contacto"
                                                className="px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 font-semibold"
                                            >
                                                Solicitar Demo
                                            </a>
                                            {auth.user && (
                                                <Link
                                                    href={route('dashboard')}
                                                    className="px-6 py-3 border border-cyan-500/50 rounded-lg hover:bg-cyan-500/10 transition-all duration-300 font-semibold"
                                                >
                                                    Acceder al Sistema
                                                </Link>
                                            )}
                                        </div>
                                    </div>
                                </div>

                                {/* Development Service */}
                                <div className="bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-8 hover:border-cyan-500/50 transition-all duration-300">
                                    <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl mb-6 flex items-center justify-center">
                                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                    </div>
                                    <h3 className="text-2xl font-bold mb-4">Desarrollo Web</h3>
                                    <p className="text-gray-400 mb-6">
                                        Aplicaciones web modernas y responsivas construidas con las últimas tecnologías.
                                        Laravel, React, Vue.js y más.
                                    </p>
                                    <ul className="space-y-3 mb-6">
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Arquitectura escalable
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Diseño responsivo
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            SEO optimizado
                                        </li>
                                    </ul>
                                    <a href="#contacto" className="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                {/* Mobile Apps Service */}
                                <div className="bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-8 hover:border-cyan-500/50 transition-all duration-300">
                                    <div className="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl mb-6 flex items-center justify-center">
                                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <h3 className="text-2xl font-bold mb-4">Apps Móviles</h3>
                                    <p className="text-gray-400 mb-6">
                                        Aplicaciones móviles nativas y multiplataforma para iOS y Android que 
                                        conectan tu negocio con tus clientes.
                                    </p>
                                    <ul className="space-y-3 mb-6">
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            React Native / Flutter
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Experiencia nativa
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Integración con APIs
                                        </li>
                                    </ul>
                                    <a href="#contacto" className="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                {/* Consulting Service */}
                                <div className="bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-8 hover:border-cyan-500/50 transition-all duration-300">
                                    <div className="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl mb-6 flex items-center justify-center">
                                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <h3 className="text-2xl font-bold mb-4">Consultoría Tech</h3>
                                    <p className="text-gray-400 mb-6">
                                        Asesoría especializada en transformación digital, arquitectura de software 
                                        y optimización de procesos.
                                    </p>
                                    <ul className="space-y-3 mb-6">
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Auditoría de sistemas
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Optimización de procesos
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Capacitación técnica
                                        </li>
                                    </ul>
                                    <a href="#contacto" className="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                {/* Custom Solutions Service */}
                                <div className="bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-8 hover:border-cyan-500/50 transition-all duration-300">
                                    <div className="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl mb-6 flex items-center justify-center">
                                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                        </svg>
                                    </div>
                                    <h3 className="text-2xl font-bold mb-4">Soluciones a Medida</h3>
                                    <p className="text-gray-400 mb-6">
                                        Desarrollo de software personalizado que se adapta exactamente a las 
                                        necesidades únicas de tu negocio.
                                    </p>
                                    <ul className="space-y-3 mb-6">
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Análisis de requerimientos
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Desarrollo ágil
                                        </li>
                                        <li className="flex items-center text-gray-300">
                                            <svg className="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Soporte continuo
                                        </li>
                                    </ul>
                                    <a href="#contacto" className="text-cyan-400 hover:text-cyan-300 font-semibold flex items-center group">
                                        Más información
                                        <svg className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* About Section */}
                    <section id="about" className="container mx-auto px-6 py-20">
                        <div className="max-w-6xl mx-auto">
                            <div className="grid lg:grid-cols-2 gap-12 items-center">
                                <div>
                                    <div className="inline-block px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-cyan-400 text-sm mb-6">
                                        🇸🇻 Empresa Salvadoreña
                                    </div>
                                    <h2 className="text-4xl lg:text-5xl font-bold mb-6">
                                        Tecnología salvadoreña para el mundo
                                    </h2>
                                    <p className="text-xl text-gray-300 mb-8 leading-relaxed">
                                        En <span className="text-cyan-400 font-semibold">hayvoy</span>, creemos en el talento 
                                        salvadoreño y en nuestra capacidad de crear soluciones tecnológicas de clase mundial.
                                    </p>
                                    <p className="text-gray-400 mb-8 leading-relaxed">
                                        Somos un equipo apasionado por la tecnología, comprometidos con entregar soluciones 
                                        que realmente transformen negocios. Combinamos metodologías ágiles con las últimas 
                                        tecnologías para crear productos que superan expectativas.
                                    </p>
                                    <div className="grid grid-cols-3 gap-6">
                                        <div className="text-center">
                                            <div className="text-3xl font-bold text-cyan-400 mb-2">15+</div>
                                            <div className="text-sm text-gray-400">Proyectos</div>
                                        </div>
                                        <div className="text-center">
                                            <div className="text-3xl font-bold text-cyan-400 mb-2">10+</div>
                                            <div className="text-sm text-gray-400">Clientes</div>
                                        </div>
                                        <div className="text-center">
                                            <div className="text-3xl font-bold text-cyan-400 mb-2">100%</div>
                                            <div className="text-sm text-gray-400">Satisfacción</div>
                                        </div>
                                    </div>
                                </div>
                                <div className="relative">
                                    <div className="aspect-square rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 backdrop-blur-sm border border-cyan-500/30 p-8 relative overflow-hidden">
                                        <div className="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-transparent"></div>
                                        <div className="relative z-10 h-full flex items-center justify-center">
                                            <div className="text-center">
                                                <div className="w-32 h-32 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-3xl mx-auto mb-6 flex items-center justify-center transform rotate-12 hover:rotate-0 transition-transform duration-500">
                                                    <span className="text-6xl">🚀</span>
                                                </div>
                                                <h3 className="text-2xl font-bold mb-3">Innovación constante</h3>
                                                <p className="text-gray-400">
                                                    Siempre a la vanguardia de la tecnología
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* Contact Section */}
                    <section id="contacto" className="container mx-auto px-6 py-20">
                        <div className="max-w-4xl mx-auto">
                            <div className="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm border border-cyan-500/30 rounded-2xl p-8 lg:p-12">
                                <div className="text-center mb-12">
                                    <h2 className="text-4xl lg:text-5xl font-bold mb-4">
                                        ¿Listo para comenzar?
                                    </h2>
                                    <p className="text-xl text-gray-300">
                                        Conversemos sobre cómo podemos ayudarte a transformar tu negocio
                                    </p>
                                </div>
                                
                                <div className="grid md:grid-cols-2 gap-8 mb-8">
                                    <div className="flex items-start space-x-4">
                                        <div className="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg className="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 className="font-semibold mb-1">Email</h3>
                                            <a href="mailto:hayvoy@hayvoy.com" className="text-cyan-400 hover:text-cyan-300">
                                                hayvoy@hayvoy.com
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div className="flex items-start space-x-4">
                                        <div className="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg className="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 className="font-semibold mb-1">Teléfono</h3>
                                            <a href="tel:+50378901234" className="text-cyan-400 hover:text-cyan-300">
                                                +503 7890-1234
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div className="flex items-start space-x-4">
                                        <div className="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg className="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 className="font-semibold mb-1">Web</h3>
                                            <a href="https://hayvoy.com" className="text-cyan-400 hover:text-cyan-300">
                                                www.hayvoy.com
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div className="flex items-start space-x-4">
                                        <div className="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg className="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 className="font-semibold mb-1">Ubicación</h3>
                                            <p className="text-gray-300">San Salvador, El Salvador</p>
                                        </div>
                                    </div>
                                </div>

                                <div className="text-center pt-8 border-t border-slate-700">
                                    <a
                                        href="mailto:hayvoy@hayvoy.com?subject=Consulta sobre servicios"
                                        className="inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-cyan-500/50 text-lg font-semibold group"
                                    >
                                        Enviar mensaje
                                        <svg className="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* Footer */}
                    <footer className="container mx-auto px-6 py-12 border-t border-slate-800">
                        <div className="max-w-6xl mx-auto">
                            <div className="grid md:grid-cols-4 gap-8 mb-8">
                                <div className="md:col-span-2">
                                    <div className="flex items-center space-x-2 mb-4">
                                        <div className="w-10 h-10 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center">
                                            <span className="text-white font-bold text-xl">H</span>
                                        </div>
                                        <span className="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                            hayvoy
                                        </span>
                                    </div>
                                    <p className="text-gray-400 mb-4 max-w-md">
                                        Soluciones tecnológicas salvadoreñas de clase mundial. 
                                        Transformando negocios con innovación y calidad.
                                    </p>
                                    <div className="flex space-x-4">
                                        <a href="https://facebook.com/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Síguenos en Facebook" className="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                            <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Síguenos en Twitter" className="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                            <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                            </svg>
                                        </a>
                                        <a href="https://linkedin.com/company/hayvoy" target="_blank" rel="noopener noreferrer" aria-label="Conéctate en LinkedIn" className="w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors">
                                            <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                
                                <div>
                                    <h3 className="font-semibold mb-4">Servicios</h3>
                                    <ul className="space-y-2 text-gray-400">
                                        <li><a href="#servicios" className="hover:text-cyan-400 transition-colors">CollectHub</a></li>
                                        <li><a href="#servicios" className="hover:text-cyan-400 transition-colors">Desarrollo Web</a></li>
                                        <li><a href="#servicios" className="hover:text-cyan-400 transition-colors">Apps Móviles</a></li>
                                        <li><a href="#servicios" className="hover:text-cyan-400 transition-colors">Consultoría</a></li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h3 className="font-semibold mb-4">Empresa</h3>
                                    <ul className="space-y-2 text-gray-400">
                                        <li><a href="#about" className="hover:text-cyan-400 transition-colors">Nosotros</a></li>
                                        <li><a href="#contacto" className="hover:text-cyan-400 transition-colors">Contacto</a></li>
                                        <li><a href="#" className="hover:text-cyan-400 transition-colors">Privacidad</a></li>
                                        <li><a href="#" className="hover:text-cyan-400 transition-colors">Términos</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div className="pt-8 border-t border-slate-800 text-center text-gray-400 text-sm">
                                <p>&copy; {new Date().getFullYear()} hayvoy. Orgullosamente salvadoreño 🇸🇻. Todos los derechos reservados.</p>
                            </div>
                        </div>
                    </footer>
                </div>

                {/* Video Modal */}
                {isVideoOpen && (
                    <div className="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-6" onClick={() => setIsVideoOpen(false)}>
                        <div className="max-w-4xl w-full bg-slate-900 rounded-2xl p-8 relative" onClick={(e) => e.stopPropagation()}>
                            <button
                                onClick={() => setIsVideoOpen(false)}
                                aria-label="Cerrar modal de video"
                                className="absolute top-4 right-4 w-10 h-10 bg-slate-800 hover:bg-cyan-500/20 rounded-lg flex items-center justify-center transition-colors"
                            >
                                <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div className="aspect-video bg-slate-800 rounded-lg flex items-center justify-center">
                                <p className="text-gray-400">Demo video de CollectHub - Próximamente</p>
                            </div>
                        </div>
                    </div>
                )}
            </div>
        </>
    );
}
