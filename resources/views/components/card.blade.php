
@props(['job'])
<div class="relative px-4 pt-7 pb-4 border mb-8 bg-white rounded {{$job["featured"]?' border-0 border-l-4 border-desDarkCyan':''}}
        lg:flex lg:flex-row">
    <div class="absolute left-5 -top-5 lg:relative lg:left-0 lg:top-0 lg:flex lg:justify-center lg:items-center lg:mr-5">
        <img class="w-10 h-10 lg:w-28 lg:h-28" src="{{ asset(''. $job["logo"] ) }}"/>
    </div>
    <div class="flex flex-1 flex-col lg:justify-between lg:flex-row">
        <div class="border-b border-darkGrayCyan lg:flex lg:items-center lg:border-0">
            <div>
                <div class="flex gap-4 mb-2">
                    <p class="text-desDarkCyan font-leagueSpartan font-bold text-sm flex self-center">{{$job["company"]}}</p>
                    @if($job["new"])
                        <p class="bg-desDarkCyan rounded-3xl text-white text-center text-xs font-leagueSpartan py-1 px-2">NEW!</p>
                    @endif
                    @if($job["featured"])
                        <span class="bg-veryDarkGrayCyan rounded-3xl text-white text-xs font-leagueSpartan py-1 px-2 text-center">{{$job["featured"]? 'FEATURED':''}}</span>
                    @endif
                </div>
                <div class="mb-2">
                    <p class="font-leagueSpartan font-bold text-sm">{{$job["position"]}}</p>
                </div>
                <div class="flex mb-4 lg:mb-0">
                    <span class="text-darkGrayCyan font-medium text-xs">{{$job["postedAt"]}}</span>
                    <ul class="flex list-disc">
                        <li class="text-darkGrayCyan font-medium text-xs ml-5">{{$job["contract"]}}</li>
                        <li class="text-darkGrayCyan font-medium text-xs ml-5">{{$job["location"]}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap gap-3 pt-4 items-center lg:pt-0 lg:w-auto w-[75%]">
            <a href="/?tags={{$job["role"]}}">
                <span class="cursor-pointer py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{{$job["role"]}}</span>
            </a>
            <a href="/?tags={{$job["level"]}}"> 
                <span class="cursor-pointer	py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{{$job["level"]}}</span>
            </a>
            @foreach($job["tools"] as $tool)
                <a href="/?tags={{$tool}}">    
                    <span class="cursor-pointer	py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{{$tool}}</span>
                </a>
            @endforeach
            @foreach($job["languages"] as $language)
                <a href="/?tags={{$language}}">
                    <span class="cursor-pointer	py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{{$language}}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>