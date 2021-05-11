<input
    {{ $attributes->merge([
        "type" => "text",
        "placeholder" => "Votre texte ici.",
        "class" => "flex-1 mt-4 dark:bg-gray-800 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none focus:ring-2 ring-green-400 dark:ring-green-200",
        "name" => "default-input",
        "id" => "default-input",
    ]) }} />
