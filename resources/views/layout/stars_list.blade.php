<ul class="stars-list list">
    @for ($i = 0; $i < $selected; $i++)
        <li class="item">
            <img src="{{ asset('img/star-selected.svg') }}" alt="Star" class="img">
        </li>
        <!-- /.item -->
    @endfor
    @for ($i = 0; $i < (5 - $selected); $i++)
        <li class="item">
            <img src="{{ asset('img/star-unselected.svg') }}" alt="Star" class="img">
        </li>
        <!-- /.item -->
    @endfor
</ul>
<!-- /.list -->
