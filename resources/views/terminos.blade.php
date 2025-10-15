@extends('layouts.app')

@section('title', 'Términos y Condiciones - hayvoy')
@section('description', 'Términos y condiciones de uso de los servicios de hayvoy. Lee nuestros términos antes de utilizar nuestros servicios.')

@section('content')
<div class="container mx-auto px-6 py-12 max-w-4xl">
    <!-- Hero Section -->
    <div class="text-center mb-16 animate-fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Términos y <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Condiciones</span>
        </h1>
        <p class="text-gray-400">Última actualización: {{ date('d/m/Y') }}</p>
    </div>

    <!-- Content -->
    <div class="bg-gradient-to-br from-slate-900/50 to-slate-800/30 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-white/10">
        <div class="prose prose-invert prose-cyan max-w-none">
            <p class="text-gray-300 text-lg mb-8">
                Bienvenido a hayvoy. Al acceder y utilizar nuestro sitio web y servicios, usted acepta estar sujeto a los siguientes términos y condiciones.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">1. Aceptación de los Términos</h2>
            <p class="text-gray-300 mb-6">
                Al acceder y usar este sitio web, usted acepta cumplir con estos términos y condiciones de uso, todas las leyes y regulaciones aplicables, y acepta que es responsable del cumplimiento de las leyes locales aplicables. Si no está de acuerdo con alguno de estos términos, tiene prohibido usar o acceder a este sitio.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">2. Uso del Servicio</h2>
            <p class="text-gray-300 mb-4">
                Usted se compromete a usar nuestros servicios solo para fines legales y de acuerdo con estos Términos. Específicamente, se compromete a no:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Usar el servicio de manera que viole cualquier ley local, nacional o internacional aplicable</li>
                <li>Transmitir material que sea difamatorio, obsceno, ofensivo o ilegal</li>
                <li>Intentar obtener acceso no autorizado a nuestros sistemas o redes</li>
                <li>Interferir o interrumpir la integridad o el rendimiento del servicio</li>
                <li>Copiar, modificar o distribuir nuestro contenido sin autorización</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">3. Propiedad Intelectual</h2>
            <p class="text-gray-300 mb-6">
                El contenido de este sitio web, incluyendo pero no limitado a texto, gráficos, logos, iconos, imágenes, clips de audio, descargas digitales y compilaciones de datos, es propiedad de hayvoy o de sus proveedores de contenido y está protegido por las leyes de propiedad intelectual de El Salvador e internacionales.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">4. Servicios Profesionales</h2>
            <p class="text-gray-300 mb-4">
                Los servicios de desarrollo de software y consultoría se proporcionan bajo los siguientes términos:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Todos los proyectos requieren un acuerdo de servicio específico</li>
                <li>Los plazos de entrega se especificarán en el contrato de proyecto</li>
                <li>Los cambios en el alcance del proyecto pueden afectar los plazos y costos</li>
                <li>Se requiere aprobación del cliente en hitos clave del proyecto</li>
                <li>El código fuente y la propiedad intelectual se regirán según el contrato específico</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">5. Garantías y Responsabilidades</h2>
            <p class="text-gray-300 mb-6">
                hayvoy se compromete a proporcionar servicios de alta calidad. Sin embargo:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Los servicios se proporcionan "tal cual" y "según disponibilidad"</li>
                <li>No garantizamos que el servicio será ininterrumpido o libre de errores</li>
                <li>Nuestra responsabilidad se limita al monto pagado por el servicio específico</li>
                <li>No somos responsables de daños indirectos o consecuentes</li>
                <li>Las garantías específicas se detallarán en los contratos de servicio individuales</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">6. Confidencialidad</h2>
            <p class="text-gray-300 mb-6">
                Nos comprometemos a mantener la confidencialidad de toda la información compartida durante la prestación de servicios. Ambas partes pueden estar sujetas a un Acuerdo de No Divulgación (NDA) separado según sea necesario.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">7. Pagos y Facturación</h2>
            <p class="text-gray-300 mb-4">
                Para servicios contratados:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Los términos de pago se especificarán en cada propuesta o contrato</li>
                <li>Los pagos vencen según los hitos acordados o cronograma establecido</li>
                <li>Los pagos atrasados pueden estar sujetos a cargos por mora</li>
                <li>Nos reservamos el derecho de suspender servicios por falta de pago</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">8. Terminación</h2>
            <p class="text-gray-300 mb-6">
                Podemos terminar o suspender el acceso a nuestro servicio inmediatamente, sin previo aviso ni responsabilidad, por cualquier motivo, incluyendo sin limitación si usted incumple los Términos. Todas las disposiciones de los Términos que por su naturaleza deban sobrevivir a la terminación, sobrevivirán.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">9. Soporte y Mantenimiento</h2>
            <p class="text-gray-300 mb-6">
                El soporte y mantenimiento de productos desarrollados se regirá por acuerdos de nivel de servicio (SLA) específicos. Los servicios de soporte pueden incluir:
            </p>
            <ul class="list-disc list-inside text-gray-300 space-y-2 mb-6">
                <li>Corrección de errores críticos</li>
                <li>Actualizaciones de seguridad</li>
                <li>Soporte técnico según horario acordado</li>
                <li>Mantenimiento preventivo</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">10. Modificaciones</h2>
            <p class="text-gray-300 mb-6">
                Nos reservamos el derecho de modificar o reemplazar estos Términos en cualquier momento. Si una revisión es material, intentaremos proporcionar un aviso de al menos 30 días antes de que entren en vigencia los nuevos términos.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">11. Ley Aplicable</h2>
            <p class="text-gray-300 mb-6">
                Estos Términos se regirán e interpretarán de acuerdo con las leyes de El Salvador, sin tener en cuenta sus disposiciones sobre conflictos de leyes. Cualquier disputa relacionada con estos términos se resolverá en los tribunales de San Salvador, El Salvador.
            </p>

            <h2 class="text-2xl font-bold text-white mb-4 mt-8">12. Contacto</h2>
            <p class="text-gray-300 mb-4">
                Si tiene preguntas sobre estos Términos y Condiciones, puede contactarnos:
            </p>
            <div class="bg-slate-800/50 rounded-xl p-6 mb-6">
                <p class="text-gray-300 mb-2"><span class="text-cyan-400 font-semibold">Email:</span> <a href="mailto:legal@hayvoy.com" class="text-cyan-400 hover:text-cyan-300">legal@hayvoy.com</a></p>
                <p class="text-gray-300 mb-2"><span class="text-cyan-400 font-semibold">Teléfono:</span> <a href="tel:+50378901234" class="text-cyan-400 hover:text-cyan-300">+503 7890-1234</a></p>
                <p class="text-gray-300"><span class="text-cyan-400 font-semibold">Dirección:</span> San Salvador, El Salvador</p>
            </div>

            <div class="bg-cyan-500/10 border border-cyan-500/20 rounded-xl p-6 mt-8">
                <p class="text-cyan-400 font-semibold mb-2">🇸🇻 Compromiso de Calidad</p>
                <p class="text-gray-300">
                    En hayvoy nos comprometemos a proporcionar servicios de la más alta calidad, respetando siempre los estándares éticos y legales de la industria tecnológica.
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
