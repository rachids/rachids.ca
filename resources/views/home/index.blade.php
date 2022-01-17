<x-layouts.landing>
    <h1 class="mb-4 text-2xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
        <span class="xl:inline">Bienvenue</span>
        <span class="text-blue-400 xl:inline">sur mon site</span>
    </h1>

    <div class="lg:flex lg:justify-center font-serif">
        <div class="lg:w-1/2">
            <p class="mt-2">
                Je m'appelle Rachid, je travaille avec PHP depuis plus de 20 ans. <br/>
                J'ai eu le temps de bien voir les évolutions de ce langage, notamment dans les dernières années. <br/>
                Depuis 2015 je m'efforce d'étendre mes connaissances sur des sujets tels que:
            </p>

            <ul class="mt-2 list-disc ml-5 list-inside">
                <li>le TDD : le développement piloté par les tests</li>
                <li>la qualité du code</li>
                <li>le framework Laravel</li>
                <li>les pratiques d'intégration continue et de livraison continue <em>(CI/CD)</em></li>
            </ul>

            <p class="mt-2">
                Suivez mon cheminement à travers <x-ui.link href="{{ route('blog.index') }}">mon blog</x-ui.link>,
                <x-ui.link href="https://twitter.com/rachid_in">mon fil Twitter</x-ui.link> ainsi que
                <x-ui.link href="https://www.youtube.com/channel/UCsmtNx-781JBVIDw6bNkKvw">mes capsules vidéos sur Youtube</x-ui.link>.
            </p>
        </div>

        <div class="lg:w-1/2">
            <div class="max-w-md mx-auto py-4 px-8 bg-white shadow-lg rounded-lg mt-10 lg:mt-0 mb-20">
                <div>
                    <h2 class="text-gray-800 text-3xl font-semibold font-sans">
                        Dernière vidéo publiée
                    </h2>
                    <p class="mt-2 text-gray-600 font-serif font-semibold">
                        Une de mes résolutions, pour 2022, est de créer du contenu vidéo.<br/>
                        Qu'il s'agisse de découverte, d'apprentissage, de tutoriels ou encore d'astuces, vous trouverez
                        dans cet encart une description et un lien vers la dernière vidéo publiée sur ma chaîne.<br/>
                        Restez à l'affût, première publication pour janvier !
                    </p>
                </div>
                <div class="flex justify-end gap-2 mt-4">
                    <x-svg.youtube class="text-red-600 hover:text-red-500"/>
                    <a href="{{ config('social.youtube') }}" class="text-xl font-medium text-indigo-600 font-serif">Consulter la chaîne</a>
                </div>
            </div>
        </div>
    </div>

</x-layouts.landing>
