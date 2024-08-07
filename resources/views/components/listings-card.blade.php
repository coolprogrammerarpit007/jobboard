@props(['listing'])
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex listing-detail">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt="laravel" width="100" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tag :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
            </div>
        </div>
    </div>
</div>