@include('includes.header')

<div class="actiton-links">
    <a href="{{ URL::route('groups.index') }}" class="actiton-links__link">Назад</a>
</div>

<div class="group">
    <p>
        <b>Название группы:</b> {{ $group->title }}
    </p>
    <p>
        <b>Дата начала обучения:</b> {{ \Carbon\Carbon::parse($group->start_from)->format('d.m.Y') }}
    </p>
    <p>
        <b>Начала ли группа своё обучение:</b> {{ $group->is_active ? 'да' : 'нет' }}
    </p>
    <p>
        <a href="{{ URL::route('students.create', ['group' => $group->id]) }}">Добавить студента</a>
    </p>
    @if($students->count())
        <p>
            <b>Состав группы:</b>
        </p>
        <ol>
            @foreach($students as $student)
                <li><a href="{{ URL::route('students.show', [
                    'student' => $student->id,
                    'group' => $group->id,
                ]) }}">{{ $student->surname }} {{ $student->name }}</a></li>
            @endforeach
        </ol>
    @endif
</div>

@include('includes.footer')
