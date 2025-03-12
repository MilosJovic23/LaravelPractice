

<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    @foreach($jobs as $job)

        <li><strong>{{ $job['title'] }}:</strong>Pays {{$job['salary']}} per week</li>

    @endforeach

</x-layout>
