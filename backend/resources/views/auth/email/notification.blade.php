マリストに登録しているアイテムの価格が下がりました。<br>
<br>
<div>・{{ $item->title }}</div>
<span style="text-decoration:line-through;">￥{{number_format( $item->registration_price)}}</span>
<span>→</span>
<span>￥{{number_format( $item->current_price)}}</span>

<br>
<br>
<a href="{{url('register/mypage')}}">マイリストへ</a>
