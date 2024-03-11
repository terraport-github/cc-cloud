<x-layout.main>
    <x-slot:titleMain>
        業務ツール 画像生成
    </x-slot:titleMain>

    <x-slot:breadcrumb>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
            <li class="breadcrumb-item active">業務ツール</li>
        </ol>
    </x-slot:breadcrumb>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">業務ツール</div>
        <div class="card-body">
            {{-- <div class="row">
                    @foreach ($schools as $school)
                        <a href="{{ route('karte.detail', ['school_id' => $school->id]) }}">{{  $school->school_name ?? ''}}</a>
                    @endforeach
            </div> --}}
            
        </div>
    </div>
</x-layout.main>