<form
    action="/"
    {{ $attributes->merge(["class" => "flex w-full flex-col gap-4 sm:gap-6"]) }}
>
    {{ $slot }}
</form>
