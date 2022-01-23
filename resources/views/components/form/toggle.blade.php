<div {{ $attributes->merge(["class" => "flex items-center justify-center self-center"]) }}>
    <label for="{{ $name }}" class="flex items-center cursor-pointer">
        <!-- toggle -->
        <div class="relative">
            <!-- input -->
            <input type="checkbox" id="{{ $name }}" class="sr-only">
            <!-- line -->
            <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
            <!-- dot -->
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
        </div>
        <!-- label -->
        <div class="ml-3 text-white font-medium">
            {{ $slot }}
        </div>
    </label>
</div>

