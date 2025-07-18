<div class="w-full h-full relative bg-white overflow-hidden shadow-[0_0_20px_rgba(0,0,0,0.3)]">
     <img src="{{ asset('wony/bg-wony.png') }}" 
         class="w-[190px] h-[500px] opacity-80 z-10" />
    
    <div class="absolute z-[30] top-[49px] left-[-30px] pointer-events-none">
        <img src="{{ asset('wony/wony1.png') }}" alt="Logo" class="h-[90px] w-auto">
    </div>
    <div class="absolute z-[30] top-[1px] right-[-10px] pointer-events-none">
        <img src="{{ asset('wony/wony2.png') }}" alt="Logo" class="h-[55px] w-auto">
    </div>
    <!-- First Photo Slot -->
    <div class="absolute top-[20px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="0">
        <div class="photo-slot">
            <img id="photo1" src="" class="w-full h-full object-cover">
            <button class="retake-button absolute top-1 right-1 text-lg z-[50]" data-index="0" data-has-photo="false">⟲</button>
        </div>
    </div>

    <div class="absolute z-[30] top-[140px] right-[-5px] pointer-events-none">
        <img src="{{ asset('wony/wony3.png') }}" alt="Logo" class="h-[40px] w-auto ">
    </div>
    <div class="absolute z-[30] top-[240px] right-[-10px] pointer-events-none">
        <img src="{{ asset('wony/wony5.png') }}" alt="Logo" class="h-[70px] w-auto ">
    </div>
    <div class="absolute z-[30] top-[180px] left-[-23px] pointer-events-none">
        <img src="{{ asset('wony/wony4.png') }}" alt="Logo" class="h-[70px] w-auto ">
    </div>

    <!-- Second Photo Slot -->
    <div class="absolute top-[150px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="1">
        <div class="photo-slot">
            <img id="photo2" src="" class="w-full h-full object-cover">
            <button class="retake-button absolute top-1 right-1 text-lg z-[50]" data-index="1"
                data-has-photo="false">⟲</button>
        </div>
    </div>

    <!-- Third Photo Slot -->
    <div class="absolute top-[280px] left-[10px] w-[calc(100%-20px)] h-[120px]" data-photo-index="2">
        <div class="photo-slot">
            <img id="photo3" src="" class="w-full h-full object-cover">
            <button class="retake-button absolute top-1 right-1 text-lg z-[50]" data-index="2"
                data-has-photo="false">⟲</button>
        </div>
    </div>

    <div class="absolute z-[30] bottom-[100px] left-[-30px] pointer-events-none">
        <img src="{{ asset('wony/wony6.png') }}" alt="Logo" class="h-[90px] w-auto ">
    </div>
    <div class="absolute z-[30] bottom-[60px] right-[-30px] pointer-events-none">
        <img src="{{ asset('wony/wony7.png') }}" alt="Logo" class="h-[85px] w-auto ">
    </div>

    <div class=" z-[20] relative bottom-[35px] left-[-5px] ">
        <img src="{{ asset('panoricam2.png') }}" alt="Logo" class="h-[15px] w-auto mx-auto ">
    </div>

</div>
