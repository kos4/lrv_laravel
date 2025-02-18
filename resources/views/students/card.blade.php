@include('includes.header')

<div class="actiton-links">
    <a href="{{ URL::route('groups.show', ['group' => $group->id]) }}" class="actiton-links__link">Назад</a>
</div>

<div class="student">
    <p>
        <b>Фамилия:</b> {{ $student->surname }}
    </p>
    <p>
        <b>Имя:</b> {{ $student->name }}
    </p>
    <p>
        <b>Группа:</b> {{ $group->title }}
    </p>
</div>

@include('includes.footer')
