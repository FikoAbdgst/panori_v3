<div class="w-full h-full relative bg-black overflow-hidden shadow-[0_0_20px_rgba(0,0,0,0.3)]">
    
    <div class="absolute z-[40] top-[5px] right-[10px] pointer-events-none">
        <img src="{{ asset('blacklove/blacklove6.png') }}" alt="Logo" class="h-[50px] w-auto scale-x-[-1] ">
    </div>
    <div class="absolute z-[30] top-[-1px] left-[7px] pointer-events-none">
        <img src="{{ asset('blacklove/blacklove1.png') }}" alt="Logo" class="h-[180px] w-auto scale-x-[-1] ">
    </div>
    <!-- First Photo Slot -->
    <div class="absolute top-[20px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="0">
        <div class="photo-slot">
            <img id="photo1" src="" class="w-full h-full object-cover">
            <button class="retake-button absolute top-1 right-1 text-lg z-[50]" data-index="0" data-has-photo="false">⟲</button>
        </div>
    </div>

    <!-- Second Photo Slot -->
    <div class="absolute top-[150px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="1">
        <div class="photo-slot">
            <img id="photo2" src="" class="w-full h-full object-cover">
            <button class="retake-button absolute top-1 right-1 text-lg z-[50]" data-index="1"
                data-has-photo="false">⟲</button>
        </div>
    </div>

    <div class="absolute z-[40] top-[140px] left-[10px]">
        <img src="{{ asset('blacklove/blacklove5.png') }}" alt="Logo" class="h-[40px] w-auto ">
    </div>
    <div class="absolute z-[30] top-[120px] right-[7px]">
        <img src="{{ asset('blacklove/blacklove2.png') }}" alt="Logo" class="h-[180px] w-auto ">
    </div>

    <!-- Third Photo Slot -->
    <div class="absolute top-[280px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="2">
        <div class="photo-slot">
            <img id="photo3" src="" class="w-full h-full object-cover">
            <button class="retake-button absolute top-1 right-1 text-lg z-[50]" data-index="2"
                data-has-photo="false">⟲</button>
        </div>
    </div>

    <div class="absolute z-[40] bottom-[200px] right-[10px] pointer-events-none">
        <img src="{{ asset('blacklove/blacklove4.png') }}" alt="Logo" class="h-[40px] w-auto">
    </div>
    <div class="absolute z-[30] bottom-[60px] left-[7px] pointer-events-none">
        <img src="{{ asset('blacklove/blacklove1.png') }}" alt="Logo" class="h-[180px] w-auto scale-x-[-1]">
    </div>
    <div class="absolute z-[30] bottom-[85px] left-[45px] pointer-events-none">
        <img src="{{ asset('blacklove/blacklove3.png') }}" alt="Logo" class="h-[50px] w-auto">
    </div>
    <div class="absolute z-[50] bottom-[-15px] left-[55px] pointer-events-none">
        <img src="{{ asset('panoricam.png') }}" alt="Logo" class="h-[80px] w-auto">
    </div>

</div>
