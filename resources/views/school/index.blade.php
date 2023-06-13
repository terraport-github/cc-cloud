<x-layout.main>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
            <h1 class="h3">
                <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                学校一覧
            </h1>
        </div>

        <div class="card shadow-sm mb-3">
            <div class="card-header heading">学校一覧</div>
            <div class="card-body">
                <div class="row">
                        @foreach ($schools as $school)
                            <a href="{{ route('school.detail', ['school_id' => $school->id]) }}">{{  $school->school_name ?? ''}}</a>
                        @endforeach
                </div>
            </div>
        </div>
    </main>
</x-layout.main>