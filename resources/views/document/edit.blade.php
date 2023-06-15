<x-layout.main>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
            <h1 class="h3">
                <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                {{ $school->school_name }} 仕様書編集
            </h1>
        </div>
        <form action="{{ route('school.post', ['school_id' => $school->id]) }}" method="POST">
            @csrf
            <x-edit.document_form :school=$school :documentKind=$document_kind :isMulti=false/>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
</x-layout.main>