@auth
    <div class="tabs is-centered is-small">
        <ul>
            @forelse($globalBalanceData['types'] as $type)
                <li><a href="{{route('types.show',  $type)}}">{{$type->name}}</a></li>
                @empty
                <li>{{__('general.no-tags-added')}}</li>
            @endforelse
        </ul>
    </div>
@endauth


<div class="tabs is-centered is-small">
    <ul>
        <li><a  href="{{route('types.create')}}">{{__('general.new-tag')}}</a></li>
        <li><a  href="{{route('activities.create')}}">{{__('general.new-activity')}}</a></li>
        <li><a href="{{route('budget.index')}}">{{__('general.budget')}}</a></li>
        @auth<li onclick="document.querySelector('.modal').classList.add('is-active')"><a>{{__('general.add-a-note')}}</a></li>@endauth
    </ul>
</div>

@auth
<div class="modal">
   <div class="modal-background" onclick="document.querySelector('.modal').classList.remove('is-active')"></div>
    <div class="modal-card" style="color: white"><task-form :types="{{$globalBalanceData['types']}}"></task-form></div>
</div>
@endauth
