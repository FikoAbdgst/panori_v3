<div class="w-full h-full relative bg-blue-0 overflow-hidden shadow-[0_0_20px_rgba(0,0,0,0.3)]">
    <img src="{{ asset('stitch/bg.jpeg') }}" class="w-[190px] h-[500px] opacity-80 z-10" />

    <!-- First Photo Slot -->
    <div class="absolute top-[20px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="0">
        <div class="photo-slot relative w-full h-full">
            <img id="photo1" src="" class="w-full h-full object-cover bg-gray-100">
            <!-- Centered button container -->
            <div class="absolute inset-0 flex items-center justify-center gap-5 mr-5">
                <button
                    class="retake-button bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full w-8 h-8 flex items-center justify-center text-lg shadow-md transition-all"
                    data-index="0" data-has-photo="false" title="Retake Photo">⟲</button>
                <button
                    class="recrop-button bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full w-8 h-8 flex items-center justify-center shadow-md transition-all"
                    data-index="0" data-has-photo="false" title="Recrop Photo">✂</button>
            </div>
        </div>
    </div>

    <!-- Second Photo Slot -->
    <div class="absolute top-[150px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="1">
        <div class="photo-slot relative w-full h-full">
            <img id="photo2" src="" class="w-full h-full object-cover bg-gray-100">
            <!-- Centered button container -->
            <div class="absolute inset-0 flex items-center justify-center gap-5 mr-5">
                <button
                    class="retake-button bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full w-8 h-8 flex items-center justify-center text-lg shadow-md transition-all"
                    data-index="1" data-has-photo="false" title="Retake Photo">⟲</button>
                <button
                    class="recrop-button bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full w-8 h-8 flex items-center justify-center shadow-md transition-all"
                    data-index="1" data-has-photo="false" title="Recrop Photo">✂</button>
            </div>
        </div>
    </div>

    <!-- Third Photo Slot -->
    <div class="absolute top-[280px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="2">
        <div class="photo-slot relative w-full h-full">
            <img id="photo3" src="" class="w-full h-full object-cover bg-gray-100">
            <!-- Centered button container -->
            <div class="absolute inset-0 flex items-center justify-center gap-5 mr-5">
                <button
                    class="retake-button bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full w-8 h-8 flex items-center justify-center text-lg shadow-md transition-all"
                    data-index="2" data-has-photo="false" title="Retake Photo">⟲</button>
                <button
                    class="recrop-button bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full w-8 h-8 flex items-center justify-center shadow-md transition-all"
                    data-index="2" data-has-photo="false" title="Recrop Photo">✂</button>
            </div>
        </div>
    </div>

    <div class="absolute z-[30] bottom-[385px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/tag.png') }}" alt="Nj1" style="transform: translateX(-10px);"
            class="h-100px] w-auto">
    </div>

    <div class="absolute z-[30] bottom-[355px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/stch1.png') }}" alt="Nj2" style="transform: translateX(-57px) rotate(50deg);"
            class="h-[105px] w-auto">
    </div>

    <div class="absolute z-[30] bottom-[300px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/stch7.png') }}" alt="Nj2" style="transform: translateX(125px);"
            class="h-[140px] w-auto">
    </div>


    <div class="absolute z-[30] bottom-[175px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/stch4.png') }}" alt="Nj1" style="transform: translateX(-20px);"
            class="h-[130px] w-auto">
    </div>
    <div class="absolute z-[30] bottom-[190px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/stch5.png') }}" alt="Nj2" style="transform: translateX(125px);"
            class="h-[65px] w-auto">
    </div>

    <div class="absolute z-[30] bottom-[60px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/stch6.png') }}" alt="Nj3" style="transform: translateX(-10px);"
            class="h-[100px] w-auto">
    </div>
    <div class="absolute z-[30] bottom-[-80px] left-2 w-full text-center pointer-events-none">
        <img src="{{ asset('stitch/stch2.png') }}" alt="Nj7" class="w-[200px]"
            style="transform: translateX(60px) rotate(-10deg);">

    </div>
    <div class="absolute z-[50] bottom-[-10px] left-[60px] pointer-events-none">
        <img src="{{ asset('panoricam.png') }}" alt="Logo" class="h-[60px] w-auto">
    </div>


</div>
