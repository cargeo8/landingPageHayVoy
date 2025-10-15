@extends('layouts.app')

@section('title', 'Política de Privacidad - hayvoy')
@section('description', 'Política de privacidad de hayvoy. Conoce cómo protegemos y manejamos tu información personal.')

@section('content')
<div class="container mx-auto px-6 py-12 max-w-4xl">
    <!-- Hero Section -->
    <div class="text-center mb-16 animate-fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Política de <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Privacidad</span>
        </h1>
        <p class="text-gray-400">Última actualización: {{ date('d/m/Y') }}</p>
    </div>

    <!-- Content -->
    <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-white/10">
        <div class="prose prose-invert prose-cyan max-w-none">
            <p class="text-gray-300 text-lg mb-8">
                En hayvoy, nos tomamos muy en serio la privacidad de nuestros usuarios y clientes. Esta Política de Privacidad describe cómo recopilamos, usamos y protegemos su información personal.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">1. Información que Recopilamos</h2>
            <p class="text-gray-300 mb-4">
                Recopilamos información que usted nos proporciona directamente cuando:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Se pone en contacto con nosotros a través de formularios</li>
                <li>Solicita información sobre nuestros servicios</li>
                <li>Participa en consultas o evaluaciones técnicas</li>
                <li>Utiliza nuestros servicios o productos</li>
            </ul>

            <p class="text-gray-300 mb-6">
                Esta información puede incluir: nombre, correo electrónico, número de teléfono, empresa, y cualquier otra información que decida compartir con nosotros.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">2. Cómo Usamos su Información</h2>
            <p class="text-gray-300 mb-4">
                Utilizamos la información recopilada para:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Responder a sus consultas y solicitudes</li>
                <li>Proporcionar y mejorar nuestros servicios</li>
                <li>Enviar información relevante sobre nuestros productos y servicios</li>
                <li>Cumplir con obligaciones legales y regulatorias</li>
                <li>Prevenir fraudes y garantizar la seguridad</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">3. Compartir Información</h2>
            <p class="text-gray-300 mb-6">
                No vendemos, alquilamos ni compartimos su información personal con terceros, excepto:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Cuando usted nos da su consentimiento explícito</li>
                <li>Para cumplir con la ley o procesos legales</li>
                <li>Con proveedores de servicios que nos ayudan a operar nuestro negocio (bajo estrictos acuerdos de confidencialidad)</li>
                <li>Para proteger nuestros derechos, propiedad o seguridad</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">4. Seguridad de los Datos</h2>
            <p class="text-gray-300 mb-6">
                Implementamos medidas de seguridad técnicas y organizativas apropiadas para proteger su información personal contra acceso no autorizado, alteración, divulgación o destrucción. Esto incluye:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Cifrado de datos en tránsito y en reposo</li>
                <li>Controles de acceso estrictos</li>
                <li>Auditorías de seguridad regulares</li>
                <li>Capacitación del personal en protección de datos</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">5. Cookies y Tecnologías Similares</h2>
            <p class="text-gray-300 mb-6">
                Utilizamos cookies y tecnologías similares para mejorar su experiencia en nuestro sitio web. Las cookies nos ayudan a entender cómo usa nuestro sitio y a personalizarlo según sus preferencias. Puede configurar su navegador para rechazar cookies, aunque esto puede afectar algunas funcionalidades del sitio.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">6. Sus Derechos</h2>
            <p class="text-gray-300 mb-4">
                Usted tiene derecho a:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Acceder a su información personal que tenemos</li>
                <li>Solicitar la corrección de información inexacta</li>
                <li>Solicitar la eliminación de su información</li>
                <li>Oponerse al procesamiento de su información</li>
                <li>Solicitar la portabilidad de sus datos</li>
                <li>Retirar su consentimiento en cualquier momento</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">7. Retención de Datos</h2>
            <p class="text-gray-300 mb-6">
                Conservamos su información personal solo durante el tiempo necesario para cumplir con los fines para los que fue recopilada, incluyendo requisitos legales, contables o de informes.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">8. Cambios a esta Política</h2>
            <p class="text-gray-300 mb-6">
                Podemos actualizar esta Política de Privacidad ocasionalmente. Le notificaremos cualquier cambio publicando la nueva política en esta página y actualizando la fecha de "última actualización".
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">9. Contacto</h2>
            <p class="text-gray-300 mb-4">
                Si tiene preguntas sobre esta Política de Privacidad o desea ejercer sus derechos, puede contactarnos:
            </p>
            <div class="bg-slate-800/50 rounded-xl p-6 mb-6">
                <p class="text-gray-300 mb-2"><span class="text-cyan-400 font-semibold">Email:</span> <a href="mailto:privacidad@hayvoy.com" class="text-cyan-400 hover:text-cyan-300">privacidad@hayvoy.com</a></p>
                <p class="text-gray-300 mb-2"><span class="text-cyan-400 font-semibold">Teléfono:</span> <a href="tel:+50378901234" class="text-cyan-400 hover:text-cyan-300">+503 7890-1234</a></p>
                <p class="text-gray-300"><span class="text-cyan-400 font-semibold">Dirección:</span> San Salvador, El Salvador</p>
            </div>

            <div class="bg-cyan-500/10 border border-cyan-500/20 rounded-xl p-6 mt-8">
                <p class="text-cyan-400 font-semibold mb-2">🇸🇻 Cumplimiento Legal</p>
                <p class="text-gray-300">
                    Esta política cumple con las leyes de protección de datos aplicables en El Salvador y las mejores prácticas internacionales de privacidad.
                </p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="mt-12 text-center">
        <a 
            href="{{ route('home') }}" 
            class="inline-flex items-center gap-2 text-cyan-400 hover:text-cyan-300 font-semibold"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Volver al inicio
        </a>
    </div>
</div>
@endsection
