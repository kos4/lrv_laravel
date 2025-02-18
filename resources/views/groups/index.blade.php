@include('includes.header')

<div class="groups">
    <div class="actiton-links">
        <a href="{{ URL::route('groups.create') }}" class="actiton-links__link">Создать группу</a>
    </div>

    <div class="groups__list">
        <div class="groups__item groups__item-head">Название группы</div>
        <div class="groups__item groups__item-head">Дата начала</div>
        <div class="groups__item groups__item-head">Идет обучение</div>
        <div class="groups__item groups__item-head">Действие</div>
        @foreach($groups as $group)
            <div class="groups__item groups__item-title">{{$group->title}}</div>
            <div class="groups__item groups__item-date">{{ \Carbon\Carbon::parse($group->start_from)->format('d.m.Y') }}</div>
            <div class="groups__item groups__item-status">{{ $group->is_active ? 'да' : 'нет' }}</div>
            <div class="groups__item groups__item-action">
                <a href="{{ URL::route('groups.show', ['group' => $group->id]) }}">Просмотр</a>
            </div>
        @endforeach
    </div>
</div>

@include('includes.footer')
