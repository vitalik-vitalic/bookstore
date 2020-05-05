@php
$link_limit = 6;
@endphp
@if($paginator->lastPage() > 1)
<ul class="pagination-btns flex-center">
    <li><a href="{{$paginator->url(1)}}" class="single-btn prev-btn ">|<i
                class="zmdi zmdi-chevron-left"></i> </a></li>
    @php
        $counter = 0;
    @endphp
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <?php
        $half_total_links = floor($link_limit / 2);
        $from = $paginator->currentPage() - $half_total_links;
        $to = $paginator->currentPage() + $half_total_links;
        if ($paginator->currentPage() < $half_total_links){
            $to += $half_total_links - $paginator->currentPage();
        }
        if($paginator->lastPage() - $paginator->currentPage() < $half_total_links){
            $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
        }
        ?>

    @if($from < $i && $i < $to)
        @php
            $counter += 1;
            if($i == $paginator->currentPage()){
                $class = 'active';
            }else{
                $class = '';
            }
        @endphp

        @if(($i == $paginator->firstItem()) || ($i == $paginator->lastItem()))
            <li class="{{$class}}"><a href="{{$paginator->url($i)}}" class="single-btn">{{$i}}</a></li>
        @elseif($counter == 1)
             <li class="{{$class}}"><a href="{{$paginator->url($paginator->currentPage() - 1)}}" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a></li>
        @elseif($counter == ($link_limit -1) && ($i != $paginator->lastPage()))
            <li class="{{$class}}"><a href="{{$paginator->url($paginator->currentPage() + 1)}}" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a></li>
        @else
            <li class="{{$class}}"><a href="{{$paginator->url($i)}}" class="single-btn">{{$i}}</a></li>
        @endif
    @endif
    @endfor
    <li><a href="{{$paginator->url($paginator->lastPage())}}" class="single-btn next-btn"><i
                class="zmdi zmdi-chevron-right"></i>|</a></li>
</ul>
@endif
