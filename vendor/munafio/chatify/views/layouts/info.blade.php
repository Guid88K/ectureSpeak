{{-- user info and avatar --}}
<div class="avatar av-l"></div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="messenger-infoView-btns">
    {{-- <a href="#" class="default"><i class="fas fa-camera"></i> за замовчуванням</a> --}}
    <a href="#" class="danger delete-conversation"><i class="fas fa-trash-alt"></i> Видалити розмову</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title">спільні фотографії</p>
    <div class="shared-photos-list"></div>
</div>