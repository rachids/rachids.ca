<div {{ $attributes->merge([
    'class' => 'bg-gradient-to-b from-blue-900 to-blue-400 p-3 mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8'
]) }}>
    <div>
        <label for="name" class="block text-sm font-medium text-gray-300">
            Nom:
        </label>
        <div class="mt-1">
            <x-form.input name="name" id="name" placeholder="Votre nom" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md"/>
        </div>
    </div>

    <div>
        <label for="courriel" class="block text-sm font-medium text-gray-300">
            Courriel:
        </label>
        <div class="mt-1">
            <x-form.input name="courriel" id="courriel" placeholder="Votre adresse courriel" type="email" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md"/>
        </div>
    </div>

    <div>
        <label for="sujet" class="block text-sm font-medium text-gray-300">
            Sujet:
        </label>
        <div class="mt-1">
            <x-form.input name="sujet" id="sujet" placeholder="Should Be A Select"/>
        </div>
    </div>

    <div>
        <label for="message" class="block text-sm font-medium text-gray-300">
            Message:
        </label>
        <div class="mt-1">
            <x-form.input name="message" id="message" placeholder="Should Be A Textarea"/>
        </div>
    </div>
</div>
