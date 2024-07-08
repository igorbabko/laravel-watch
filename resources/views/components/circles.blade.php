<svg {{ $attributes->merge(['class' => 'absolute w-1/2 opacity-15 -z-10']) }}
     xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
     xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800">
    <defs>
        <filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%"
                filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
            <feGaussianBlur stdDeviation="40" x="0%" y="0%" width="100%" height="100%"
                            in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur>
        </filter>
    </defs>
    <g filter="url(#bbblurry-filter)">
        <ellipse rx="150" ry="150" cx="343.9612174308737" cy="555.6379509571335"
                 fill="hsl(37, 99%, 67%)"></ellipse>
        <ellipse rx="150" ry="150" cx="561.017023695701" cy="355.94959135205335"
                 fill="hsl(316, 73%, 52%)"></ellipse>
        <ellipse rx="150" ry="150" cx="264.4129982993241" cy="265.81445975578265"
                 fill="hsl(185, 100%, 57%)"></ellipse>
    </g>
</svg>
