<x-app-layout>
    <x-slot name="title">Create Note</x-slot>
  
    <div class="note-container single-note">
        <h1>Create New Note</h1>
        <form action="{{route('note.store')}}" method="POST" class="note">
            @csrf
            <textarea name="note" id="" rows="10" class="note-body" placeholder="Write your note here ...."></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>